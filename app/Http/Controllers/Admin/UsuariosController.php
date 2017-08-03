<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

//especificamos que vamos a usar el modelo
use App\Admin\Personas;  //llamar el modelo personas
use App\Admin\Iglesias;  //llamar el modelo personas
use App\User;  //Modelo de Usuario
use App\Admin\Alumnos;  //llamar el modelo personas
use App\Admin\TextoTiposEmpleados;  
use App\Admin\Idiomas;  
use App\Admin\Paises;
use App\Admin\Estados;




use Storage; //para almacenar las imagen de los libros



class UsuariosController extends Controller
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
        $idiomas = Idiomas::All(); 
        $paises = Paises::All();

        //ir a la pantalla de registro de un nuevo libro
        //return view('libros/librosagregar',compact('Idioma'));
       // return view('admin/usuarios/usuario_alta');

       return view('admin/usuarios/usuario_alta',compact('idiomas','paises'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Httbase2uest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        

       /*Guardar Registro de Personas
       ===============================================================*/         
       $Personas = new Personas();        
       //los campos que se va aguardar
       $Personas->per_Nombre =  $request->per_Nombre;
       $Personas->per_ApellidoP =  $request->per_ApellidoP;
       $Personas->per_ApellidoM =  $request->per_ApellidoM;
       $Personas->per_FechaNacimiento =  $request->per_FechaNacimiento;
       $Personas->per_LugarNacimiento =  $request->per_LugarNacimiento;
       $Personas->per_Sexo =  $request->per_Sexo;
       $Personas->per_EstadoCivil =  $request->per_EstadoCivil;
       $Personas->per_Escolaridad =  $request->per_Escolaridad;
       $Personas->per_Idioma =  $request->per_Idioma;
       $Personas->per_Telefono1 =  $request->per_Telefono1;
       $Personas->per_Telefono2 =  $request->per_Telefono2;
       $Personas->per_Email =  $request->email;

       //$Personas->per_Foto =  $request->lib_Idioma;
       //Guardamos en la base de tados
        $Personas->save() ;
        //Obtener el Id Asignado a la nueva persona
        $idPersona = $Personas->per_IdPersona;  

       /*Guardar Registro de Usuario
       ================================================================*/ 

       $User = new User();        
       //los campos que se va aguardar
       $User->us_IdPersona =  $idPersona;
       $User->us_UserName =  $request->per_Nombre;
       $User->email =  $request->email;
       $User->password =  bcrypt($request->password); 
       /*Guardamos los datos*/        
       $User->save() ;



        //per_IdPersona

        // print_r($ultimo);
        // die();

        
    

       //retornamos a la ruta de listalibros que seria la funicon de index     
       //return redirect()->route('Libros.index');




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
    public function edit($idUsuario)
    {             
       $usuario = User::findOrFail($idUsuario);             
       $iglesias = Iglesias::All();      
       $tiposempleados = TextoTiposEmpleados::All();

      
       return view('admin/usuarios/usuario_detalle',compact('usuario','iglesias','tiposempleados'));
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

    public function listausuarios(Request $request )
    { 

         
  

       $Usuarios = User::name($request->get('buscardatos'))->paginate(5);  
       return view('admin/usuarios/usuario_lista', compact('Usuarios'));
      
       

    }

    /*VISTA DEL DETALLE DE USUARIO
    =======================================================================*/

    public function usuariodetalle(Request $request )
    {             
       return view('admin/usuarios/usuario_lista');
    }


      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //
    }

  


}
