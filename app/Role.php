<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;



class Role extends Model
{
    public function Users(){ 
       return  $this->belongsToMany('Otecnya\User');
    }
}
