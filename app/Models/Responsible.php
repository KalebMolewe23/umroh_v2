<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'name_responsibles',
        'role_responsibles',
        'ktp',
        'npwp',
        'email',
        'phone',
    ];
}
