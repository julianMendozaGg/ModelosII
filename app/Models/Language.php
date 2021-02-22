<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'language';
    protected $primaryKey = 'language_id';
    protected $fillable =[
        'language_id','name'
    ];

    public function film(){
        return $this->hasMany(Film::class, 'language_id', 'language_id');
    }
}
