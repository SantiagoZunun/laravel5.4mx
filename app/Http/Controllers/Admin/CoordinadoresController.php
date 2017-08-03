<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Coordinadores;
use App\Admin\CoordinadoresIglesias;
use App\Admin\UsuarioVista;





class CoordinadoresController extends Controller
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
        /*Dar de alta como Corodinador
        ===============================================================*/         
       $coordinador = new Coordinadores();        
       //los campos que se va aguardar     
       $coordinador->cord_idUsuario =  $request->cord_idUsuario;
       $coordinador->cord_FechaAsignado =  $request->cord_FechaAsignado;
       //Guardamos los datos
       $coordinador->save();
       //Obtener el ID o matricula del alumno insertado
       $idCoordiador = $coordinador->cord_Id;  


       /* Dar de alta en la relacion de CordinadorIglesia
       ==============================================================*/
       $coordinadoriglesia = new CoordinadoresIglesias();        
       //los campos que se va aguardar       
       $coordinadoriglesia->cordigle_idIglesia =  $request->cord_idIglesia;
       $coordinadoriglesia->cordigle_idCoordinador =   $idCoordiador;
       //Guardamos los datos
       $coordinadoriglesia->save() ;   

        /* Dar de alta su acceso a la Vista
        ==============================================================*/        
        $usuariovista = new UsuarioVista();        
        //los campos que se va aguardar       
        $usuariovista->usvis_IdUsuario   =  $request->cord_idUsuario;
        $usuariovista->usvis_IdVista     =  6 ; //clave de vistacoordinador
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
