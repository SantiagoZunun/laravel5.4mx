<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Admin\Lideres;  //llamar el modelo
use App\Admin\LideresIglesias;  
use App\Admin\UsuarioVista;  




class LideresController extends Controller
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
        /*Dar de alta como Lider
       ===============================================================*/         
       $lider = new Lideres();        
       //los campos que se va aguardar
       $idUsuario = $request->lid_idUsuario;

       $lider->lid_idUsuario =  $request->lid_idUsaurio;
       $lider->lid_FechaInscripcion    =  $request->lid_FechaInscripcion;       
       //Guardamos los datos
       $lider->save();
       //Obtener el ID de lider insertado
       $idLider = $lider->lid_Id;  


       /* Dar de alta en la relacion de AlumnosIglesia
       ==============================================================*/
       $lideriglesias = new LideresIglesias();        
       //los campos que se va aguardar       
       $lideriglesias->lidigle_idIglesia =  $request->lid_idIglesia;
       $lideriglesias->lidigle_idLider =  $idLider;
       //Guardamos los datos
       $lideriglesias->save() ;   


        /* Dar de alta su acceso a la Vista
        ==============================================================*/        
        $usuariovista = new UsuarioVista();        
        //los campos que se va aguardar       
        $usuariovista->usvis_IdUsuario     =  $request->lid_idUsaurio;
        $usuariovista->usvis_IdVista     =  2 ;
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
