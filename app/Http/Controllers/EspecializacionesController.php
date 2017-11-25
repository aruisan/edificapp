<?php

namespace App\Http\Controllers;
//request
use Illuminate\Http\Request;
//use App\Http\Requests\UserActividadRequest;
use App\Http\Requests;
//controlelr
use App\Http\Controllers\Controller;
//auth
use Illuminate\Support\Facades\Auth;
//modelos
use Session;
use App\Actividad;
use App\User;
use App\UserActividad;
use App\Especializacion;
use Carbon\Carbon;

class EspecializacionesController extends Controller
{


    public function actividades(Request $request, $id)
    {
        if($request->ajax()){
            $actividades = Actividad::actividades($id);
            return response()->json($actividades);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $especializaciones = \DB::table('actividad')
                    ->select('user_actividad.*','actividad.nombre as actividad','actividad.especializacion_id', 'especializacion.nombre as especializacion')
                    ->join('user_actividad','actividad.id', '=', 'user_actividad.actividad_id' )
                    ->join('especializacion','actividad.especializacion_id', '=', 'especializacion.id' )
                    ->where('user_actividad.user_id', '=', Auth::user()->id)
                    ->get();

        return view('especializaciones.index')->with('datos_tabla', $especializaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especializaciones = especializacion::lists('nombre', 'id');
                   // dd($especializaciones);
        return view('especializaciones.create', compact('especializaciones'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        $ingresar = new UserActividad;
        $ingresar->tiempo = $request->input('tiempo');
        $ingresar->actividad_id = $request->input('actividad');
        $ingresar->user_id = Auth::user()->id;
        $ingresar->save();
        
        Session::flash('message','Actividad en la Especiaizacion creado con exito');
        return redirect()->route('misEspecializaciones.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $especializaciones = especializacion::lists('nombre', 'id');

         $datos = \DB::table('actividad')
                    ->select('user_actividad.*','actividad.nombre as actividad','actividad.especializacion_id', 'especializacion.nombre as especializacion')
                    ->join('user_actividad','actividad.id', '=', 'user_actividad.actividad_id' )
                    ->join('especializacion','actividad.especializacion_id', '=', 'especializacion.id' )
                    ->where('user_actividad.id', '=', $id)
                    ->first();
                    //dd($datos);
       return view('especializaciones.edit', compact('especializaciones'))->with('datos',$datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actualizar = UserActividad::find($id);
        $actualizar->tiempo = $request->input('tiempo');
        $actualizar->actividad_id = $request->input('actividad');
        $actualizar->save();

        Session::flash('message','Actividad en la Especiaizacion Editado con exito');
        return redirect()->route('misEspecializaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrar = UserActividad::find($id);
        $borrar->delete();
        Session::flash('message-error','se borro la Actividad con exito');
        return redirect()->route('misEspecializaciones.index');
    }
}
