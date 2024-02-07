<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Buy_packet;
use App\Models\Order_packet;
use App\Models\Ticket_group;
use App\Models\Packets;
use App\Mail\HelloMail;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index($id){

        $title = "Paket Umroh";

        $product = DB::table('photos')->select('photos.id', 'image', 'name_packet', 'price_ticket', 'packets.departure_date as departure_date', 'packets.arrival_date as arrival_date', 'star', 'maskapai_name', 'packets.departure_city', 'photos.id_packet as id_data_packet', 'ticket_groups.seat_capasitas as total_seat', 'quad', 'triple', 'double', 'id_ticket')
        ->join('packets', 'packets.id', '=', 'photos.id_packet')
        ->join('hotels', 'hotels.id', '=', 'photos.id_hotel')
        ->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')
        ->orderBy('packets.departure_date', 'asc')
        ->take(6)
        ->get();

        $data_packet = DB::table('itineries')->select('photos.id_packet as idpacket', 'itineries.id as id_data_itineries', 'packets.id as id_data_packet', 'itineries.id as id_itineries', 'packets.id_ticket', 'packets.id_ticket_1', 'packets.id_ticket_2', 'packets.id_ticket_3', 'packets.id_ticket_4', 'packets.id_ticket_5', 'packets.id_ticket_6', 'packets.id_ticket_7', 'packets.id_ticket_8', 'packets.id_ticket_9', 'name_packet', 'photos.image as image_packet', 'packets.departure_date', 'departure_date_arrival', 'packets.departure_city', 'packets.maskapai_name', 'star', 'informasi_travels.image as image_travel', 'employee_name', 'in_condition', 'in_condition_2', 'in_condition_3', 'in_condition_4', 'in_condition_5', 'in_condition_6', 'in_condition_7', 'in_condition_8', 'in_condition_9', 'in_condition_10', 'in_condition_11', 'in_condition_12', 'in_condition_13', 'in_condition_14', 'in_condition_15', 'in_condition_16', 'in_condition_17', 'in_condition_18', 'in_condition_19', 'in_facilitas', 'in_facilitas_1', 'in_facilitas_2', 'in_facilitas_3', 'in_facilitas_4', 'in_facilitas_5', 'in_facilitas_6', 'in_facilitas_7', 'in_facilitas_8', 'in_facilitas_9', 'out_facilitas', 'out_facilitas_1', 'out_facilitas_2', 'out_facilitas_3', 'out_facilitas_4', 'out_facilitas_5', 'out_facilitas_6', 'out_facilitas_7', 'out_facilitas_8', 'out_facilitas_9', 'quad', 'triple', 'double', 'price_baby', 'price_child', 'price_adult', 'dp', 'packets.seat_capasitas as total_seat', 'activity', 'activity_2', 'activity_3', 'activity_4', 'activity_5', 'activity_6', 'activity_7', 'activity_8', 'activity_9', 'activity_10', 'activity_11', 'activity_12', 'activity_13', 'activity_14', 'price_ticket as price_plane_total', 'packets.arrival_date as arrival_date', 'video')
        ->join('photos', 'photos.id', '=', 'itineries.id_photo')
        ->join('conditions', 'conditions.id', '=', 'photos.id_condition')
        ->join('facilitas', 'facilitas.id', '=', 'conditions.id_facilitas')
        ->join('users', 'users.id', '=', 'itineries.id_user')
        ->join('informasi_travels', 'informasi_travels.id_user', '=', 'users.id')
        ->join('packets', 'packets.id', '=', 'photos.id_packet')
        ->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')
        ->join('hotels', 'hotels.id', '=', 'photos.id_hotel')
        ->join('money_packets', 'money_packets.id', '=', 'photos.id_money')
        ->where('id_photo', $id)
        ->where('is_verifition', 1)
        ->get();

        foreach($data_packet as $v_packet){
            $date   = Ticket_group::find($v_packet->id_ticket);

            $tanggal_awal = Carbon::parse($date->departure_date);
            $tanggal_akhir = Carbon::parse($date->departure_date_arrival);
            
            $selisihHari = $tanggal_awal->diffInDays($tanggal_akhir);
        }

        return view('product', ['product' => $product, 'packet' => $data_packet, 'date' => $selisihHari, 'title' => $title]);
    }

    public function proses_save_buy_packet(Request $request){
        $data = Buy_packet::create($request->all());
        $data->save();

        return redirect('/form_order')->with('success', 'Data Berhasil Ditambah');
    }

    public function form_order(){

        $title = "Silahkan Selesaikan Transaksi";

        $data_packet = DB::table('buy_packets')
        ->select('buy_packets.id as id_order', 'buy_packets.id_user', 'name', 'name_packet', 'price_total', 'photos.id_packet', 'email', 'buy_packets.dp', 'photos.id_packet')
        ->join('users', 'users.id', '=', 'buy_packets.id_user')
        ->join('itineries', 'itineries.id', '=', 'buy_packets.id_itineries')
        ->join('photos', 'photos.id', '=', 'itineries.id_photo')
        ->join('packets', 'packets.id', '=', 'photos.id_packet')
        ->take(1)
        ->orderBy('buy_packets.id', 'desc')
        ->get();

        foreach ($data_packet as $v_packet){
            $date       = Packets::find($v_packet->id_packet);
            $date_2     = Packets::find($v_packet->id_packet);

            $tanggal_awal   = Carbon::parse($date->arrival_date);
            $pelunasan      = $tanggal_awal->subDays(3);

            $tanggal_awal_2     = Carbon::parse($date_2->arrival_date);
            $dp                 = $tanggal_awal_2->subDays(6);
        }

        return view('v_form_order', ['paket' => $data_packet, 'dp' => $dp, 'uang_pelunasan' => $pelunasan, 'title' => $title]);
    }

    public function proses_save_order_packet(Request $request){

        $title = 'Selesaikan Pelunasan';

        $data_packet = DB::table('buy_packets')
        ->select('buy_packets.id as id_order', 'buy_packets.id_user', 'name', 'name_packet', 'price_total', 'photos.id_packet')
        ->join('users', 'users.id', '=', 'buy_packets.id_user')
        ->join('itineries', 'itineries.id', '=', 'buy_packets.id_itineries')
        ->join('photos', 'photos.id', '=', 'itineries.id_photo')
        ->join('packets', 'packets.id', '=', 'photos.id_packet')
        ->take(1)
        ->orderBy('buy_packets.id', 'desc')
        ->get();

        foreach($data_packet as $v_packet){
            $data_order = DB::table('order_packets')
            ->where('id_order', $v_packet->id_order)
            ->take(1)
            ->orderBy('id', 'desc')
            ->get();

            $data_travel = DB::table('informasi_travels')->where('id_user', $v_packet->id_user)->get();

            $date       = Packets::find($v_packet->id_packet);
            $date_2     = Packets::find($v_packet->id_packet);

            $tanggal_awal   = Carbon::parse($date->arrival_date);
            $pelunasan      = $tanggal_awal->subDays(3);

            $tanggal_awal_2     = Carbon::parse($date_2->arrival_date);
            $dp                 = $tanggal_awal_2->subDays(6);
        }

        $order = Order_packet::create($request->all());
    
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_transaction,
            ),
            'customer_details'  => array(
                'first_name'          => $request->name_order,
                'last_name'           => '',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
    
        return view('checkout', ['paket' => $data_packet, 'order' => $data_order, 'dp' => $dp, 'uang_pelunasan' => $pelunasan, 'travel' => $data_travel, 'title' => $title], compact('snapToken', 'order'));
    }

    public function proses_callback_packet(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
                $order = Order_packet::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }

    public function sendMail(){
        Mail::to("contohumroh@gmail.com")->send(new HelloMail());
        return redirect('/')->with('success', 'Data Berhasil Ditambah'); 
    }
}
