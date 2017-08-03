<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Idiomas;  

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idvista)
    {
        //

        $menu = 0 ;

        switch ($idvista) {
          case 0:	// default
      		$menu = 'base2';
          break;
	      case 1:	// Alumno
	      		$menu = 'menu_alumno';
	          break;
	      case 2:	// Lider
	      		$menu = 'menu_lider';	      		
	          break;
	      case 3: // Pastor
	          $menu = 'menu_pastor';
	          break;
				case 4: // Administrador
	          $menu = 'menu_admin';
	         
	          break;
	      case 5: // Calificador
	          $menu = 'menu_calificador';
	          break;
				case 6: // Cordinador
	          $menu = 'menu_coordinador';
	          break;
	      default:
	          break;
    }

        // $grupo = 'ACA VA EL TXT DEL GRUPO';
         Session::put('menu', $menu);





        $idiomaactual =  config('app.locale');
        $idiomaseleccionado = Idiomas::where('idio_clave', '=', $idiomaactual)->get();


        //dd($usuariovistas);

        return view('template/base2',compact('idiomaseleccionado' ) );




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
        //
    }
}
