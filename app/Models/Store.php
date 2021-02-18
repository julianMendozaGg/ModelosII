<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = ('store');
    protected $fillable = [
        'store_id','manager_staff_id', 'address_id'
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function customer(){
        return $this->hasMany(Customer::class);
    }

    public function film(){
        return $this->belongsToMany(Film::class, 'inventory', 'store_id', 'film_id');
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
