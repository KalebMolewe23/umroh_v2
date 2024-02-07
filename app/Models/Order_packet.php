<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_packet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_order',
        'id_user',
        'id_packet',
        'name_order',
        'date_transaction',
        'total_transaction',
        'payment_type',
        'amount',
        'status',
    ];
}
