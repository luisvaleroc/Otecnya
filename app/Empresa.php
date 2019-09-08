<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['name', 'description'];

    public function empleados(){
        return $this->hasMany('Otecnya\Empleado');
    }
   
}
