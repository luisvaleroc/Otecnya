<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    


    public function empresa(){
        return $this->belongsTo('Otecnya\Empresa');
    }
    
    public function notas(){
        return $this->hasMany('Otecnya\Nota');
    }
}
