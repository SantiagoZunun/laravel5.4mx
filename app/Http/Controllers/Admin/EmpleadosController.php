<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Modelos
use App\Admin\Empleados;
use App\Admin\UsuarioVista;


class EmpleadosController extends Controller
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
        

        /* Dar de alta como Empleados
        ==============================================================*/
        $empleado = new Empleados();        
        //los campos que se va aguardar       
        $empleado->emple_idUsuario     =  $request->emple_idUsuario;
        $empleado->emple_TipoEmpleado     =  $request->emple_TipoEmpleado;
        //Guardamos los datos
        $empleado->save() ; 

        /*Agregarlo su Usuariovista
        ==============================================================*/      
        //Verificar el tipo de empleados para guardar su tipo de vista
        if($request->emple_TipoEmpleado == 1) {
           $vista = 4;   //Vista de Administrador 
        }

        $usuariovista = new UsuarioVista();        
        //los campos que se va aguardar       
        $usuariovista->usvis_IdUsuario     =  $request->emple_idUsuario;
        $usuariovista->usvis_IdVista     =  $vista ;
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
