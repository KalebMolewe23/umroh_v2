<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bursa_ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_maskapai',
        'id_maskapai_homecoming',
        'maskapai_code',
        'seat_capasitas',
        'ticket_type',
        'price_ticket',
        'departure_flight_code',
        'id_departure_city',
        'departure_date',
        'departure_time',
        'id_departure_city_arrival',
        'departure_date_arrival',
        'departure_time_arrival',
        'id_departure_city_transit',
        'departure_date_transit',
        'departure_time_transit',
        'homecoming_flight_code',
        'id_homecoming_city',
        'homecoming_date',
        'homecoming_time',
        'id_homecoming_city_arrival',
        'homecoming_date_arrival',
        'homecoming_time_arrival',
        'id_homecoming_city_transit',
        'homecoming_date_transit',
        'homecoming_time_transit',
    ];
}
