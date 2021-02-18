<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = ('city');

    protected $fillable = [
        'city_id', 'city', 'country_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }


}
