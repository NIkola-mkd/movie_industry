<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = "Grade";
    protected $fillable = ['actors_id', 'critics_id', 'acting', 'expression', 'naturalness', 'devotion'];
    public $timestamps = false;
}