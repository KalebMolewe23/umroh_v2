<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Provider_ticket;
use App\Models\Bursa_ticket;

class TicketController extends Controller
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
            return datatables()->of(DB::table('provider_tickets')
            ->select('id','name_provider')
            ->get())
            ->addColumn('action', 'admin.ticket.provider-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.ticket.v_ticket', ['id' => $userId, 'title' => $title]);
    }

    public function proses_save_provider(Request $request){
        $data = Provider_ticket::create($request->all());

        return redirect('/admin/provider/')->with('success', 'Data Provider Berhasil Ditambah');
    }

    public function proses_update_provider(Request $request, $id){
        $data = Provider_ticket::find($id);

        $data->name_provider       = $request->input('name_provider');
        $data->save();

        return redirect('/admin/provider/')->with('success', 'Data Provider Berhasil Di Update');
    }

    public function delete_provider($id){
        Provider_ticket::where('id', $id)->delete();
        return redirect('/admin/provider/')->with('success', 'Data Berhasil Dihapus');
    }

    public function bursa_ticket(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Bursa Paket";

        if(request()->ajax()){
            return datatables()->of(DB::table('bursa_tickets')
            ->select(DB::raw('CASE WHEN ticket_type != 1 THEN "Rontokan" ELSE "Group" END as ticket_type, FORMAT(price_ticket, 2) as price_ticket, DATE_FORMAT(departure_date, "%d-%m-%Y") as departure_date'),'bursa_tickets.id as id', 'maskapai_code', 'name_maskapai', 'seat_capasitas', 'cityName')
            ->join('maskapais', 'maskapais.id', '=', 'bursa_tickets.id_maskapai')
            ->join('airports', 'airports.code', '=', 'bursa_tickets.id_departure_city')
            ->distinct()
            ->get())
            ->addColumn('action', 'admin.ticket.bursa-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.ticket.v_bursa_ticket', ['id' => $userId, 'title' => $title]);
    }

    public function add_bursa_ticket(){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Tambah Bursa Tiket";

        return view('admin.ticket.v_add_bursa_ticket', ['id' => $userId, 'title' => $title]);
    }

    public function save_bursaTicket(Request $request){
        $data = Bursa_ticket::create($request->all());
        $data->save();

        return redirect('admin/add_bursa_ticket')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_ticket_bursa($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Edit Tiket Bursa";

        $ticket_packet = DB::table('bursa_tickets')
        ->select('bursa_tickets.id as id', 'id_maskapai', 'id_maskapai_homecoming', 'id_homecoming_city', 'name_maskapai', 'maskapai_code', 'seat_capasitas', 'price_ticket', 'departure_flight_code', 'id_departure_city', 'departure_date', 'departure_time', 'id_departure_city_arrival', 'departure_date_transit', 'cityName', 'name', 'departure_date_arrival', 'departure_time_arrival', 'homecoming_flight_code', 'homecoming_date_arrival', 'departure_time_transit', 'homecoming_date', 'homecoming_time', 'id_homecoming_city_arrival', 'homecoming_Date_arrival', 'homecoming_time_arrival', 'id_homecoming_city_transit', 'homecoming_date_transit', 'homecoming_time_transit', 'ticket_type')
        ->join('maskapais', 'maskapais.id', '=', 'bursa_tickets.id_maskapai')
        ->join('airports', 'airports.code', '=', 'bursa_tickets.id_departure_city')
        ->where('bursa_tickets.id', $id)
        ->distinct()
        ->first();
        $provinsi    = DB::table('provinces')->get();
        $data_tiket  = DB::table('maskapais')->get();
        $airport    = DB::table('airports')->get();
        
        return view('admin.ticket.v_edit_ticket_bursa', ['id' => $userId, 'provinsi' => $provinsi, 'tiket' => $data_tiket, 'airport' => $airport, 'ticket_packet' => $ticket_packet, 'title' => $title]);       
    }

    public function proccess_update_ticket_bursa(Request $request, $id){
        $data = Bursa_ticket::find($id);

        $data->id_maskapai = $request->input('id_maskapai');
        $data->maskapai_code = $request->input('maskapai_code');
        $data->seat_capasitas = $request->input('seat_capasitas');
        $data->ticket_type = $request->input('ticket_type');
        $data->price_ticket = $request->input('price_ticket');
        $data->departure_flight_code = $request->input('departure_flight_code');
        $data->id_departure_city = $request->input('id_departure_city');
        $data->departure_date = $request->input('departure_date');
        $data->departure_time = $request->input('departure_time');
        $data->id_departure_city_arrival = $request->input('id_departure_city_arrival');
        $data->departure_date_transit = $request->input('departure_date_transit');
        $data->departure_time_transit = $request->input('departure_time_transit');
        $data->homecoming_flight_code = $request->input('homecoming_flight_code');
        $data->id_homecoming_city = $request->input('id_homecoming_city');
        $data->homecoming_date = $request->input('homecoming_date');
        $data->homecoming_time = $request->input('homecoming_time');
        $data->id_homecoming_city_arrival = $request->input('id_homecoming_city_arrival');
        $data->homecoming_date_arrival = $request->input('homecoming_date_arrival');
        $data->homecoming_time_arrival = $request->input('homecoming_time_arrival');
        $data->id_homecoming_city_transit = $request->input('id_homecoming_city_transit');
        $data->homecoming_date_transit = $request->input('homecoming_date_transit');
        $data->homecoming_time_transit = $request->input('homecoming_time_transit');
        $data->save();

        return redirect('/admin/bursa_ticket')->with('success', 'Data Berhasil Di Update');
    }

    public function delete_ticket_bursa($id){
        Bursa_ticket::where('id', $id)->delete();
        return redirect('/admin/bursa_ticket')->with('success', 'Data Berhasil Dihapus');
    }

    public function ticket_group(Request $request){
        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Data Tiket Group";
        $provinsi = DB::table('provinces')->get();
        $data_tiket = DB::table('ticket_groups')->where('id_user', $userId)->get();
        $data_maskapai = DB::table('maskapais')->get();

        if(request()->ajax()){
            return datatables()->of(DB::table('ticket_groups')
            ->select(DB::raw('FORMAT(price_ticket, 2) as price_ticket, DATE_FORMAT(departure_date, "%d-%m-%Y") as departure_date'),'ticket_groups.id', 'maskapai_code', 'name_maskapai', 'seat_capasitas', 'name_provider', 'cityName')
            ->join('maskapais', 'maskapais.id', '=', 'ticket_groups.id_maskapai')
            ->join('airports', 'airports.code', '=', 'ticket_groups.id_departure_city')
            ->join('provider_tickets', 'provider_tickets.id', '=', 'ticket_groups.id_provider')
            ->distinct()
            ->get())
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.ticket.v_ticket_group', ['id' => $userId, 'provinsi' => $provinsi, 'tiket' => $data_tiket, 'maskapai' => $data_maskapai, 'title' => $title]);
    }
}
