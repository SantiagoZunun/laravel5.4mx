<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Admin\Idiomas;  


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        //verficcar la vista por default. hacer una conuslta de las vistas de usuario.

        $menu = 'menu_admin';
        Session::put('menu', $menu);
        /*==================================================================*/
        //verificar el idioma por default
        $idiomaactual =  config('app.locale');
        //consultra cual es el id
        $idiomaseleccionado = Idiomas::where('idio_clave', '=', $idiomaactual)->get();
        //obtener el id del idioma, ya que es numerico
        $idiomaactual =  $idiomaseleccionado[0]->idio_Id; 
        //poner el id del idioma en seccion para usarlo en las vistas                 
        Session::put('idioma', $idiomaactual);
        

         return view('template/base2');
   
    }
}
