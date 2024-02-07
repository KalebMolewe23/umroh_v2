<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name_website',
        'bg1',
        'bg2',
        'banner1',
        'banner2',
        'banner3',
    ];
}
