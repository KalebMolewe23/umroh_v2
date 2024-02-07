<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_packet',
        'id_hotel_mekah',
        'id_hotel_madinah',
        'type_hotel_1',
        'quad_1',
        'triple_1',
        'double_1',
        'type_hotel_2',
        'quad_2',
        'triple_2',
        'double_2',
        'type_hotel_3',
        'quad_3',
        'triple_3',
        'double_3',
    ];

    public function listHotel()
    {
        return $this->hasOne(List_hotel::class, 'id', 'id_hotel_mekah');
    }

    public function moneyPackets()
    {
        return $this->hasOne(Money_packet::class, 'id_hotel', 'id');
    }

    public function facility()
    {
        return $this->hasOne(Facilitas::class, 'id_hotel', 'id');
    }
}
