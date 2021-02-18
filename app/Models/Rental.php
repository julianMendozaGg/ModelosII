<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = ('rental');
    protected $fillable = [
        'rental_id', 'rental_date', 'inventory_id', 'customer_id', 'return_date', 'staff_id'
    ];

    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
