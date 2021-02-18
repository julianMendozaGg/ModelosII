<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = ('inventory');
    protected $fillable = [
        'inventory_id', 'film_id', 'store_id'
    ];

    public function rental(){
        return $this->hasMany(Rental::class);
    }
}
