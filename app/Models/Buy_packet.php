<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_packet extends Model
{
    protected $table = 'buy_packet';
    protected $fillable = [
        'id_user',
        'id_itineries',
        'quantity_adult',
        'quantity_child',
        'quantity_baby',
        'dp',
        'maskapai_name',
        'type_room',
        'price_total',
    ];
}
