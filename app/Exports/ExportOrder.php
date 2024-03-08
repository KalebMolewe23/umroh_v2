<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class ExportOrder implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        if (Auth::check()){
            $userId = Auth::id();
        }else{

        }

        $data = DB::table('transactions')
        ->select('transactions.id as id' , 'transaction_code', 'room_type', 'transactions.created_at', 'departing_from', 'transactions.dp as dp', 'grand_total', 'transaction_status')
        ->join('packets', 'packets.id', '=', 'transactions.id_packet')
        ->where('packets.id_user', $userId)
        ->orderBy('transactions.id', 'desc')
        ->distinct()
        ->get();

        return view('agen.order.data_export_order', ['data' => $data]);
    }
}
