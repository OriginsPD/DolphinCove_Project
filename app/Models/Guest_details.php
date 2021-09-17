<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'payment_id',
        'guest_type_id'
    ];

    public $timestamps = false;

    function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function payment_type(){
        return $this->BelongsTo(Payment_type::class,'payment_id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}