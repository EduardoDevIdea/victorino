<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $fillable = ['nome', 'cargo', 'atividade', 'registro', 'sobre', 'img'];
}
