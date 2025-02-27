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
        'lawyer_status',
        'customer_status',
        'lawyer_location',
        'customer_location',
        'payment_slip',

    ];

    public function getPaymentSlipAttribute(){
        if($this->attributes['payment_slip'] == null){
            return asset('uploads/user.jpg');
        }
        return asset('uploads/user') . '/' . $this->attributes['payment_slip'];
    }

    public function customer(){
        return $this->belongsTo(User::class, 'id', 'customer_id');
    }

    public function lawyer(){
        return $this->belongsTo(User::class, 'id', 'lawyer_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }
}
