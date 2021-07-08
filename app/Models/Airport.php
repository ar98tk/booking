<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $table = 'airports';
    protected $fillable = [
        'name',
        'country_name'
    ];

    public function trips(){
        return $this->hasMany(Trip::class);
    }
}
