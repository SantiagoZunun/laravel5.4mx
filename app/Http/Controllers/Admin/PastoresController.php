<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Pastores;  //llamar el modelo
use App\Admin\PastoresIglesias;  
use App\Admin\UsuarioVista;  



class PastoresController extends Controller
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
        /*Dar de alta como Lider
       ===============================================================*/         
       $pastor = new Pastores();        
       //los campos que se va aguardar
       $idUsuario = $request->pas_idUsuario;

       $pastor->pas_idUsuario =  $request->pas_idUsaurio;
       $pastor->pas_FechaInscripcion    =  $request->pas_FechaInscripcion;       
       //Guardamos los datos
       $pastor->save();
       //Obtener el ID de lider insertado
       $idPastor = $pastor->pas_Id;  


        /* Dar de alta en la relacion de AlumnosIglesia
        ==============================================================*/
        $pastoriglesias = new PastoresIglesias();        
        //los campos que se va aguardar       
        $pastoriglesias->pasigle_idIglesia =  $request->pas_idIglesia;
        $pastoriglesias->pasigle_idPastor =  $idPastor;
        $pastoriglesias->pasigle_Encargado =  1;
        //Guardamos los datos
        $pastoriglesias->save() ;   

        /* Dar de alta su acceso a la Vista
        ==============================================================*/        
        $usuariovista = new UsuarioVista();        
        //los campos que se va aguardar       
        $usuariovista->usvis_IdUsuario   =  $request->pas_idUsaurio;
        $usuariovista->usvis_IdVista     =  3 ; 
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
