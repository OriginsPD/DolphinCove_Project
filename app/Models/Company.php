<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'company_name',
        'guest_count',
        'hotel_id'
    ];

    public $timestamps = false;

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function guest_details(){
        return $this->hasMany(Guest_details::class);
    }
}