<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Itinery;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use App\Models\Packets;
use App\Models\Partner_branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $params = $_GET;

        $query = Photo::with('packets.tiketGroup', 'hotels');

        if (!empty($params['departure_city'])) {
            $query->whereHas('packets', function ($query) use ($params) {
                $query->where('departure_city', $params['departure_city']);
            });
        }
        if (!empty($params['departure_date'])) {
            $query->whereHas('packets', function ($query) use ($params) {
                $query->whereMonth('departure_date', '=', $params['departure_date']);
            });
        }

        $today = Carbon::today()->toDateString();

        $query->whereHas('packets', function ($query) use ($today) {
            $query->where('departure_date', '>=', $today);
        });
                        
        $data = $query->orderBy('id', 'DESC')->paginate(6);

        // dd($data);
        return view('v_home', compact('data'));
    }

    public function detailProduct($id){
        $id = explode("&", $id);
        $day = $id[1];

        $data = Itinery::with('photo.packets.informasiTravels', 'photo.hotels.moneyPackets', 'photo.conditions', 'photo.hotels.facility', 'photo.packets.tiketGroup', 'photo.packets.partnerBranches.regency')->where('id', $id[0])->first();
        $data_due_date = DB::table('settingdue_dates')->first();
        $tanggalSekarang = Carbon::now();
        $due_date = $tanggalSekarang->addDays($data_due_date->days);
        
        $today = Carbon::today()->toDateString();
        $query_other_packet = Photo::with('packets','packets.tiketGroup', 'hotels');
        
        $query_other_packet->whereHas('packets', function ($query) use ($today, $data) {
            $query->where('departure_date', '>=', $today)
                  ->where('id', '!=', 29);
        });
        
        $other_packet = $query_other_packet->orderBy('id','DESC')->get();

        $partner_branches = Partner_branch::orderBy('id','DESC')->get();

        $using_seat = Transaction::where('id_packet', $data->photo->packets->id)->where('transaction_status', 'success')->count();
        $available_seat = $data->photo->packets->seat_capasitas - $using_seat;

        $presentase_seat = ($available_seat / $data->photo->packets->seat_capasitas) * 100;

        return view('v_detail_packets', compact('data', 'day', 'other_packet', 'due_date', 'partner_branches', 'available_seat', 'presentase_seat'));
    }

    public function store(Request $request){

        // cek agar data unique
        $validator = Transaction::where('id_packet', $request->id_packet)
                                ->where('id_user', $request->id_user)
                                ->where('transaction_status', 'BELUM BAYAR')
                                ->first();

        if ($validator != null) {
            return response()->json(['code' => 500, 'message' => 'Data ganda, pastikan anda sudah menyelesaikan transaksi untuk paket ini!']);
        }

        $transactionDetails = [];

        // Organize the input data into sets for insertion
        foreach ($request->detail as $field) {
            $fieldName = $field['name'];
            $fieldValue = $field['value'];

            preg_match('/^(.+)\[\]$/', $fieldName, $matches);

            if (count($matches) == 2) {
                $fieldName = $matches[1];

                if (!isset($transactionDetails[$fieldName])) {
                    $transactionDetails[$fieldName] = [];
                }

                $transactionDetails[$fieldName][] = $fieldValue;
            }
        }

        $count = Transaction::count();

        $transaction = Transaction::create([
            'id_user' => $request->id_user,
            'id_packet' => $request->id_packet,
            'due_date' => $request->due_date,
            'transaction_code' => 'ON'.date('dmYs').$count,
            'transaction_status' => 'BELUM BAYAR',
            'room_type' => $request->room_type,
            'hotel_type' => $request->hotel_type,
            'dp' => 0,
            'departing_from' => $request->departing_from,
            'grand_total' => $request->grand_total,
        ]);

        // Insert the organized data into the model
        foreach ($transactionDetails['jamaah_type'] as $key => $jamaahType) {

            if ($jamaahType === null) {
                continue;
            }

            Transaction_detail::create([
                'id_transaction' => $transaction->id,
                'jamaah_type' => $jamaahType,
                'qty' => $transactionDetails['qty'][$key] ?? 0,
                'price' => $transactionDetails['price'][$key] ?? 0,
                'sub_total' => $transactionDetails['sub_total'][$key] ?? 0,
            ]);
        }

        return response()->json(['code' => 200, 'message' => 'Data berhasil dikirim!, otomatis beralih ke halaman Pesanan']);
    }

    public function all_product(){
        $data = Photo::with('packets.tiketGroup', 'hotels')->orderBy('id','DESC')->get();
        return view('v_all_product', compact('data'));
    }

    public function search_city(Request $request){
        $search = $request->search;

        $posts = Packets::where(function($query) use ($search){

            $query->where('departure_city','like',"%$search%");

        })
        ->get();

        $data = Photo::with('packets.tiketGroup', 'hotels')->orderBy('id','DESC')->get();

        return view('v_all_product', compact('posts','search', 'data'));
    }
}
