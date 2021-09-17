<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'guest_id',
        'program_id'
    ];

    public function Guest_details(){
        return $this->BelongTo(Guest_details::class,'guest_id');
    }

    public function Program(){
        return $this->BelongTo(Program::class,'guest_id');
    }

}