<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AdamWathan\EloquentOAuth\Facades\OAuth;
use Auth;
use Redirect;
use Session;
//use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Redirect;

use App\User;
use Hash;

class usuarioController extends Controller
{


    public function __construct()
    {
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(Request $request)
    {
        $ingresar = new User;
        $ingresar->rol = $request->rol;
        $ingresar->email = $request->email;
        $ingresar->password = bcrypt($request->password);
        $ingresar->save();

        Auth::login($ingresar);

        return Redirect::to('dashboard');

    }


    /***  funcion login**/

    public function login(Request $request)
    {


      $user = User::where('email', $request->email)->first();


          if($user)
          {
            if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
            {
                //Session::flash('message', 'email '.$request->email.' pasword'.$request->password);
                return Redirect::to('dashboard');
            }else{
                Session::flash('message-error', 'clave erronea');
                return Redirect::to('/');
            }

          }


        Session::flash('message-error', 'Este usuario no esta registrado');
        return Redirect::to('/');

    }




    public function facebook()
    {
        OAuth::login('facebook', function($user, $details) {      
        $user->name     = $details->full_name;
        $user->avatar   = $details->avatar;
        $user->email    = $details->email;
        $user->save();
        });
        $user = Auth::user();
        if(Auth::user()->rol == ""){
            return view('miCuenta/confirmacionOauth', ['user' => $user]);
        }else{
            return view('dashboard.index', ['user' => $user]);
        }
        
    }


    public function google()
    {

        OAuth::login('google', function($user, $details) {    
        $user->name     = $details->full_name;
        $user->avatar   = $details->avatar;
        $user->email    = $details->email;
        $user->save();
        });
        $user = Auth::user();
        if(Auth::user()->rol == ""){
            return view('miCuenta/confirmacionOauth', ['user' => $user]);
        }else{
            return view('dashboard.index', ['user' => $user]);
        }
    }

    public function tipoUser(Request $request)
    {
        $user = user::find(Auth::user()->id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->rol      = $request->rol;
        $user->save();
        $user = Auth::user();
        return view('dashboard.index', ['user' => $user]);
    }


    public function editarCuenta()
    {
        $user = Auth::user();
        return view('miCuenta/index', ['user' => $user]);
    }

    public function dashBoard()
    {
        $user = Auth::user();
        return view('dashboard.index', ['user' => $user]);
    }

//////////////////////////////////////////////////////////
    public function misEspecializaciones()
    {
        return view('especializaciones.index');
    }

    public function misContratos()
    {
        return view('especializaciones.index');
    }

    public function misCalificaciones()
    {
        return view('especialistas.calificaciones');
    }

    public function membresia()
    {
        return view('especialistas.membresias');
    }

    public function misProyectos()
    {
        return view('proyectos.index');
    }



//////////////////////////////////////////////////////////////
    public function misCotizaciones()
    {
        if (Auth::check())
        {
           return view('cotizacion.create');
        }else{
            return view('cotizacion.directa');
        }
        
        
    }

    public function especialistas()
    {
        $user = Auth::user();
        return view('especialistas.buscar', ['user' => $user]);
    }

/////////////////////////////////////////////////////////////

    public function getLogout(){
        Auth::logout();
        //Session::flush();
        //OAuth::logout(); 
        return Redirect::to('/');
    }
/////////////////////////////////////////////////


    public function editUser(Request $request)
    {   
        $datos = User::find(Auth::user()->id);


        dd($request->name);
       return view('especializaciones.edit', compact('especializaciones'))->with('datos',$datos);
    }

     public function update(Request $request)
    {
        $actualizar = UserActividad::find($id);
        $actualizar->age = $request->input('age');
        $actualizar->mes = $request->input('mes');
        $actualizar->actividad_id = $request->input('actividad');
        $actualizar->save();

        Session::flash('message','Actividad en la Especiaizacion Editado con exito');
        return redirect()->route('misEspecializaciones.index');
    }
}
