<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_content extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_category',
        'id_user',
        'title',
        'thumbnail',
        'short_desc',
        'long_desc',
    ];
}
