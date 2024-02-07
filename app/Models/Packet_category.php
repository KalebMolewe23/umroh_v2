<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_name',
    ];
}
