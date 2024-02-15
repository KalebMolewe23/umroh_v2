<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        if (Auth::check()){
            $userId = Auth::id();
        }else{

        }

        $title = "Data Pesanan";

        $customer = DB::table('users')->get();
        $packet = DB::table('itineries')
        ->join('photos', 'photos.id', '=' , 'itineries.id_photo')
        ->join('packets', 'packets.id', '=' , 'photos.id_packet')
        ->join('hotels', 'hotels.id', '=' , 'photos.id_hotel')
        ->join('money_packets', 'money_packets.id', '=' , 'photos.id_money')
        ->where('photos.id_user', $userId)
        ->where('itineries.status', 1)
        ->get();

        return view('agen.order.v_order', ['id' => $userId, 'title' => $title, 'customer' => $customer , 'packet' => $packet]);
    }
}
