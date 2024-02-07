<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaction',
        'payment_date',
        'payment_amount',
    ];
}
