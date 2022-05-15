<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    use HasFactory;
    protected $table = "Plays";
    protected $fillable = ['movie_id', 'actor_id', 'paid'];
    public $timestamps = false;
}