<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_area',
        'name_hotel',
        'address',
        'star',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'created_at',
        'updated_at'
    ];
}
