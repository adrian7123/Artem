<?php

namespace App\Http\Controllers;

class Estados {  
    
    static function getEstados(){
          
          $estados = [
             'AC',
             'AL',
             'AP',
             'AH',
             'BA',
             'CE',
             'DF',
             'ES',
             'GO',
             'MA',
             'MT',
             'MS',
             'MG',
             'PA',
             'PB',
             'PR',
             'PE',
             'PI',
             'RN',
             'RS',
             'RO',
             'RR',
             'SC',
             'TO',
             'SE',
             
        ];    
        
        return $estados;
    }
}