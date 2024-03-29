<?php

namespace App\Http\Controllers;

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

        $profile = DB::table('users')->where('id', Auth::id())->first();

        $transaction_pending = Transaction::where('id_user', Auth::id())->where('transaction_status', 'PENDING')->orderBy('id', 'DESC')->get();
        $transaction_sudah_bayar = Transaction::where('id_user', Auth::id())->where('transaction_status', 'SUDAH BAYAR')->orderBy('id', 'DESC')->get();
        $transaction = Transaction::where('id_user', Auth::id())->where('transaction_status', 'BELUM BAYAR')->orderBy('id', 'DESC')->get();
        $count = $transaction->count();

        if($count == 0){
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
    
            $params = array(
                'transaction_details' => array(
                    'order_id' => '1',
                    'gross_amount' => '1',
                ),
                'customer_details'  => array(
                    'first_name'          => '',
                    'last_name'           => '',
                ),
            );
    
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        }else{
            foreach($transaction as $v_trans){
                $transaction_code = $v_trans->transaction_code;
                $transaction_id = $v_trans->id;
                $grand_total = $v_trans->grand_total;
            }
    
            //start transaction with midtrans
            // $order = Transaction::create($request->all());
    
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
    
            $params = array(
                'transaction_details' => array(
                    'order_id' => $transaction_id,
                    'gross_amount' => $grand_total,
                ),
                'customer_details'  => array(
                    'first_name'          => '',
                    'last_name'           => '',
                ),
            );
    
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        }

        return view('user_profile', ['id' => $userId, 'profile' => $profile, 'title' => $title, 'transaction' => $transaction, 'transaction_pending' => $transaction_pending, 'transaction_sudah_bayar' => $transaction_sudah_bayar], compact('snapToken', 'transaction'));
    }

    public function proses_callback_packet(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
                $order = Transaction::find($request->order_id);
                $order->update(['transaction_status' => 'Pending']);
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
