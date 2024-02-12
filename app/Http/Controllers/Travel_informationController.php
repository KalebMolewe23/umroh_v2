<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Informasi_travel;
use App\Models\Responsible;
use App\Models\Money;

class Travel_informationController extends Controller
{
    public function index($id){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Travel Saya";

        $information = DB::table('informasi_travels')
        ->where('id_user', $userId)
        ->first();

        $provinsi = DB::table('provinces')->get();

        return view('agen.cms.v_travel', ['id' => $userId, 'provinsi' => $provinsi, 'information' => $information, 'title' => $title]);
    }

    public function getRegencies(Request $request){

        $kota = DB::table('regencies')->where('province_id', $request->province_id)->get();

        if(count($kota) > 0){
            return response()->json($kota);
        }
    }

    public function proses_save_travel(Request $request, $id){
    
        $data = Informasi_travel::create($request->all());

        if($request->hasFile('image')){
            $request->file('image')->move('assets/image_travel/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect('/agen/person_responsible/'.$id)->with('success', 'Data Berhasil Ditambah');
    }

    public function proses_update_travel(Request $request, $id){
        $data = Informasi_travel::find($id);

        if($request->hasFile('image')){
            $request->file('image')->move('assets/image_travel/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        $data->id                   = $id;
        $data->id_province          = $request->input('id_province');
        $data->id_regencies         = $request->input('id_regencies');
        $data->id_user              = $request->input('id_user');
        $data->employee_type        = $request->input('employee_type');
        $data->travel_name          = $request->input('travel_name');
        $data->employee_name        = $request->input('employee_name');
        $data->number_umroh         = $request->input('number_umroh');
        $data->number_haji          = $request->input('number_haji');
        $data->address              = $request->input('address');
        $data->email                = $request->input('email');
        $data->save();

        return redirect('/agen/person_responsible/'. $data->id_user)->with('success', 'Data Berhasil Ditambah');

    }

    public function person_responsible($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Penanggung Jawab Travel";

        $responsibles = DB::table('responsibles')->where('id_user', $userId)->first();

        $provinsi = DB::table('provinces')->get();

        return view('agen.cms.v_responsible', ['id' => $userId, 'provinsi' => $provinsi, 'responsibles' => $responsibles, 'title' => $title]);
    }

    public function proses_save_resposibles(Request $request, $id){
    
        $data = Responsible::create($request->all());
        $data->save();

        return redirect('/agen/money/'.$id)->with('success', 'Data Berhasil Ditambah');
    }

    public function proses_update_responsibles(Request $request, $id){
        $data = Responsible::find($id);

        $data->id                   = $id;
        $data->id_user              = $request->input('id_user');
        $data->name_responsibles    = $request->input('name_responsibles');
        $data->role_responsibles    = $request->input('role_responsibles');
        $data->ktp                  = $request->input('ktp');
        $data->npwp                 = $request->input('npwp');
        $data->email                = $request->input('email');
        $data->phone                = $request->input('phone');
        $data->save();

        return redirect('/agen/money/'.$data->id_user)->with('success', 'Data Berhasil Ditambah');

    }

    public function money($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Penanggung Jawab Keuangan Travel";

        $money = DB::table('money')->where('id_user', $id)->first();

        $provinsi = DB::table('provinces')->get();

        return view('agen.cms.v_money', ['id' => $userId, 'provinsi' => $provinsi, 'money' => $money, 'title' => $title]);
    }

    public function proses_save_money(Request $request){
    
        $data = Money::create($request->all());
        $data->save();

        return redirect('/agen/verifikasi/')->with('success', 'Data Berhasil Ditambah');
    }

    public function proses_update_money(Request $request, $id){
        $data = Money::find($id);

        $data->id           = $id;
        $data->id_user      = $request->input('id_user');
        $data->bank_name    = $request->input('bank_name');
        $data->number_rek   = $request->input('number_rek');
        $data->owner_rek    = $request->input('owner_rek');
        $data->commision    = $request->input('commision');
        $data->save();

        return redirect('/agen/verifikasi')->with('success', 'Data Berhasil Ditambah');

    }

    public function proses_edit_money(Request $request, $id){
        $data = Money::find($id);

        $data->id           = $id;
        $data->id_user      = $request->input('id_user');
        $data->bank_name    = $request->input('bank_name');
        $data->number_rek   = $request->input('number_rek');
        $data->owner_rek    = $request->input('owner_rek');
        $data->commision    = $request->input('commision');
        $data->save();

        return redirect('/agen/money/'.$data->id_user)->with('success', 'Data Berhasil Ditambah');

    }

    public function verifikasi(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Verifikasi Akun";

       $provinsi = DB::table('provinces')->get();

        return view('agen.cms.v_verifikasi', ['id' => $userId, 'provinsi' => $provinsi, 'title' => $title]);
    }

}
