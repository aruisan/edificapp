<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imagenes;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('imagenes.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $path = public_path().'/uploads/';
            $files = $request->file('file');
            foreach($files as $file){
               // $fileName = $file->getClientOriginalName();
                $fileName = 'edificapp'. time().'.'.$file->getClientOriginalExtension();
                $file->move($path, $fileName);

                $ingresar = new Imagenes;
                $ingresar->ruta = $fileName;
                $ingresar->proyecto_id = $request->input('proyecto');
                $ingresar->save();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $datos =  Imagenes::find($id);
        $datos->delete();
        /*$path = public_path().'/uploads/'.$datos->ruta;
        \Storage::delete($path);*/
        \Session::flash('message-error', 'se ha borrado la imagen con exito');
        return redirect('/misProyectos/'.$datos->proyecto_id);
    }
}
