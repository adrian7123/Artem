<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participacao extends Model
{
    protected $fillable = [
       'id',
       'participante',
       'criador',
       'evento'
       
    ];
    
    protected $table = 'participacao';
}