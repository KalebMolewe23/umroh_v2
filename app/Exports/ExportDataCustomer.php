<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class ExportDataCustomer implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $data = DB::table('commision_transactions')
        ->select('name_agen' , 'phone_agen', 'users.name', 'ktp', 'father_name', 'born_place', 'date_of_birth', 'marital_status', 'title', 'gender', 'citizenship', 'address', 'provinces.name as province_name', 'regencies.name as regencies_name', 'phone', 'email', 'education', 'job', 'blood_groub', 'status_umroh', 'passport_name', 'passport_number', 'passport_place', 'passport_date', 'expired', 'companion_name', 'connection', 'name_packet', 'room_type', 'departure_date', 'grand_total')
        ->join('transactions', 'transactions.id', '=', 'commision_transactions.id_transaction')
        ->join('users', 'users.id', '=', 'transactions.id_user')
        ->join('provinces', 'provinces.id', '=', 'users.id_province')
        ->join('regencies', 'regencies.id', '=', 'users.id_regencies')
        ->join('packets', 'packets.id', '=', 'transactions.id_packet')
        ->join('agens', 'agens.id', '=', 'commision_transactions.id_agens')
        ->orderBy('transactions.created_at', 'asc')
        ->get();
        return view('agen.money.data_export_commision', ['data' => $data]);
    }
}
