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
use Illuminate\Support\Facades\Http;

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
        $id_user = @$id[2];

        $data = Itinery::with('photo.packets.informasiTravels', 'photo.hotels.moneyPackets', 'photo.conditions', 'photo.hotels.facility', 'photo.packets.tiketGroup', 'photo.packets.partnerBranches.regency')->where('id', $id[0])->first();
        $data_due_date = DB::table('settingdue_dates')->first();
        $tanggalSekarang = Carbon::now();
        $due_date = $tanggalSekarang->addDays($data_due_date->days);
        
        $today = Carbon::today()->toDateString();
        $query_other_packet = Photo::with('packets','packets.tiketGroup', 'hotels');
        
        $query_other_packet->whereHas('packets', function ($query) use ($today, $data) {
            $query->where('departure_date', '>=', $today)
                  ->where('id', '!=', $data->photo->packets->id);
        });
        
        $other_packet = $query_other_packet->take(6)->orderBy('id','DESC')->get();

        $partner_branches = Partner_branch::where('id_user', $data->photo->packets->informasiTravels->id_user)->orderBy('id','DESC')->get();

        $using_seat = Transaction::where('id_packet', $data->photo->packets->id)->where('transaction_status', 'success')->count();
        $available_seat = $data->photo->packets->seat_capasitas - $using_seat;

        $presentase_seat = ($available_seat / $data->photo->packets->seat_capasitas) * 100;

        return view('v_detail_packets', compact('data', 'day', 'other_packet', 'due_date', 'partner_branches', 'available_seat', 'presentase_seat', 'id_user'));
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
            'transaction_code' => $request->flag_transaction_code.date('dmYs').$count,
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
        $params = $_GET;
        $query = Photo::with('packets.tiketGroup', 'hotels');

        if (!empty($params['departure_date'])) {
            $query->whereHas('packets', function ($query) use ($params) {
                $query->whereMonth('departure_date', '=', $params['departure_date']);
            });
        }
        
        if (!empty($params['tanggal_awal'])) {
            $tanggal_awal = date('Y-m-d', strtotime($params['tanggal_awal']));
            $tanggal_akhir = date('Y-m-d', strtotime($params['tanggal_akhir']));
            $query->whereHas('packets', function ($query) use ($tanggal_awal, $tanggal_akhir) {
                $query->where('departure_date', '>=', $tanggal_awal);
                $query->where('departure_date', '<=', $tanggal_akhir);
            });
        }

        $today = Carbon::today()->toDateString();

        $query->whereHas('packets', function ($query) use ($today) {
            $query->where('departure_date', '>=', $today);
        });

        $data = $query->orderBy('id', 'DESC')->get();
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

    public function blog(){
        $title = "Blog";

        $keyword = (!empty($_GET['keyword']) ? $_GET['keyword'] : null);

        $query_1 = DB::table('blog_contents')->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title')->join('users', 'users.id', '=', 'blog_contents.id_user');

        if ($keyword != null) {
          $query_1->where('blog_contents.title', 'like', '%'.$keyword.'%');
        }

        $content_blog_1 = $query_1->take(3)->get();

        return view('v_blog', ['title' => $title, 'keyword' => $keyword, 'blog_1' => $content_blog_1]);
    }

    public function all_blog($id){
        $title = "Semua Data Blog";

        $category = DB::table('blog_categories')->get();

        $content = DB::table('blog_contents')
        ->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title', 'short_desc', 'long_desc', 'blog_contents.created_at', 'category_name')
        ->join('blog_categories', 'blog_categories.id', '=', 'blog_contents.id_category')
        ->join('users', 'users.id', '=', 'blog_contents.id_user')
        ->where('blog_categories.id', $id)
        ->get();

        $latest = DB::table('blog_contents')
        ->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title', 'blog_contents.created_at')
        ->join('users', 'users.id', '=', 'blog_contents.id_user')->latest()
        ->take(3)
        ->get();

        return view('v_all_blog', ['title' => $title, 'content' => $content, 'latest' => $latest, 'category' => $category]);
    }

    public function content_blog($id){

        $title = "Isi Konten";

        $category = DB::table('blog_categories')->get();

        $content = DB::table('blog_contents')
        ->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title', 'short_desc', 'long_desc')
        ->join('blog_categories', 'blog_categories.id', '=', 'blog_contents.id_category')
        ->join('users', 'users.id', '=', 'blog_contents.id_user')
        ->where('blog_contents.id', $id)
        ->first();

        $latest = DB::table('blog_contents')
        ->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title', 'blog_contents.created_at')
        ->join('users', 'users.id', '=', 'blog_contents.id_user')->latest()
        ->take(3)
        ->get();

        return view('v_content_blog', ['title' => $title, 'content' => $content, 'latest' => $latest, 'category' => $category]);
    }

    public function schedule(){
        $title = "Jadwal Sholat & Al-quran";

        //Jakarta bulan 1
        $response = Http::get('https://api.aladhan.com/v1/calendar/'.date('Y').'/'.date('n').'?latitude=-6.175110&longitude=106.865036&method=2');
        $prayerTimes = $response->json()['data'];

        return view('v_schedule', ['title' => $title], compact('prayerTimes'));
    }
}
