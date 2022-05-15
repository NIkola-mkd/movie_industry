<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movie";
    protected $fillable = ['movie_id', 'm_name', 'country', 'production', 'premiere', 'genre_id', 'directors_id', 'is_sequel'];
    public $timestamps = false;
    protected $primaryKey = 'movie_id';
}