<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi_travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_province', 
        'id_regencies', 
        'id_user',
        'travel_name',
        'image',
        'employee_name',
        'number_umroh',
        'number_haji',
        'address',
        'email',
    ];
}
