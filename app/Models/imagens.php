<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imagens extends Model
{
    protected $fillable = [
         'id',
         'nome',
         'id_evento',     
    ];
}