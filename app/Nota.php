<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['note', 'time','empleado_id','curso_id'];

    public function empleado(){
        return $this->belongsTo('Otecnya\Empleado');
    }
    public function curso(){
        return $this->belongsTo('Otecnya\Curso');
    }

}
