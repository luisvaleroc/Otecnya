<?php

namespace Otecnya;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['name', 'descrip', 'image'];
}
