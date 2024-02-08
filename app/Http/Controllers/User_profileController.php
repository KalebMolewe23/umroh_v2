<?php

namespace App\Http\Controllers;

use App\Models\Payment_detail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class User_profileController extends Controller
{
    public function index(Request $request){
        $title = "Tambah Tiket";

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $profile = DB::table('users')->where('id', $userId)->first();

        $transaction = Transaction::where('id_user', Auth::id())->where('transaction_status', 'BELUM BAYAR')->orderBy('id', 'DESC')->get();
        $transaction_pending = Transaction::where('id_user', Auth::id())->where('transaction_status', 'PENDING')->orderBy('id', 'DESC')->get();
        $transaction_dp = Transaction::where('id_user', Auth::id())->where('transaction_status', 'DP Lunas')->orderBy('id', 'DESC')->get();
        $transaction_sudah_bayar = Transaction::where('id_user', Auth::id())->where('transaction_status', 'SUDAH BAYAR')->orderBy('id', 'DESC')->get();

        return view('user_profile', ['id' => $userId, 'profile' => $profile, 'title' => $title, 'transaction' => $transaction, 'transaction_pending' => $transaction_pending, 'transaction_sudah_bayar' => $transaction_sudah_bayar, 'transaction_dp' => $transaction_dp]);
    }

    public function executePayment(Request $request) {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $order = Transaction::find($request->id);
        if ($request->is_dp == 1) {
            $order->update(['dp' => 1]);
        }else{
            $order->update(['dp' => 0]);
        }

        $params = array(
            'transaction_details' => array(
                'order_id' => $request->id,
                'gross_amount' => $request->grand_total,
            ),
            'customer_details'  => array(
                'first_name'          => '',
                'last_name'           => '',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return response()->json(['snap' => $snapToken]);
    }

    public function proses_callback_packet(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
                $order = Transaction::find($request->order_id);

                $status = "Pending";
                if ($order->dp > 0) {
                    $status = "DP lunas";
                }

                $order->update(['transaction_status' => $status, 'grand_total' => $request->gross_amount]);

                // insert to payment 
                Payment_detail::create([
                    'id_transaction' => $request->order_id,
                    'payment_date' => now(),
                    'payment_amount' => $request->gross_amount,
                ]);
            }
        }
    }

    public function profile_agen($id){
        $title = "Tambah Tiket";

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Akun";

        $profile = DB::table('users')
        ->where('id', $id)
        ->first();

        return view('agen.account.v_profile', ['id' => $userId, 'profile' => $profile, 'title' => $title]);       
    }

    public function proses_edit_profile(Request $request, $id){
        $data = User::find($id);

        $data->name     = $request->input('name');
        $data->email    = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->save();

        return redirect('/agen/profile/'.$id)->with('success', 'Data Berhasil Di Update');
    }

    public function getData($id){
        $transaction = Transaction::with('transactionDetail', 'dataPacket')->where('id', $id)->first();
        return response()->json(['code' => 200, 'data' => $transaction]);
    }
}
