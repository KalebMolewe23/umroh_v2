<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket_group;
use App\Models\Packets;
use App\Models\Hotel;
use App\Models\Money_packet;
use App\Models\Facilitas;
use App\Models\Condition;
use App\Models\Photo;
use App\Models\Itinery;
use Datatables;

class Add_paketController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Data Paket Umroh";

        // $tiket = DB::table('ticket_groups')->select('ticket_groups.id', 'provider_ticket', 'name_maskapai', 'departure_city', 'departure_date', 'departure_date_arrival', 'seat_capasitas')->join('maskapais', 'maskapais.id' ,'=', 'ticket_groups.id_maskapai')->where('id_user', $userId)->get();
        $tiket = DB::table('ticket_groups')
        ->select('ticket_groups.id', 'name_provider', 'name_maskapai', 'name', 'cityName', 'departure_date', 'departure_date_arrival', 'seat_capasitas', 'maskapai_code')
        ->join('provider_tickets', 'provider_tickets.id' ,'=', 'ticket_groups.id_provider')
        ->join('airports', 'airports.code' ,'=', 'ticket_groups.id_departure_city')
        ->join('maskapais', 'maskapais.id' ,'=', 'ticket_groups.id_maskapai')
        ->whereYear('ticket_groups.created_at', date('Y'))
        ->whereMonth('ticket_groups.created_at', date('m'))
        ->where('id_user', $userId)
        ->orderBy('ticket_groups.id', 'desc')
        ->distinct()
        ->get();

        $kategori = DB::table('packet_categories')->get();
        $maskapai = DB::table('maskapais')->get();

        return view('agen.paket.v_add_paket', ['id' => $userId, 'tiket' => $tiket, 'kategori' => $kategori, 'maskapai' => $maskapai, 'title' => $title]);
    }

    public function proses_save_packet(Request $request){
    
        $data = Packets::create($request->all());
        $data->save();

        return redirect('/agen/add_hotel')->with('success', 'Data Berhasil Ditambah');
    }

    public function add_hotel(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Data Hotel";

        $paket          = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet    = DB::table('packets')->where('id_user', $userId)->orderBy('id', 'desc')->first();
        $mekkah         = DB::table('list_hotels')->where('id_area', 1)->get();
        $madinah        = DB::table('list_hotels')->where('id_area', 2)->get();

        return view('agen.paket.v_add_hotel', ['id' => $userId, 'paket' => $paket, 'id_product' => $data_packet, 'mekkah' => $mekkah, 'madinah' => $madinah, 'title' => $title]);
    }

    public function proses_save_hotel(Request $request){
    
        $data = Hotel::create($request->all());

        //hotel 1
        if($request->hasFile('image_hotel1')){
            $request->file('image_hotel1')->move('assets/image_travel/', $request->file('image_hotel1')->getClientOriginalName());
            $data->image_hotel1 = $request->file('image_hotel1')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel1_2')){
            $request->file('image_hotel1_2')->move('assets/image_travel/', $request->file('image_hotel1_2')->getClientOriginalName());
            $data->image_hotel1_2 = $request->file('image_hotel1_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel1_3')){
            $request->file('image_hotel1_3')->move('assets/image_travel/', $request->file('image_hotel1_3')->getClientOriginalName());
            $data->image_hotel1_3 = $request->file('image_hotel1_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel1_4')){
            $request->file('image_hotel1_4')->move('assets/image_travel/', $request->file('image_hotel1_4')->getClientOriginalName());
            $data->image_hotel1_4 = $request->file('image_hotel1_4')->getClientOriginalName();
            $data->save();
        }

        //hotel 2
        if($request->hasFile('image_hotel2')){
            $request->file('image_hotel2')->move('assets/image_travel/', $request->file('image_hotel2')->getClientOriginalName());
            $data->image_hotel2 = $request->file('image_hotel2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel2_2')){
            $request->file('image_hotel2_2')->move('assets/image_travel/', $request->file('image_hotel2_2')->getClientOriginalName());
            $data->image_hotel2_2 = $request->file('image_hotel2_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel2_3')){
            $request->file('image_hotel2_3')->move('assets/image_travel/', $request->file('image_hotel2_3')->getClientOriginalName());
            $data->image_hotel2_3 = $request->file('image_hotel2_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel2_4')){
            $request->file('image_hotel2_4')->move('assets/image_travel/', $request->file('image_hotel2_4')->getClientOriginalName());
            $data->image_hotel2_4 = $request->file('image_hotel2_4')->getClientOriginalName();
            $data->save();
        }

        //hotel 3
        if($request->hasFile('image_hotel3')){
            $request->file('image_hotel3')->move('assets/image_travel/', $request->file('image_hotel3')->getClientOriginalName());
            $data->image_hotel3 = $request->file('image_hotel3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel3_2')){
            $request->file('image_hotel3_2')->move('assets/image_travel/', $request->file('image_hotel3_2')->getClientOriginalName());
            $data->image_hotel3_2 = $request->file('image_hotel3_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel3_3')){
            $request->file('image_hotel3_3')->move('assets/image_travel/', $request->file('image_hotel3_3')->getClientOriginalName());
            $data->image_hotel3_3 = $request->file('image_hotel3_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel3_4')){
            $request->file('image_hotel3_4')->move('assets/image_travel/', $request->file('image_hotel3_4')->getClientOriginalName());
            $data->image_hotel3_4 = $request->file('image_hotel3_4')->getClientOriginalName();
            $data->save();
        }

        //hotel 4
        if($request->hasFile('image_hotel4')){
            $request->file('image_hotel4')->move('assets/image_travel/', $request->file('image_hotel4')->getClientOriginalName());
            $data->image_hotel4 = $request->file('image_hotel4')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel4_2')){
            $request->file('image_hotel4_2')->move('assets/image_travel/', $request->file('image_hotel4_2')->getClientOriginalName());
            $data->image_hotel4_2 = $request->file('image_hotel4_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel4_3')){
            $request->file('image_hotel4_3')->move('assets/image_travel/', $request->file('image_hotel4_3')->getClientOriginalName());
            $data->image_hotel4_3 = $request->file('image_hotel4_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel4_4')){
            $request->file('image_hotel4_4')->move('assets/image_travel/', $request->file('image_hotel4_4')->getClientOriginalName());
            $data->image_hotel4_4 = $request->file('image_hotel4_4')->getClientOriginalName();
            $data->save();
        }

        //hotel 4
        if($request->hasFile('image_hotel5')){
            $request->file('image_hotel5')->move('assets/image_travel/', $request->file('image_hotel5')->getClientOriginalName());
            $data->image_hotel5 = $request->file('image_hotel5')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel5_2')){
            $request->file('image_hotel5_2')->move('assets/image_travel/', $request->file('image_hotel5_2')->getClientOriginalName());
            $data->image_hotel5_2 = $request->file('image_hotel5_2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel5_3')){
            $request->file('image_hotel5_3')->move('assets/image_travel/', $request->file('image_hotel5_3')->getClientOriginalName());
            $data->image_hotel5_3 = $request->file('image_hotel5_3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('image_hotel5_4')){
            $request->file('image_hotel5_4')->move('assets/image_travel/', $request->file('image_hotel5_4')->getClientOriginalName());
            $data->image_hotel5_4 = $request->file('image_hotel5_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/agen/add_money')->with('success', 'Data Berhasil Ditambah');
    }

    public function add_money(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Informasi Uang";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('hotels')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_add_money', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'title' => $title]);
    }

    public function proses_save_money_packet(Request $request){
    
        $data = Money_packet::create($request->all());
        $data->save();

        return redirect('/agen/add_facilitas')->with('success', 'Data Berhasil Ditambah');
    }

    public function add_facilitas(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Informasi Fasilitas";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('money_packets')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_add_facilitas', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'title' => $title]);
    }

    public function proses_save_facilitas(Request $request){
    
        $data = Facilitas::create($request->all());
        $data->save();

        return redirect('/agen/add_condition')->with('success', 'Data Berhasil Ditambah');
    }

    public function add_condition(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Informasi Syarat & Ketentuan";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('facilitas')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_add_condition', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'title' => $title]);
    }

    public function proses_save_condition(Request $request){
    
        $data = Condition::create($request->all());
        $data->save();

        return redirect('/agen/add_foto_video')->with('success', 'Data Berhasil Ditambah');
    }

    public function add_foto_video(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Informasi Foto Dan Video";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('conditions')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_add_foto', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'title' => $title]);
    }

    public function proses_save_foto(Request $request){
    
        $data = Photo::create($request->all());

        // $request->validate([
        //     'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|max:100000'           
        // ]);

        if($request->hasFile('image')){
            $request->file('image')->move('assets/image_travel/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('video')){
            $request->file('video')->move('assets/video_travel/', $request->file('video')->getClientOriginalName());
            $data->video = $request->file('video')->getClientOriginalName();
            $data->save();
        }

        // $file = $request->file('video');
        // $file->move('upload', $file->getClientOriginalName());
        // $file_name = $file->getClientOriginalName();

        // $insert = new video();
        // $insert->video = $file_name;
        // $insert->save();

        return redirect('/agen/add_itinerary')->with('success', 'Data Berhasil Ditambah');
    }

    public function data_packet(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Paket";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('photos')->select('packets.name_packet','maskapai_name','departure_city','departure_date','seat_capasitas','dp','status')->join('packets', 'packets.id', '=', 'photos.id_packet')->join('money_packets', 'money_packets.id', '=', 'photos.id_money')->join('hotels', 'hotels.id', '=', 'hotels.id')->where('photos.id_user', $userId)->orderBy('photos.id', 'desc')->first();

        if(request()->ajax()){
            return datatables()->of(DB::table('itineries')
            ->select(DB::raw('FORMAT(dp, 2) as dp, FORMAT(price_ticket, 2) as price_ticket , DATE_FORMAT(packets.departure_date, "%d-%m-%Y") as departure_date'),'itineries.id', 'packets.id as data_id','packets.name_packet','maskapai_name','departure_city','packets.seat_capasitas')
            ->join('photos', 'photos.id', '=', 'itineries.id_photo')
            ->join('packets', 'packets.id', '=', 'photos.id_packet')
            ->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')
            ->join('money_packets', 'money_packets.id', '=', 'photos.id_money')
            ->join('hotels', 'hotels.id', '=', 'hotels.id')
            ->whereYear('itineries.created_at', date('Y'))
            ->where('itineries.id_user', $userId)
            ->where('itineries.status', 1)
            ->orderBy('itineries.id', 'desc')
            ->distinct()
            ->get())
            ->addColumn('action', 'agen.paket.paket-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.paket.v_data_packet', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'title' => $title]);
    }

    public function edit_paket($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Informasi Paket";

        $tiket = DB::table('ticket_groups')
        ->select('ticket_groups.id', 'name_provider', 'name_maskapai', 'name', 'cityName', 'departure_date', 'departure_date_arrival', 'seat_capasitas', 'maskapai_code')
        ->join('provider_tickets', 'provider_tickets.id' ,'=', 'ticket_groups.id_provider')
        ->join('airports', 'airports.code' ,'=', 'ticket_groups.id_departure_city')
        ->join('maskapais', 'maskapais.id' ,'=', 'ticket_groups.id_maskapai')
        ->where('id_user', $userId)
        ->distinct()
        ->get();

        $packet = DB::table('packets')
        ->select('packets.id', 'packets.id_user', 'maskapai_code', 'maskapai_name', 'id_ticket', 'name_packet', 'cityName', 'name', 'departure_city', 'packets.departure_date', 'id_category_packet', 'packets.seat_capasitas', 'dp')
        ->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')
        ->join('provider_tickets', 'provider_tickets.id' ,'=', 'ticket_groups.id_provider')
        ->join('airports', 'airports.code' ,'=', 'ticket_groups.id_departure_city')
        ->join('maskapais', 'maskapais.id' ,'=', 'ticket_groups.id_maskapai')
        ->where('packets.id', $id)
        ->first();

        $kategori = DB::table('packet_categories')->get();
        $maskapai = DB::table('maskapais')->get();

        return view('agen.paket.v_edit_paket', ['id' => $userId, 'tiket' => $tiket, 'kategori' => $kategori, 'maskapai' => $maskapai, 'packet' => $packet, 'title' => $title]);
    }

    public function proccess_update_packet(Request $request, $id){
        $data = Packets::find($id);

        $data->id_user = $request->input('id_user');
        $data->id_ticket = $request->input('id_ticket');
        $data->name_packet = $request->input('name_packet');
        $data->maskapai_name = $request->input('maskapai_name');
        $data->departure_city = $request->input('departure_city');
        $data->departure_date = $request->input('departure_date');
        $data->id_category_packet = $request->input('id_category_packet');
        $data->seat_capasitas = $request->input('seat_capasitas');
        $data->dp = $request->input('dp');
        $data->save();

        return redirect('/agen/edit_paket/'.$id)->with('success', 'Data Berhasil Ditambah');       
    }

    public function edit_hotel($id){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Data Hotel";

        $hotel = DB::table('hotels')
        ->select('hotels.id as id_hotel', 'hotels.id_user', 'hotels.id_packet', 'hotels.id_hotel_mekah', 'hotels.id_hotel_madinah', 'type_hotel_1', 'quad_1', 'triple_1', 'double_1', 'type_hotel_2', 'quad_2', 'triple_2', 'double_2', 'type_hotel_3', 'quad_3', 'triple_3', 'double_3')
        ->join('packets', 'packets.id', '=', 'hotels.id_packet')
        ->join('list_hotels', 'list_hotels.id', '=', 'hotels.id_hotel_mekah')
        ->where('hotels.id_packet', $id)
        ->first();

        $paket          = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet    = DB::table('packets')->where('id_user', $userId)->orderBy('id', 'desc')->first();
        $mekkah         = DB::table('list_hotels')->where('id_area', 1)->get();
        $madinah        = DB::table('list_hotels')->where('id_area', 2)->get();

        return view('agen.paket.v_edit_hotel', ['id' => $userId,'hotel' => $hotel, 'paket' => $paket, 'id_product' => $data_packet, 'mekkah' => $mekkah, 'madinah' => $madinah, 'title' => $title]);
    }

    public function proccess_update_hotel(Request $request, $id){
        $data = Hotel::find($id);

        $data->id_user          = $request->input('id_user');
        $data->id_packet        = $request->input('id_packet');
        $data->id_hotel_mekah   = $request->input('id_hotel_mekah');
        $data->id_hotel_madinah = $request->input('id_hotel_madinah');
        $data->type_hotel_1     = $request->input('type_hotel_1');
        $data->quad_1           = $request->input('quad_1');
        $data->triple_1         = $request->input('triple_1');
        $data->double_1         = $request->input('double_1');
        $data->type_hotel_2     = $request->input('type_hotel_2');
        $data->quad_2           = $request->input('quad_2');
        $data->triple_2         = $request->input('triple_2');
        $data->double_2         = $request->input('double_2');
        $data->type_hotel_3     = $request->input('type_hotel_3');
        $data->quad_3           = $request->input('quad_3');
        $data->triple_3         = $request->input('triple_3');
        $data->double_3         = $request->input('double_3');
        $data->save();

        return redirect('/agen/edit_hotel/'.$data->id_packet)->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_money($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Data Informasi Ke-uangan";

        $money = DB::table('money_packets')
        ->where('id_packet', $id)
        ->first();

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('hotels')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_edit_money', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'money' => $money, 'title' => $title]);
    }

    public function proccess_update_money(Request $request, $id){
        $data = Money_packet::find($id);

        $data->id_user      = $request->input('id_user');    
        $data->id_packet    = $request->input('id_packet');    
        $data->id_hotel     = $request->input('id_hotel');    
        $data->price_baby  = $request->input('price_baby');    
        $data->price_child  = $request->input('price_child');    
        $data->price_adult  = $request->input('price_adult');
        $data->save();    

        return redirect('/agen/edit_money/'.$data->id_packet)->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_fasilitas($id){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Informasi Fasilitas";

        $facilitas = DB::table('facilitas')
        ->where('id_packet', $id)
        ->first();

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('money_packets')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_edit_facilitas', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'facilitas' => $facilitas, 'title' => $title]);

    }

    public function proccess_update_facilitas(Request $request, $id){
        $data = Facilitas::find($id);
        
        $data->id_user          = $request->input('id_user');
        $data->id_money         = $request->input('id_money');
        $data->id_packet        = $request->input('id_packet');
        $data->id_hotel         = $request->input('id_hotel');
        $data->in_facilitas     = $request->input('in_facilitas');
        $data->in_facilitas_1   = $request->input('in_facilitas_1');
        $data->in_facilitas_2   = $request->input('in_facilitas_2');
        $data->in_facilitas_3   = $request->input('in_facilitas_3');
        $data->in_facilitas_4   = $request->input('in_facilitas_4');
        $data->in_facilitas_5   = $request->input('in_facilitas_5');
        $data->in_facilitas_6   = $request->input('in_facilitas_6');
        $data->in_facilitas_7   = $request->input('in_facilitas_7');
        $data->in_facilitas_8   = $request->input('in_facilitas_8');
        $data->in_facilitas_9   = $request->input('in_facilitas_9');
        $data->out_facilitas    = $request->input('out_facilitas');
        $data->out_facilitas_1  = $request->input('out_facilitas_1');
        $data->out_facilitas_2  = $request->input('out_facilitas_2');
        $data->out_facilitas_3  = $request->input('out_facilitas_3');
        $data->out_facilitas_4  = $request->input('out_facilitas_4');
        $data->out_facilitas_5  = $request->input('out_facilitas_5');
        $data->out_facilitas_6  = $request->input('out_facilitas_6');
        $data->out_facilitas_7  = $request->input('out_facilitas_7');
        $data->out_facilitas_8  = $request->input('out_facilitas_8');
        $data->out_facilitas_9  = $request->input('out_facilitas_9');
        $data->save();

        return redirect('/agen/edit_fasilitas/'.$data->id_packet)->with('success', 'Data Berhasil Ditambah');

    }

    public function edit_condition($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $condition = DB::table('conditions')
        ->where('id_packet', $id)
        ->first();

        $title = "Edit Data Syarat & Ketentuan";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('facilitas')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_edit_condition', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'condition' => $condition, 'title' => $title]);
    }

    public function proses_edit_condition(Request $request, $id){
        $data = Condition::find($id);

        $data->id_user          = $request->input('id_user');
        $data->id_facilitas     = $request->input('id_facilitas');
        $data->id_money         = $request->input('id_money');
        $data->id_packet        = $request->input('id_packet');
        $data->id_hotel         = $request->input('id_hotel');
        $data->in_condition     = $request->input('in_condition');
        $data->in_condition_1   = $request->input('in_condition_1');
        $data->in_condition_2   = $request->input('in_condition_2');
        $data->in_condition_3   = $request->input('in_condition_3');
        $data->in_condition_4   = $request->input('in_condition_4');
        $data->in_condition_5   = $request->input('in_condition_5');
        $data->in_condition_6   = $request->input('in_condition_6');
        $data->in_condition_7   = $request->input('in_condition_7');
        $data->in_condition_8   = $request->input('in_condition_8');
        $data->in_condition_9   = $request->input('in_condition_9');
        $data->in_condition_10  = $request->input('in_condition_10');
        $data->in_condition_11  = $request->input('in_condition_11');
        $data->in_condition_12  = $request->input('in_condition_12');
        $data->in_condition_13  = $request->input('in_condition_13');
        $data->in_condition_14  = $request->input('in_condition_14');
        $data->in_condition_15  = $request->input('in_condition_15');
        $data->in_condition_16  = $request->input('in_condition_16');
        $data->in_condition_17  = $request->input('in_condition_17');
        $data->in_condition_18  = $request->input('in_condition_18');
        $data->in_condition_19  = $request->input('in_condition_19');
        $data->save();

        return redirect('/agen/edit_condition/'.$data->id_packet)->with('success', 'Data Berhasil Ditambah');       
    }

    public function edit_photo($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Foto & Video";

        $photo = DB::table('photos')
        ->where('id_packet', $id)
        ->first();

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('conditions')->where('id_user', $userId)->orderBy('id', 'desc')->first();

        return view('agen.paket.v_edit_foto', ['id' => $userId, 'paket' => $paket, 'id_product' =>$data_packet, 'photo' => $photo, 'title' => $title]);
    }

    public function proses_edit_foto(Request $request, $id){
        $data = Photo::find($id);

        $data->id_user          = $request->input('id_user');
        $data->id_condition     = $request->input('id_condition');
        $data->id_money         = $request->input('id_money');
        $data->id_packet        = $request->input('id_packet');
        $data->id_hotel         = $request->input('id_hotel');

        if($request->hasFile('image')){
            $request->file('image')->move('assets/image_travel/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('video')){
            $request->file('video')->move('assets/video_travel/', $request->file('video')->getClientOriginalName());
            $data->video = $request->file('video')->getClientOriginalName();
            $data->save();
        }
        
        $data->save();

        return redirect('/agen/edit_photo/'.$data->id_packet)->with('success', 'Data Berhasil Ditambah');       
    }

    public function add_itinerary(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Jadwal Kegiatan";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('photos')->select('photos.id', 'name_packet')->join('packets', 'packets.id', '=', 'photos.id_packet')->where('photos.id_user', $userId)->orderBy('photos.id', 'desc')->get();

        return view('agen.paket.v_add_itinerary', ['id' => $userId, 'paket' => $paket, 'data_paket' =>$data_packet, 'title' => $title]);
    }

    public function proses_save_itinerary(Request $request){
    
        $data = Itinery::create($request->all());
        $data->save();

        return redirect('/agen/get_itinerary')->with('success', 'Data Berhasil Ditambah');
    }

    public function get_itinerary(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Informasi Kegiatan";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('photos')->join('packets', 'packets.id', '=', 'photos.id_packet')->where('photos.id_user', $userId)->orderBy('photos.id', 'desc')->get();

        if(request()->ajax()){
            return datatables()->of(DB::table('itineries')
            ->select('itineries.id','packets.name_packet')
            ->join('photos', 'photos.id', '=', 'itineries.id_photo')
            ->join('packets', 'packets.id', '=', 'photos.id_packet')
            ->where('itineries.id_user', $userId)
            ->orderBy('itineries.id', 'desc')
            ->get())
            ->addColumn('action', 'agen.paket.itinery-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('agen.paket.v_itinerary', ['id' => $userId, 'paket' => $paket, 'data_paket' =>$data_packet, 'title' => $title]);
    }

    public function edit_itinery($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Data Kegiatan";

        $paket = DB::table('packets')->where('id_user', $userId)->get();
        $data_packet = DB::table('photos')->join('packets', 'packets.id', '=', 'photos.id_packet')->where('photos.id_user', $userId)->orderBy('photos.id', 'desc')->get();

        $itinerary = DB::table('itineries')
        ->select('itineries.id as id', 'itineries.id_user', 'id_photo', 'name_packet', 'activity', 'activity_2', 'activity_3', 'activity_4', 'activity_5', 'activity_6', 'activity_7', 'activity_8', 'activity_9', 'activity_10', 'activity_11', 'activity_12', 'activity_13', 'activity_14')
        ->join('photos', 'photos.id', '=', 'itineries.id_photo')
        ->join('packets', 'packets.id', '=', 'photos.id_packet')
        ->where('itineries.id', $id)   
        ->first();

        return view('agen.paket.v_edit_itinerary', ["id" => $userId, "itinerary" => $itinerary, 'paket' => $paket, 'data_paket' =>$data_packet, 'title' => $title]);

    }

    public function procces_update_itinerary(Request $request, $id){
        $data = Itinery::find($id);

        $data->id_user = $request->input('id_user');
        $data->id_photo = $request->input('id_photo');
        $data->activity = $request->input('activity');
        $data->activity_2 = $request->input('activity_2');
        $data->activity_3 = $request->input('activity_3');
        $data->activity_4 = $request->input('activity_4');
        $data->activity_5 = $request->input('activity_5');
        $data->activity_6 = $request->input('activity_6');
        $data->activity_7 = $request->input('activity_7');
        $data->activity_8 = $request->input('activity_8');
        $data->activity_9 = $request->input('activity_9');
        $data->activity_10 = $request->input('activity_10');
        $data->activity_11 = $request->input('activity_11');
        $data->activity_12 = $request->input('activity_12');
        $data->activity_13 = $request->input('activity_13');
        $data->activity_14 = $request->input('activity_14');
        $data->save();

        return redirect('/agen/get_itinerary')->with('success', 'Data Berhasil Ditambah');       
    }

    public function delete_itinery($id){
        Itinery::where('id', $id)->delete();
        return redirect('/agen/get_itinerary')->with('success', 'Data Berhasil Dihapus');
    }

}