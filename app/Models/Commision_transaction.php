<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commision_transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaction',
        'id_agens',
        'grand_commision',
    ];
}
