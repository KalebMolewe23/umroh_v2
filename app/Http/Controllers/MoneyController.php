<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Commision_transaction;
use Datatables;

class MoneyController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Penjualan Paket";

        if(request()->ajax()){
            return datatables()->of(DB::table('payment_details')
            ->select('transactions.id', 'name', 'transaction_code', 'due_date', 'payment_details.created_at', 'payment_image', 'room_type', 'departing_from', DB::raw('FORMAT(payment_amount, 2) as grand_total'), 'transaction_status')
            ->join('transactions', 'transactions.id', '=', 'payment_details.id_transaction')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->join('users', 'users.id', '=', 'transactions.id_user')
            ->where('packets.id_user', $userId)
            ->where('payment_details.status', "success")
            ->get())
            ->addColumn('action', 'agen.money.money-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.money.v_money', ['id' => $userId, 'title' => $title]);
    }

    public function proses_edit_money(Request $request, $id){
        $data = Transaction::find($id);

        $data->transaction_status = "success";
        $data->save();

        return redirect('/agen/get_sale')->with('success', 'Data Status Pembayaran Berhasil Di-update');
    }

    public function update_status_money_pending_dp(Request $request, $id){
        $data = Transaction::find($id);

        $data->transaction_status = "menunggu pelunasan";
        $data->dp = 0;
        $data->save();

        return redirect('/agen/get_sale')->with('success', 'Data Status Pembayaran Berhasil Di-update');
    }

    public function proses_edit_pending_money(Request $request, $id){
        $data = Transaction::find($id);

        $data->transaction_status = "Pending";
        $data->save();

        return redirect('/agen/get_sale')->with('success', 'Data Status Pembayaran Berhasil Di-update');
    }

    public function get_commision(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Komisi Agen";

        if(request()->ajax()){
            return datatables()->of(DB::table('commision_transactions')
            ->select('commision_transactions.id', 'commision_transactions.created_at', 'name_packet', 'name_agen')
            ->join('transactions', 'transactions.id', '=', 'commision_transactions.id_transaction')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->join('agens', 'agens.id', '=', 'commision_transactions.id_agens')
            ->where('packets.id_user', $userId)
            ->where('status', $userId)
            ->get())
            ->addColumn('action', 'agen.money.commision-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        $transaction = DB::table('transactions')->select('transactions.id as id', 'name_packet')->join('packets', 'packets.id', '=', 'transactions.id_packet')->where('packets.id_user', $userId)->where('transaction_status', "success")->get();
        $agen = DB::table('agens')->where('agens.id_user', $userId)->get();
        $komisi = DB::table('money')->where('id_user', $userId)->first();

        return view('agen.money.v_commision', ['id' => $userId, 'title' => $title, 'transaction' => $transaction, 'agen' => $agen, 'komisi' => $komisi]);
    }

    public function save_commision(Request $request){
        $data = Commision_transaction::create($request->all());

        return redirect('/agen/get_commision')->with('success', 'Data Hotel Berhasil Ditambah');
    }
}
