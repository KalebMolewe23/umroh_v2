<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_ticket',
        'name_packet',
        'maskapai_name',
        'departure_city',
        'departure_date',
        'id_category_packet',
        'seat_capasitas',
        'dp',
    ];

    public function tiketGroup()
    {
        return $this->hasOne(Ticket_group::class, 'id', 'id_ticket');
    }

    public function informasiTravels()
    {
        return $this->hasOne(Informasi_travel::class, 'id_user', 'id_user');
    }

    public function partnerBranches()
    {
        return $this->hasMany(Partner_branch::class, 'id_user', 'id_user');
    }
}
