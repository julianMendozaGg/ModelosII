<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = ('staff');
    protected $fillable = [
        'staff_id', 'first_name', 'last_name', 'address_id', 'picture', 'email', 'store_id', 'active', 'username', 'password'
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function rental(){
        return $this->hasMany(Rental::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
