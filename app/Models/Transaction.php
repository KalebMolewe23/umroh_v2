<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_packet',
        'payment_type',
        'payment_metode',
        'transaction_code',
        'room_type',
        'hotel_type',
        'departing_from',
        'dp',
        'departing_price',
        'grand_total',
        'transaction_status'
    ]; 

    public function transactionDetail()
    {
        return $this->hasMany(Transaction_detail::class, 'id_transaction', 'id');
    }

    public function dataPacket()
    {
        return $this->hasOne(Packets::class, 'id', 'id_packet');
    }
    
    public function paymentDetail()
    {
        return $this->hasOne(Payment_detail::class, 'id_transaction', 'id');
    }
    
}
