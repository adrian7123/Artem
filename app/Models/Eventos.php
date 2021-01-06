<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $fillable = [
         'id',
         'titulo',
         'autor',
         'descricao',
         'img',
         'numParticipantes',
         'inicio',
         'termino',        
         'id_usuario',
         'endereco'
         
    
    ];
    
    
    protected $table = 'eventos';
}