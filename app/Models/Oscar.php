<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oscar extends Model
{
    use HasFactory;
    protected $table = "Oscars";
    protected $fillable = ['movie_id', 'actor_id', 'role', 'year'];
    public $timestamps = false;
}