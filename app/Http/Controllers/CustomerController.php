<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Informasi_travel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Mail\VerifTravel;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Data Travel";

        $waktusekarang = now();
        $month = $waktusekarang->format('n');
        $year = $waktusekarang->format('Y');

        $information = DB::table('informasi_travels')
        ->whereMonth('created_at',$month)
        ->whereYear('created_at',$year)
        ->get();

        return view('admin.customer.v_travel', ['id' => $userId, 'information' => $information, 'title' => $title]);
    }

    public function data_customer_travel(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title ="Data Informasi Travel";

        $waktusekarang = now();
        $month = $waktusekarang->format('n');
        $year = $waktusekarang->format('Y');
        if(request()->ajax()){
            return datatables()->of(DB::table('informasi_travels')
            ->select('informasi_travels.id','travel_name', 'name','employee_name','number_umroh','informasi_travels.address','informasi_travels.email as email',DB::raw('CASE WHEN is_verifition != 0 THEN "Sudah Diverifikasi" ELSE "Belum Diverifikasi" END as is_verifition'))
            ->join('users', 'users.id', '=', 'informasi_travels.id_user')
             ->whereYear('informasi_travels.created_at',$year)
            ->orderBy('informasi_travels.id', 'desc')
            ->distinct()
            ->get())
            ->addColumn('action', 'admin.customer.travel_information-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.paket.v_data_packet', ['id' => $userId, 'title' => $title]);

    }

    public function active_travel(Request $request, $id){
        $data = Informasi_travel::find($id);

        $data->is_verifition = 1;
        $data->save();

        $pesan = "<h4>Selamat akun anda berhasil didaftarkan</h4>";
        $pesan .= "<p>Silahkan gunakan semua fitur yang ada</p>";
        $data_email = [
            'isi' => $pesan
        ];
        Mail::to("$data->email")->send(new VerifTravel($data_email));

        return redirect('/admin/travel_information')->with('success', 'Status Berhasil Dirubah');
    }

    public function not_active_travel(Request $request, $id){
        $data = Informasi_travel::find($id);

        $data->is_verifition = 0;
        $data->save();

        return redirect('/admin/travel_information')->with('success', 'Status Berhasil Dirubah');
    }

    public function print_travel($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $waktusekarang = now();
        $month = $waktusekarang->format('n');
        $year = $waktusekarang->format('Y');
        $title = "Print Informasi Data Travel";

        $information = DB::table('informasi_travels')
        ->select('informasi_travels.id as id', 'travel_name', 'provinces.name as province_name', 'regencies.name as regencies_name', 'employee_name', 'image', 'number_umroh', 'address', 'email', 'is_verifition', 'id_user')
        ->join('provinces', 'provinces.id', '=', 'informasi_travels.id_province')
        ->join('regencies', 'regencies.id', '=', 'informasi_travels.id_regencies')
        ->where('informasi_travels.id', $id)
        ->whereMonth('created_at',$month)
        ->whereYear('created_at',$year)
        ->first();

        return view('admin.customer.print_informasi_travel', ['id' => $userId, 'information' => $information, 'title' => $title]);
    }

    public function print_all_travel(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $waktusekarang = now();
        $month = $waktusekarang->format('n');
        $year = $waktusekarang->format('Y');
        $title = "Print Informasi Data Travel";

        $information = DB::table('informasi_travels')
        ->select('informasi_travels.id','travel_name', 'informasi_travels.id_user', 'users.name as name', 'provinces.name as province_name', 'regencies.name as regencies_name', 'image','employee_name','number_umroh','address','informasi_travels.email as email',DB::raw('CASE WHEN is_verifition != 0 THEN "Sudah Diverifikasi" ELSE "Belum Diverifikasi" END as is_verifition'))
        ->join('users', 'users.id', '=', 'informasi_travels.id_user')
        ->join('provinces', 'provinces.id', '=', 'informasi_travels.id_province')
        ->join('regencies', 'regencies.id', '=', 'informasi_travels.id_regencies')
        ->whereMonth('informasi_travels.created_at',$month)
        ->whereYear('informasi_travels.created_at',$year)
        ->orderBy('informasi_travels.id', 'desc')
        ->distinct()
        ->get();

        return view('admin.customer.print_all_informasi_travel', ['id' => $userId, 'information' => $information, 'title' => $title]);
    }

    public function data_customer(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Customer";
        
        if(request()->ajax()){
            return datatables()->of(DB::table('users')
            ->select(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y %H:%i:%s") as created_at'),'id', 'name', 'email')
            ->where('idrole', 2)
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get())
            ->addColumn('action', 'admin.customer.v_transaction-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.customer.v_customer', ['id' => $userId, 'title' => $title]);
    }

    public function information_branch(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Cabang";
        
        if(request()->ajax()){
            return datatables()->of(DB::table('partner_branches')
            ->select(DB::raw('FORMAT(cost, 2) as cost, DATE_FORMAT(created_at, "%d-%m-%Y %H:%i:%s") as created_at'),'partner_branches.id as id', 'id_user', 'city')
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get())
            ->addColumn('action', 'admin.customer.v_branch-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.customer.v_branch', ['id' => $userId, 'title' => $title]);
    }

    public function information_worsiphers(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Jamaah";

        if(request()->ajax()){
            return datatables()->of(DB::table('transactions')
            ->select(DB::raw('FORMAT(grand_total, 2) as grand_total, DATE_FORMAT(transactions.created_at, "%d-%m-%Y %H:%i:%s") as created_at'), 'transactions.id as id', 'users.name as name', 'name_packet', 'transaction_code', 'transactions.departing_from', 'transaction_status')
            ->join('users', 'users.id', '=', 'transactions.id_user')
            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
            ->orderBy('transactions.created_at', 'desc')
            ->distinct()
            ->get())
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.customer.v_worshiphers', ['id' => $userId, 'title' => $title]);
    }

}
