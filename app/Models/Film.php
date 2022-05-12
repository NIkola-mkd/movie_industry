<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "FILMS";
    protected $fillable = ['movie_id', 'city_premiere', '2D', '3D'];
    public $timestamps = false;
    // protected $primaryKey = 'genre_id';
}