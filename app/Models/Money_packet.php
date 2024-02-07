<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money_packet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_packet',
        'id_hotel',
        'price_baby',
        'price_child',
        'price_adult',
    ];
}
