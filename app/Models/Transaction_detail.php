<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaction',
        'jamaah_type',
        'qty',
        'price',
        'sub_total'
    ];
}
