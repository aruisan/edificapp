<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Especializacion;


use App\User;

class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal.index');
    }

      public function IndexBuscarEspecialidadesPublico()
    {
        $especialidades = Especializacion::paginate(4);
        return view('principal/especialidades')->with('especialidades', $especialidades);
    }

    
    
}
