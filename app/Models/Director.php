<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "DIRECTORS";
    protected $fillable = ['directors_id', 'd_name', 'd_surname', 'expertise', 'genre_id'];
    public $timestamps = false;
    protected $primaryKey = 'directors_id';

    // public function genres()
    // {
    //     return $this->hasOne(Genre::class);
    // }
}