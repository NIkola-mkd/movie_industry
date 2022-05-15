<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critiques extends Model
{
    use HasFactory;
    protected $table = "Critiques";
    protected $fillable = ['movie_id', 'critics_id', 'rate'];
    public $timestamps = false;
}