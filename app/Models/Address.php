<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = ('address');

    protected $fillable = [
        'address_id', 'address', 'address2', 'district', 'city_id', 'postal_code', 'phone', 'location'
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function store(){
        return $this->hasMany(Store::class);
    }

    public function customer(){
        return $this->hasMany(Customer::class);
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
