<?php

namespace App\Http\Controllers;

use App\Models\Payment_detail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rating;

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

        $id_transaction = Transaction::where('id_user', Auth::id())
                                  ->where('transaction_status', 'belum bayar')
                                  ->orderBy('id', 'DESC')
                                  ->first();

        $transaction = Transaction::where('id_user', Auth::id())
                                  ->where('transaction_status', 'belum bayar')
                                  ->orderBy('id', 'DESC')
                                  ->get();

        $transaction_pending = Transaction::where('id_user', Auth::id())
                                          ->where('transaction_status', 'pending')
                                          ->orderBy('id', 'DESC')
                                          ->get();

        $transaction_dp = Transaction::with('paymentDetail')
                                     ->where('id_user', Auth::id())
                                     ->where(function($query) {
                                        $query->where('transaction_status', 'menunggu pelunasan')
                                              ->orWhere('transaction_status', 'pending dp');
                                     })
                                     ->orderBy('id', 'DESC')
                                     ->get();

        $transaction_sudah_bayar = Transaction::where('id_user', Auth::id())
                                              ->where('transaction_status', 'success')
                                              ->orderBy('id', 'DESC')
                                              ->get();

        return view('user_profile', [
            'id' => $userId, 
            'profile' => $profile, 
            'title' => $title, 
            'id_transaction' => $id_transaction, 
            'transaction' => $transaction, 
            'transaction_pending' => $transaction_pending, 
            'transaction_sudah_bayar' => $transaction_sudah_bayar, 
            'transaction_dp' => $transaction_dp,

        ]);
    }

    public function executePayment(Request $request) {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $order = Transaction::find($request->id);

        if ($request->is_dp == 1) {
            $grand_total = $request->price_dp;
            $order->update(['dp' => 1]);
        }else{
            $grand_total = $request->grand_total;
            $order->update(['dp' => 0]);
        }

        // insert to payment 
        $payment = Payment_detail::create([
            'id_transaction' => $request->id,
            'payment_date' => now(),
            'payment_amount' => $grand_total,
            'status' => 'pending'
        ]);

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
                'gross_amount' => $grand_total,
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
                $payment = Payment_detail::find($request->order_id);
                $payment->update([
                    'status' => 'success'
                ]);

                // eksekusi, ini adalah dp yang lunas, atau masih pembayaran yang lain
                $order = Transaction::find($payment->id_transaction);

                if ($order->dp == 1) {
                    // dia pembayaran dp
                    $order->update([
                        'transaction_status' => 'pending dp'
                    ]);
                }else{
                    $order->update(['transaction_status' => 'pending']);
                }

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

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Selamat');
        session()->flash('swal_text', 'Profil, berhasil dirubah.');
        return redirect('/agen/profile/'.$id)->with('success', 'Data Berhasil Di Update');
    }

    public function getData($id){
        $transaction = Transaction::with('transactionDetail', 'dataPacket')->where('id', $id)->first();
        return response()->json(['code' => 200, 'data' => $transaction]);
    }

    public function payOff(Request $request){
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // insert to payment 
        $payment = Payment_detail::create([
            'id_transaction' => $request->id_transaction,
            'payment_date' => now(),
            'payment_amount' => $request->grand_total,
            'status' => 'pending'
        ]); 

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
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

    public function process_transaction_not_paid(Request $request, $id){
        $data = Transaction::find($id);

        // insert to payment 
        $payment = Payment_detail::create([
            'id_transaction' => $request->id,
            'payment_date' => now(),
            'payment_amount' => $data->grand_total,
            'status' => 'success'
        ]);

        if($request->hasFile('payment_image')){
            $request->file('payment_image')->move('assets/payment/', $request->file('payment_image')->getClientOriginalName());
            $payment->payment_image = $request->file('payment_image')->getClientOriginalName();
            $payment->save();
        }

        $data->transaction_status  = "pending";
        $data->save();

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Terima Kasih');
        session()->flash('swal_text', 'Silahkan tunggu untuk konfirmasi pembayaran');
        return redirect('/user_profile')->with('success', 'Data Background Berhasil Di Update');
    }

    public function process_transaction_not_paid_dp(Request $request, $id){
        $data = Transaction::find($id);
        $transaction = DB::table('packets')->where('id', $data->id_packet)->first();
        $grand_total = $transaction->dp;

        // insert to payment 
        $payment = Payment_detail::create([
            'id_transaction' => $request->id,
            'payment_date' => now(),
            'payment_amount' => $grand_total,
            'status' => 'success'
        ]);

        if($request->hasFile('payment_image')){
            $request->file('payment_image')->move('assets/payment/', $request->file('payment_image')->getClientOriginalName());
            $payment->payment_image = $request->file('payment_image')->getClientOriginalName();
            $payment->save();
        }

        $data->transaction_status   = "pending dp";
        $data->dp                   = 1;
        $data->save();

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Terima Kasih');
        session()->flash('swal_text', 'Segera, anda melunaskan untuk pembayaran DP');
        return redirect('/user_profile')->with('success', 'Data Background Berhasil Di Update');
    }

    public function data_transaction_paid_dp(Request $request){

        // dd($request->all());

        $data = Transaction::find($request->id_transaction);
        $transaction = DB::table('packets')->where('id', $data->id_packet)->first();
        $grand_total = $data->grand_total - $transaction->dp;
        
        $payment = Payment_detail::create([
            'id_transaction' => $request->id_transaction,
            'payment_date' => now(),
            'payment_amount' => $grand_total,
            'status' => 'success'
        ]);

        if($request->hasFile('payment_image')){
            $request->file('payment_image')->move('assets/payment/', $request->file('payment_image')->getClientOriginalName());
            $payment->payment_image = $request->file('payment_image')->getClientOriginalName();
            $payment->save();
        }

        $data->transaction_status   = "pending";
        $data->save();

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Terima Kasih');
        session()->flash('swal_text', 'Anda, berhasil membayar dp. Silahkan tunggu informasi selanjutnya');
        return response()->json(['payment' => $payment, 'data' => $data]);
    }

    public function proses_edit_user(Request $request, $id){
        $data = User::find($id);

        $data->name              = $request->input('name');
        $data->email             = $request->input('email');
        $data->phone             = $request->input('phone');
        $data->ktp               = $request->input('ktp');
        $data->father_name       = $request->input('father_name');
        $data->blood_groub       = $request->input('blood_groub');
        $data->date_of_birth     = $request->input('date_of_birth');
        $data->born_place        = $request->input('born_place');
        $data->marital_status    = $request->input('marital_status');
        $data->title             = $request->input('title');
        $data->gender            = $request->input('gender');
        $data->citizenship       = $request->input('citizenship');
        $data->address           = $request->input('address');
        $data->id_province       = $request->input('id_province');
        $data->id_regencies      = $request->input('id_regencies');
        $data->education         = $request->input('education');
        $data->job               = $request->input('job');
        $data->status_umroh      = $request->input('status_umroh');
        $data->passport_name     = $request->input('passport_name');
        $data->passport_number   = $request->input('passport_number');
        $data->passport_place    = $request->input('passport_place');
        $data->passport_date     = $request->input('passport_date');
        $data->expired           = $request->input('expired');
        $data->companion_name    = $request->input('companion_name');
        $data->connection        = $request->input('connection');
        $data->password          = Hash::make($request->input('password'));

        $data->save();

        return redirect('/user_profile')->with('success', 'Data Berhasil Ditambah');
    }

    public function batal_order(Request $request, $id){
        $data = Transaction::find($id);

        $data->transaction_status          = "BATAL ORDER";

        $data->save();

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Transaksi Berhasil Dirubah');
        session()->flash('swal_text', 'Anda, berhasil membatalkan transaksi ini');
        return redirect('/user_profile')->with('success', 'Pemesanan Berhasil Dibatalkan');
    }

    public function save_rating(Request $request){
        $data = Rating::create($request->all());
        $data->save();

        session()->flash('swal_icon', 'success');
        session()->flash('swal_title', 'Terima kasih');
        session()->flash('swal_text', 'Masukkan anda sudah kami simpan.');
        return redirect('/user_profile')->with('success', 'Data Berhasil Ditambah');
    }
}
