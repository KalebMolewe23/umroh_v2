<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Agen;
use App\Models\Partner_branch;

class Data_agenController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Agen";

        if(request()->ajax()){
            return datatables()->of(DB::table('agens')
            ->select('agens.id as agen_id', 'name_agen', 'phone_agen', 'email_agen', 'bank', 'number_rek', 'city', 'status')
            ->where('id_user', $userId)
            ->get())
            ->addColumn('action', 'agen.data_agen.agen-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('agen.data_agen.v_agen', ['id' => $userId, 'title' => $title]);
    }

    public function add_agen(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Data Agen";

        $city = DB::table('airports')->where('countryName', "INDONESIA")->distinct()->get();

        return view('agen.data_agen.v_add_agen', ['id' => $userId, 'city' => $city, 'title' => $title]);
    }

    public function saveAgen(Request $request){
        $data = Agen::create($request->all());
        $data->save();

        return redirect('/agen/get_agen')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_agen($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title ="Edit Data Agen";

        $city = DB::table('airports')->where('countryName', "INDONESIA")->distinct()->get();

        $provinsi = DB::table('provinces')->get();

        $agen = DB::table('agens')
        ->where('agens.id', $id)
        ->first();

        return view('agen.data_agen.v_edit_agen', ['id' => $userId, 'city' => $city, 'provinsi' => $provinsi, 'title' => $title, 'agen' => $agen]);
    }

    public function proses_edit_agen(Request $request, $id){
        $data = Agen::find($id);

        $data->id_user          = $request->input('id_user');
        $data->name_agen        = $request->input('name_agen');
        $data->phone_agen       = $request->input('phone_agen');
        $data->email_agen       = $request->input('email_agen');
        $data->city             = $request->input('city');
        $data->bank             = $request->input('bank');
        $data->number_rek       = $request->input('number_rek');
        $data->status           = $request->input('status');

        $data->save();

        return redirect('/agen/get_agen')->with('success', 'Data Berhasil Di Update');
    }

    public function delete_agen($id){
        Agen::where('id', $id)->delete();
        return redirect('/agen/get_agen')->with('success', 'Data Berhasil Dihapus');
    }

    public function add_partner_branch(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Data Cabang";

        $city = DB::table('agens')->where('id_user', $userId)->get();

        return view('agen.data_agen.v_add_partner_branch', ['id' => $userId, 'city' => $city, 'title' => $title]);
    }

    public function savePartner_branch(Request $request){
        $data = Partner_branch::create($request->all());
        $data->save();

        return redirect('/agen/get_partner_branch')->with('success', 'Data Berhasil Ditambah');
    }

    public function get_partner_branch(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Cabang";

        if(request()->ajax()){
            return datatables()->of(DB::table('partner_branches')->select('partner_branches.id','city',DB::raw('FORMAT(cost, 2) as cost'))
            ->where('id_user', $userId)->get())
            ->addColumn('action', 'agen.data_agen.partner-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.data_agen.v_partner_branch', ['id' => $userId, 'title' => $title]);        
    }

    public function edit_partner($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title ="Edit Data Cabang";

        $cabang = DB::table('partner_branches')
        ->where('partner_branches.id', $id)
        ->first();

        $city = DB::table('agens')->where('id_user', $userId)->get();

        return view('agen.data_agen.v_edit_partner_branch', ['id' => $userId, 'city' => $city, 'cabang' => $cabang, 'title' => $title]);
    }

    public function proses_edit_partner(Request $request, $id){
        $data = Partner_branch::find($id);

        $data->id_user      = $request->input('id_user');
        $data->city = $request->input('city');
        $data->cost    = $request->input('cost');

        $data->save();

        return redirect('/agen/get_partner_branch')->with('success', 'Data Berhasil Ditambah');
    }

    public function delete_partner($id){
        Partner_branch::where('id', $id)->delete();
        return redirect('/agen/get_partner_branch')->with('success', 'Data Berhasil Dihapus');
    }

}
