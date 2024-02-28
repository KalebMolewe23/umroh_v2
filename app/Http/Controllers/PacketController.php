<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Itinery;
use App\Models\List_hotel;
use App\Models\Packet_category;
use App\Mail\VerifPacket;
use Illuminate\Support\Facades\Mail;

class PacketController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Paket Umroh";

        if(request()->ajax()){
            return datatables()->of(DB::table('itineries')
            ->select(DB::raw('FORMAT(dp, 2) as dp, DATE_FORMAT(packets.departure_date, "%d-%m-%Y") as departure_date'),'packets.id', 'categorie_name', 'packets.id_user', 'maskapai_code', 'name_packet', 'maskapai_name', 'departure_city', 'packets.seat_capasitas', 'itineries.status', 'itineries.id as id_itineries')
            ->join('photos', 'photos.id', '=', 'itineries.id_photo')
            ->join('packets', 'packets.id', '=', 'photos.id_packet')
            ->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')
            ->join('packet_categories', 'packet_categories.id', '=', 'packets.id_category_packet')
            ->orderBy('itineries.id', 'asc')
            ->get())
            ->addColumn('action', 'admin.umroh.umroh-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.umroh.v_packet_umroh', ['id' => $userId, 'title' => $title]);
    }

    public function update_verify_umroh(Request $request, $id){
        $data = Itinery::find($id);

        $photo = DB::table('photos')->where('id', $data->id_photo)->first();
        $packets = DB::table('packets')->where('id', $photo->id_packet)->first();
        $email = DB::table('informasi_travels')->where('id_user', $packets->id_user)->first();

        $data->status = 1;
        $data->save();

        $pesan = "
        <center>
            <div class='card' style='width: 41rem;position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 1.25rem;'>
                <br>
                <div class='card-body'>
                    <h3 style='color:black'>Assalamualaikum,</h3>
                    <h4 style='color:black'>Selamat paket " .$packets->name_packet. " berhasil di konfirmasi.</h4>
                    <br><br>
                    <center><p style='color:red;text-decoration: none;'>Info lebih lanjut, silahkan klik di link ini<a style='color:red;text-decoration: none;' href='https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0'> https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0</a></p></center>
                </div>    
            </div>
        </center>
        ";
        $data_email = [
            'isi' => $pesan
        ];
        Mail::to("$email->email")->send(new VerifPacket($data_email));

        return redirect('/admin/data_packet_umroh')->with('success', 'Data Berhasil Di Verifikasi');
    }

    public function update_notverify_umroh(Request $request, $id){
        $data = Itinery::find($id);

        $data->status = 0;
        $data->save();

        return redirect('/admin/data_packet_umroh')->with('success', 'Data Berhasil Di Non-Verifikasi');
    }

    public function jeddah_hotel(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Hotel Jeddah";

        if(request()->ajax()){
            return datatables()->of(DB::table('list_hotels')
            ->select('id', 'name_hotel', 'address', 'star')
            ->where('id_area', 1)
            ->get())
            ->addColumn('action', 'admin.umroh.jeddah-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.umroh.v_hotel_jeddah', ['id' => $userId, 'title' => $title]);
    }

    public function proses_save_hotel_jeddah(Request $request){
        $data = List_hotel::create($request->all());

        if($request->hasFile('img_1')){
            $request->file('img_1')->move('assets/images/', $request->file('img_1')->getClientOriginalName());
            $data->img_1 = $request->file('img_1')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_2')){
            $request->file('img_2')->move('assets/images/', $request->file('img_2')->getClientOriginalName());
            $data->img_2 = $request->file('img_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_3')){
            $request->file('img_3')->move('assets/images/', $request->file('img_3')->getClientOriginalName());
            $data->img_3 = $request->file('img_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_4')){
            $request->file('img_4')->move('assets/images/', $request->file('img_4')->getClientOriginalName());
            $data->img_4 = $request->file('img_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/admin/jeddah_hotel/')->with('success', 'Data Hotel Berhasil Ditambah');
    }

    public function proses_update_hotel_jeddah(Request $request, $id){
        $data = List_hotel::find($id);

        $data->id_area       = $request->input('id_area');
        $data->name_hotel    = $request->input('name_hotel');
        $data->address       = $request->input('address');
        $data->star          = $request->input('star');
        if($request->hasFile('img_1')){
            $request->file('img_1')->move('assets/images/', $request->file('img_1')->getClientOriginalName());
            $data->img_1 = $request->file('img_1')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_2')){
            $request->file('img_2')->move('assets/images/', $request->file('img_2')->getClientOriginalName());
            $data->img_2 = $request->file('img_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_3')){
            $request->file('img_3')->move('assets/images/', $request->file('img_3')->getClientOriginalName());
            $data->img_3 = $request->file('img_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_4')){
            $request->file('img_4')->move('assets/images/', $request->file('img_4')->getClientOriginalName());
            $data->img_4 = $request->file('img_4')->getClientOriginalName();
            $data->save();
        }
        $data->save();

        return redirect('/admin/jeddah_hotel')->with('success', 'Data Hotel Berhasil Di Update');
    }

    public function delete_hotel_jeddah($id){
        List_hotel::where('id', $id)->delete();
        return redirect('/admin/jeddah_hotel')->with('success', 'Data Berhasil Dihapus');
    }

    public function madinah_hotel(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Hotel Madinah";

        if(request()->ajax()){
            return datatables()->of(DB::table('list_hotels')
            ->select('id', 'name_hotel', 'address', 'star')
            ->where('id_area', 2)
            ->get())
            ->addColumn('action', 'admin.umroh.madinah-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.umroh.v_hotel_madinah', ['id' => $userId, 'title' => $title]);
    }

    public function proses_save_hotel_madinah(Request $request){
        $data = List_hotel::create($request->all());

        if($request->hasFile('img_1')){
            $request->file('img_1')->move('assets/images/', $request->file('img_1')->getClientOriginalName());
            $data->img_1 = $request->file('img_1')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_2')){
            $request->file('img_2')->move('assets/images/', $request->file('img_2')->getClientOriginalName());
            $data->img_2 = $request->file('img_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_3')){
            $request->file('img_3')->move('assets/images/', $request->file('img_3')->getClientOriginalName());
            $data->img_3 = $request->file('img_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_4')){
            $request->file('img_4')->move('assets/images/', $request->file('img_4')->getClientOriginalName());
            $data->img_4 = $request->file('img_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/admin/madinah_hotel/')->with('success', 'Data Hotel Berhasil Ditambah');
    }

    public function proses_update_hotel_madinah(Request $request, $id){
        $data = List_hotel::find($id);

        $data->id_area       = $request->input('id_area');
        $data->name_hotel    = $request->input('name_hotel');
        $data->address       = $request->input('address');
        $data->star          = $request->input('star');
        if($request->hasFile('img_1')){
            $request->file('img_1')->move('assets/images/', $request->file('img_1')->getClientOriginalName());
            $data->img_1 = $request->file('img_1')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_2')){
            $request->file('img_2')->move('assets/images/', $request->file('img_2')->getClientOriginalName());
            $data->img_2 = $request->file('img_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_3')){
            $request->file('img_3')->move('assets/images/', $request->file('img_3')->getClientOriginalName());
            $data->img_3 = $request->file('img_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('img_4')){
            $request->file('img_4')->move('assets/images/', $request->file('img_4')->getClientOriginalName());
            $data->img_4 = $request->file('img_4')->getClientOriginalName();
            $data->save();
        }
        $data->save();

        return redirect('/admin/madinah_hotel')->with('success', 'Data Hotel Berhasil Di Update');
    }

    public function delete_hotel_madinah($id){
        List_hotel::where('id', $id)->delete();
        return redirect('/admin/madinah_hotel')->with('success', 'Data Berhasil Dihapus');
    }

    public function category_umroh(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Category";

        if(request()->ajax()){
            return datatables()->of(DB::table('packet_categories')
            ->select('id','categorie_name')
            ->get())
            ->addColumn('action', 'admin.umroh.category-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.umroh.v_category', ['id' => $userId, 'title' => $title]);
    }

    public function proses_save_category(Request $request){
        $data = Packet_category::create($request->all());

        return redirect('/admin/category_umroh/')->with('success', 'Data Category Berhasil Ditambah');
    }

    public function proses_update_category(Request $request, $id){
        $data = Packet_category::find($id);

        $data->categorie_name       = $request->input('categorie_name');
        $data->save();

        return redirect('/admin/category_umroh/')->with('success', 'Data Kategori Berhasil Di Update');
    }

    public function delete_category($id){
        Packet_category::where('id', $id)->delete();
        return redirect('/admin/category_umroh/')->with('success', 'Data Berhasil Dihapus');
    }
}
