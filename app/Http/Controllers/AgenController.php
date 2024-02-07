<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AgenController extends Controller
{
    public function index(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "Dashboard";

        $total_komisi = DB::table('transactions')
        ->select(DB::raw('MONTH(transactions.created_at) as month, COUNT(*) as count'))
        ->join('packets', 'packets.id', '=', 'transactions.id_packet')
        ->whereYear('transactions.created_at', date('Y'))
        ->where('packets.id_user', $userId)
        ->groupBy('month')
        ->orderBy('month')
        ->get(); 

        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#88C34A', '#FF5722', '#009688', '#9C2780', '#2196F3', '#FF9800', '#CDDC39', '#607D88', '#232323'];

        for ($i=1; $i <= 12; $i++){
            $month = date('F',mktime(0,0,0,$i,1));
            $count = 0;

            foreach($total_komisi as $v_total_komisi){
                if($v_total_komisi->month == $i){
                    $count = $v_total_komisi->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' => 'Penjualan Tertinggi Agen',
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];

        return view('agen.dashboard.v_dashboard', ['id' => $userId, 'title' => $title], compact('datasets','labels'));
    }

    public function validasi(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        return view('agen.dashboard.v_dashboard_validasi', ['id' => $userId]);
    }
}
