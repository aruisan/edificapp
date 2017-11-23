<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';

    protected $fillable = ['name', 'especializacion_id'];

	 public static function actividades($id){
		return actividad::where('especializacion_id', '=', $id)
		->get();
	}
}
