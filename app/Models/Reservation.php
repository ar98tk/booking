<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'passport',
        'no_adults',
        'no_children',
        'no_infants',
        'total_price',
        'class',
        'status',
        'reservation_code',
        'trip_id',

    ];

    public function trip(){
        return $this->belongsTo(Trip::class,'trip_id');
    }

}
