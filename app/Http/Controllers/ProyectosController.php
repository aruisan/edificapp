<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proyectos;
use App\User;
use App\Imagenes;

use Auth;
use Session;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos = Proyectos::where('user_id', '=', Auth::user()->id)->get();
         $fotos = Imagenes::groupBy('proyecto_id')->get();

        return view('proyectos.index')->with('fotos',$fotos)->with('datos_tabla',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingresar = new Proyectos;
        $ingresar->nombre = $request->input('nombre');
        $ingresar->descripcion = $request->input('descripcion');
        $ingresar->detalle = $request->input('detalle');
        $ingresar->user_id = Auth::user()->id;
        $ingresar->save();

        Session::flash('message','Proyecto '.$request->input('nombre').' creado con exito');
        return redirect()->route('misProyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $datos = Proyectos::find($id);
        $fotos = \DB::table('imagenes')
                    ->select('*')
                    ->where('proyecto_id', '=', $id)
                    ->get();
        $foto = \DB::table('imagenes')
                    ->select('*')
                    ->where('proyecto_id', '=', $id)
                    ->first();

         
        if ($datos->user_id == Auth::user()->id)
        {  
            if($foto == null)
            { 
                $foto = "docs/imagenblanco.jpg"; 
            }else{
                 $foto = $foto->ruta;
            }
            return view('imagenes.index', ['datos'=>$datos, 'fotos'=>$fotos, 'foto'=>$foto]);
        }else{
            Session::flash('message-error', 'No es Propietario de ese Proyecto');
            return redirect()->route('misProyectos.index');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos =  Proyectos::find($id);
        return view('proyectos.edit')->with('datos',$datos);
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
        $salas = Proyectos::find($id);
        $salas->nombre = $request->input('nombre');
        $salas->descripcion = $request->input('descripcion');
        $salas->detalle = $request->input('detalle');
        $salas->save();

        Session::flash('message','Proyecto '.$request->input('nombre').' Editado con exito');
        return redirect('/misProyectos/'.$id);      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
