<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinery extends Model
{
    use HasFactory;
    protected $table = 'itineries';
    protected $fillable = [
        'id_user',
        'id_photo',
        'activity',
        'activity_2',
        'activity_3',
        'activity_4',
        'activity_5',
        'activity_6',
        'activity_7',
        'activity_8',
        'activity_9',
        'activity_10',
        'activity_11',
        'activity_12',
        'activity_13',
        'activity_14',
    ];

    public function photo()
    {
        return $this->hasOne(Photo::class, 'id', 'id_photo');
    }
}
