<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table = 'trips';
    public $timestamps = false;
    protected $fillable = [
        'economy_seats',
        'economy_price',
        'business_seats',
        'business_price',
        'trip_date',
        'to_airport_id',
        'from_airport_id',
    ];

    public function from_airport(){
        return $this->belongsTo(Airport::class,'from_airport_id','id');
    }
    public function to_airport(){
        return $this->belongsTo(Airport::class,'to_airport_id','id');
    }

}
