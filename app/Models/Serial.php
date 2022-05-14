<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    use HasFactory;
    protected $table = "tv_series";
    protected $fillable = ['movie_id', 'tv_chanel', 'number_ep', 'number_se'];
    public $timestamps = false;
}