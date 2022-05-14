<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "actors";
    protected $fillable = ['actors_id', 'a_name', 'a_surname', 'date_of_birth', 'agent_code'];
    public $timestamps = false;
    protected $primaryKey = 'actors_id';
}