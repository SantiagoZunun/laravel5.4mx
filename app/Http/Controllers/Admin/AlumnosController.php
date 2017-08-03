<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Alumnos;
use App\Admin\AlumnosIglesias;
use App\Admin\UsuarioVista;




class AlumnosController extends Controller
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
        
        /*Dar de alta como alumno
       ===============================================================*/         
       $Alumnos = new Alumnos();        
       //los campos que se va aguardar
       $idUsuario = $request->alum_idUsaurio;
       $Alumnos->alum_IdUsuario =  $request->alum_idUsaurio;
       $Alumnos->alum_FechaInscripcion =  $request->alum_FechaInscripcion;
       //Guardamos los datos
       $Alumnos->save();
       //Obtener el ID o matricula del alumno insertado
       $idAlumno = $Alumnos->alum_Id;  


       /* Dar de alta en la relacion de AlumnosIglesia
       ==============================================================*/
       $AlumnoIglesia = new AlumnosIglesias();        
       //los campos que se va aguardar       
       $AlumnoIglesia->alumigle_idIglesia =  $request->alumigle_idIglesia;
       $AlumnoIglesia->alumigle_idAlumno =   $idAlumno;
       //Guardamos los datos
       $AlumnoIglesia->save() ;

       /* Dar de alta su acceso a la Vista
        ==============================================================*/        
        $usuariovista = new UsuarioVista();        
        //los campos que se va aguardar       
        $usuariovista->usvis_IdUsuario     =  $request->alum_idUsaurio;
        $usuariovista->usvis_IdVista     =  1 ;
        //Guardamos los datos
        $usuariovista->save() ; 


       //Nos regresamos al a vista del detalle del usuario.
       return redirect()->back();

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
