<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Exports\ExportOrder;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index(){
        if (Auth::check()){
            $userId = Auth::id();
        }else{

        }

        $title = "Data Pesanan";

        $customer = DB::table('users')->get();
        $packet = DB::table('itineries')
        ->select('*', 'itineries.id AS itineries_id')
        ->leftjoin('photos', 'photos.id', '=' , 'itineries.id_photo')
        ->leftjoin('packets', 'packets.id', '=' , 'photos.id_packet')
        ->leftjoin('hotels', 'hotels.id', '=' , 'photos.id_hotel')
        ->leftjoin('money_packets', 'money_packets.id', '=' , 'photos.id_money')
        ->where('photos.id_user', $userId)
        ->where('itineries.status', 1)
        ->get();

        return view('agen.order.v_order', ['id' => $userId, 'title' => $title, 'customer' => $customer , 'packet' => $packet]);
    }

    public function storeCustomer(Request $request) {
        if (!empty($request->id_user)) {
            $id_user = $request->id_user;
            $msg = "Data customer berhasil dipilih, silahkan untuk memilih paket";
        }else{
            Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required|email'
            ])->validate();

            $data = $request->all();
            $data['password'] = Hash::make('password');
    
            $user = User::create($data);

            $id_user = $user->id;
            $msg = "Data customer berhasil ditambahkan, silahkan untuk memilih paket";
        }

        return response()->json([
            'id_user' => $id_user,
            'msg' => $msg
        ]);
    }

    public function get_order(){
        if (Auth::check()){
            $userId = Auth::id();
        }else{

        }

        $title = "Data Pesanan";

        if(request()->ajax()){
            return datatables()->of(DB::table('transactions')
            ->select(DB::raw('FORMAT(grand_total, 2) as grand_total, FORMAT(transactions.dp, 2) as dp, DATE_FORMAT(transactions.created_at, "%d-%m-%Y") as created_at'), 'transactions.id as id' , 'transaction_code', 'room_type', 'departing_from', 'transaction_status')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->where('packets.id_user', $userId)
            ->orderBy('transactions.id', 'desc')
            ->distinct()
            ->get())
            ->addColumn('action', 'agen.order.order-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.order.v_get_order', ['id' => $userId, 'title' => $title]);
    }

    public function export_excel_transaction(){
        return Excel::download(new ExportOrder, "data_transaction.xlsx");
    }
}
