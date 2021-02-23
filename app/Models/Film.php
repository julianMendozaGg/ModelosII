<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'film';
    protected $primaryKey = 'film_id';
    protected $fillable = [
        'film_id', 'title', 'description', 'release_year', 'language_id', 'rental_duration', 'rental_rate', 'length', 'replacement_cost',
        'rating', 'special_features','image'
    ];

    public function language(){
        return $this->belongsTo(Language::class, 'language_id', 'language_id');
    }

    public function category(){
        return $this->belongsToMany(Category::class, 'film_category', 'film_id', 'category_id');
    }

    public function actor(){
        return $this->belongsToMany(Actor::class, 'film_actor', 'film_id', 'actor_id');
    }

    public function store(){
        return $this->belongsToMany(Store::class, 'inventory', 'film_id', 'store_id');
    }

}
