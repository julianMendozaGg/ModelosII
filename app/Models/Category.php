<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = ('category');

    protected $fillable = [
        'category_id', 'name'
    ];

    public function film(){
        return $this->belongsToMany(Film::class, 'film_category', 'category_id', 'film_id');
    }
}
