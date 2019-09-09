<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['name', 'descrip', 'image'];
    public function empresa(){
        return $this->belongsTo('Otecnya\Empresa');
    }

    public function notas(){
        return $this->hasMany('Otecnya\Nota');
    }
}
