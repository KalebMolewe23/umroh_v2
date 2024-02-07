<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'id_user',
        'id_condition',
        'id_money',
        'id_packet',
        'id_hotel',
        'video',
        'image',
        'status',
    ];

    public function packets()
    {
        return $this->hasOne(Packets::class, 'id', 'id_packet');
    }

    public function hotels()
    {
        return $this->hasOne(Hotel::class, 'id', 'id_hotel');
    }

    public function conditions()
    {
        return $this->hasOne(Condition::class, 'id_packet', 'id_packet');
    }
}
