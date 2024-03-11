<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cms;
use App\Models\Information;
use App\Models\Social_media;
use App\Models\Covered;

class CmsController extends Controller
{
    public function index($id){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Background Color";

        $bg = DB::table('cms')->where('id', $id)->first();
    
        return view('admin.cms.v_bg', ['id' => $userId, 'bg' => $bg, 'title' => $title]);
    }

    public function proses_update_bg(Request $request, $id){
        $data = Cms::find($id);

        if($request->hasFile('logo')){
            $request->file('logo')->move('assets/img/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('banner1')){
            $request->file('banner1')->move('assets/img/', $request->file('banner1')->getClientOriginalName());
            $data->banner1 = $request->file('banner1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('banner2')){
            $request->file('banner2')->move('assets/img/', $request->file('banner2')->getClientOriginalName());
            $data->banner2 = $request->file('banner2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('banner3')){
            $request->file('banner3')->move('assets/img/', $request->file('banner3')->getClientOriginalName());
            $data->banner3 = $request->file('banner3')->getClientOriginalName();
            $data->save();
        }

        $data->name_website     = $request->input('name_website');
        $data->bg1              = $request->input('bg1');
        $data->bg2              = $request->input('bg2');
        $data->save();

        return redirect('/admin/bg_color/'. $id)->with('success', 'Data Background Berhasil Di Update');
    }

    public function information($id){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Website";

        $information = DB::table('information')->where('id', $id)->first();
    
        return view('admin.cms.v_information', ['id' => $userId, 'information' => $information, 'title' => $title]);
    }

    public function proses_update_information(Request $request, $id){
        $data = Information::find($id);

        $data->whatsapp     = $request->input('whatsapp');
        $data->email        = $request->input('email');
        $data->about        = $request->input('about');
        $data->save();

        return redirect('/admin/information/'. $id)->with('success', 'Data Informasi Berhasil Di Update');
    }

    public function sosmed(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Social Media Website";

        $sosmed = DB::table('social_media')->get();
    
        return view('admin.cms.v_sosmed', ['id' => $userId, 'sosmed' => $sosmed, 'title' => $title]);
    }

    public function proses_update_sosmed(Request $request, $id){
        $data = Social_media::find($id);

        $data->link   = $request->input('link');
        $data->save();

        return redirect('/admin/sosmed/')->with('success', 'Data Informasi Berhasil Di Update');
    }

    public function status_active_sosmed(Request $request, $id){
        $data = Social_media::find($id);

        $data->status   = 0;
        $data->save();

        return redirect('/admin/sosmed/')->with('success', 'Status Dirubah Menjadi Tidak Aktif');
    }

    public function status_noactive_sosmed(Request $request, $id){
        $data = Social_media::find($id);

        $data->status   = 1;
        $data->save();

        return redirect('/admin/sosmed/')->with('success', 'Status Dirubah Menjadi Aktif');
    }

    public function covereds(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Peliputan";

        if(request()->ajax()){
            $data = DB::table('covereds')
            ->select('id', 'logo', 'name_covered')
            ->distinct()
            ->get();

            $data->map(function($item) {
                
                $item->logo = asset('assets/sponsor/' . $item->logo); // Sesuaikan dengan path Anda
        
                return $item;
            });

            return datatables()->of($data)
            ->addColumn('action', 'admin.cms.covereds-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.cms.v_covereds', ['id' => $userId, 'title' => $title]);
    }

    public function proses_save_covered(Request $request){

        $data = Covered::create($request->all());

        if($request->hasFile('logo')){
            $request->file('logo')->move('assets/sponsor/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }

        $data->save();

        return redirect('/admin/covereds/')->with('success', 'Data Berhasil Dibuat');
    }

    public function proses_update_covered(Request $request, $id){
        $data = Covered::find($id);

        if($request->hasFile('logo')){
            $request->file('logo')->move('assets/sponsor/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }

        $data->name_covered        = $request->input('name_covered');
        $data->save();

        return redirect('/admin/covereds/')->with('success', 'Data Berhasil Dibuat');
    }

    public function delete_covered($id){
        Covered::where('id', $id)->delete();

        return redirect('/admin/covereds/')->with('success', 'Data Berhasil Dihapus');
    }
}
