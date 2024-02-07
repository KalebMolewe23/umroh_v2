<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'bank_name',
        'number_rek',
        'owner_rek',
        'commision',
    ];
}
