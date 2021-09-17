<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public $timestamps = false;

    public function Guest_details(){
        return $this->hasMany(Guest_details::class);
    }
}
