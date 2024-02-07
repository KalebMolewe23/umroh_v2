<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_money',
        'id_packet',
        'id_hotel',
        'in_facilitas',
        'in_facilitas_1',
        'in_facilitas_2',
        'in_facilitas_3',
        'in_facilitas_4',
        'in_facilitas_5',
        'in_facilitas_6',
        'in_facilitas_7',
        'in_facilitas_8',
        'in_facilitas_9',
        'out_facilitas',
        'out_facilitas_1',
        'out_facilitas_2',
        'out_facilitas_3',
        'out_facilitas_4',
        'out_facilitas_5',
        'out_facilitas_6',
        'out_facilitas_7',
        'out_facilitas_8',
        'out_facilitas_9',
    ];
}
