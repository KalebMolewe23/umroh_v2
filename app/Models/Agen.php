<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'name_agen',
        'phone_agen',
        'email_agen',
        'city',
        'saldo',
        'bank',
        'number_rek',
        'status',
    ];
}
