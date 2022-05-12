<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = "GENRE";
    protected $fillable = ['genre_id', 'genre_name'];
    public $timestamps = false;
    protected $primaryKey = 'genre_id';

    // public function directors()
    // // {
    // //     $this->belongsTo(Director::class);
    // // }
}