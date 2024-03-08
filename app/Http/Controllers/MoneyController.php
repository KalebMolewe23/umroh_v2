<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Commision_transaction;
use App\Exports\ExportDataCustomer;
use Maatwebsite\Excel\Facades\Excel;
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
            $data = DB::table('payment_details')
            ->select('transactions.id', 'name', 'transaction_code', 'due_date', 'payment_image', 'room_type', 'departing_from', DB::raw('FORMAT(payment_amount, 2) as grand_total, DATE_FORMAT(payment_details.created_at, "%d-%m-%Y") as created_at, DATE_FORMAT(due_date, "%d-%m-%Y") as due_date'), 'transaction_status')
            ->join('transactions', 'transactions.id', '=', 'payment_details.id_transaction')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->join('users', 'users.id', '=', 'transactions.id_user')
            ->where('packets.id_user', $userId)
            ->where('payment_details.status', "success")
            ->orderBy('payment_details.created_at', 'asc')
            ->get();

            $data->map(function($item) {
                
                $item->payment_image = asset('assets/payment/' . $item->payment_image); // Sesuaikan dengan path Anda
        
                return $item;
            });

            return datatables()->of($data)
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
            ->select(DB::raw('DATE_FORMAT(commision_transactions.created_at, "%d-%m-%Y") as created_at'), 'commision_transactions.id', 'name_packet', 'name_agen', 'id_transaction', 'packets.id_user', 'id_agens')
            ->join('transactions', 'transactions.id', '=', 'commision_transactions.id_transaction')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->join('agens', 'agens.id', '=', 'commision_transactions.id_agens')
            ->where('packets.id_user', $userId)
            ->get())
            ->addColumn('action', 'agen.money.commision-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        $transaction = DB::table('transactions')
        ->select('transactions.id as id', 'name_packet', 'transactions.created_at', 'departing_from')
        ->join('packets', 'packets.id', '=', 'transactions.id_packet')
        ->where('packets.id_user', $userId)
        ->where('transaction_status', "success")
        ->whereYear('transactions.created_at', date('Y'))
        ->whereMonth('transactions.created_at', date('m'))
        ->orderBy('transactions.id', 'desc')
        ->get();

        $agen = DB::table('agens')->where('agens.id_user', $userId)->get();
        $komisi = DB::table('money')->where('id_user', $userId)->first();

        return view('agen.money.v_commision', ['id' => $userId, 'title' => $title, 'transaction' => $transaction, 'agen' => $agen, 'komisi' => $komisi]);
    }

    public function save_commision(Request $request){
        $data = Commision_transaction::create($request->all());

        return redirect('/agen/get_commision')->with('success', 'Data Hotel Berhasil Ditambah');
    }

    public function export_excel_commision(){
        return Excel::download(new ExportDataCustomer, "datacustomer.xlsx");
    }

    public function proses_update_commision(Request $request, $id){
        $data = Commision_transaction::find($id);

        $data->id_transaction       = $request->input('id_transaction');
        $data->id_agens             = $request->input('id_agens');
        $data->grand_commision      = $request->input('grand_commision');

        $data->save();

        return redirect('/agen/get_commision')->with('success', 'Data Berhasil Di Update');
    }
}
