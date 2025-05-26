<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'customer_name',
        'contact_info',
        'check_in_date',
        'check_out_date',
        'guests_count',
        'room_type',
        'room_number',
        'payment_status',
        'booking_status',
    ];

    protected $casts = [
        'check_in_date' => 'datetime',
        'check_out_date' => 'datetime',
    ];

}
