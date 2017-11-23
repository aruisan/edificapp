<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especializacion extends Model
{
    protected $table = 'especializacion';

    protected $fillable = ['name'];

    public function actividad(){
		return $this->hasMany('Actividad');
	}
}
