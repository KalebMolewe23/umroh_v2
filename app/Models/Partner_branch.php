<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner_branch extends Model
{
    use HasFactory;
    protected $table = 'partner_branches';
    protected $fillable = [
        'id_user',
        'city',
        'cost',
    ];

    public function regency()
    {
        return $this->hasOne(Regencies::class, 'id', 'id_regencies');
    }
}
