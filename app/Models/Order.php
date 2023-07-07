<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'lawyer_id',
        'customer_id',
        'category_id',
        'amount',
        'booking_date',
        'lawyer_location',
        'customer_location',

    ];
}
