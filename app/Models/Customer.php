<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = ('customer');
    protected $fillable = [
        'customer_id', 'store_id', 'first_name', 'last_name', 'email', 'address_id', 'active'
    ];

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function rental(){
        return $this->hasMany(Rental::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
