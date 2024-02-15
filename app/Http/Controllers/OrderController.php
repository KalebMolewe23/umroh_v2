<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        ->select('*', 'itineries.id AS itineries_id')
        ->leftjoin('photos', 'photos.id', '=' , 'itineries.id_photo')
        ->leftjoin('packets', 'packets.id', '=' , 'photos.id_packet')
        ->leftjoin('hotels', 'hotels.id', '=' , 'photos.id_hotel')
        ->leftjoin('money_packets', 'money_packets.id', '=' , 'photos.id_money')
        ->where('photos.id_user', $userId)
        ->where('itineries.status', 1)
        ->get();

        return view('agen.order.v_order', ['id' => $userId, 'title' => $title, 'customer' => $customer , 'packet' => $packet]);
    }

    public function storeCustomer(Request $request) {
        if (!empty($request->id_user)) {
            $id_user = $request->id_user;
            $msg = "Data customer berhasil dipilih, silahkan untuk memilih paket";
        }else{
            Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required|email'
            ])->validate();

            $data = $request->all();
            $data['password'] = Hash::make('password');
    
            $user = User::create($data);

            $id_user = $user->id;
            $msg = "Data customer berhasil ditambahkan, silahkan untuk memilih paket";
        }

        return response()->json([
            'id_user' => $id_user,
            'msg' => $msg
        ]);
    }
}
