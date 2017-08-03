<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['middleware' => 'web'], function () {
//     Route::get('idioma/{idioma}', function ($idioma) {    
//         Session::set('lang', $idioma);
//         return Redirect::back();
//     });
   

// });

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware' => 'web'], function () {

    Route::get('idioma/{idioma}', function ($idioma) {    
       Session::put('lang', $idioma);
       //consultar el id del idioma       
       $idiomaseleccionado =  DB::table('Idiomas')->where('idio_clave', '=', $idioma)->get();
       //obtener el id de l idioma para su uso en las vistas
       $idiomaactual =  $idiomaseleccionado[0]->idio_Id;
       Session::put('idioma', $idiomaactual);
       //nos regresmas a la vista actual
       return Redirect::back();       
    });


    


    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('Usuarios', 'Admin\UsuariosController'); 
    Route::resource('Alumnos', 'Admin\AlumnosController'); 
    Route::resource('AlumnosIglesias', 'Admin\AlumnosIglesiasController'); 
    
    Route::resource('Lideres', 'Admin\LideresController'); 
    Route::resource('LideresIglesias', 'Admin\LideresIglesiasController'); 

    Route::resource('Coordinadores', 'Admin\CoordinadoresController'); 
    Route::resource('CoordinadoresIglesias', 'Admin\CoordinadoresIglesiasController'); 

    Route::resource('Pastores', 'Admin\PastoresController'); 
    Route::resource('PastoresIglesias', 'Admin\PastoresIglesiasController'); 

    Route::resource('Empleados', 'Admin\EmpleadosController'); 
    Route::resource('Vistas', 'Admin\VistaController'); 
    
    

    Route::get('Usu_ListaUsuarios','Admin\UsuariosController@listausuarios');
    Route::get('Usu_Detalle','Admin\UsuariosController@edit');

    //Alunos
    Route::resource('Alumnos', 'Admin\AlumnosController'); 


    Route::get('/estados/{id}','Admin\PaisesController@listaestados');
<<<<<<< HEAD




   
});

 


    
   




// Route::get('language/{lang}', function($lang){
//   \Session::put('locale', $lang);
//   //echo trans($lang);
//   return redirect()->back();
// })->middleware('language'); 
=======
>>>>>>> 6d25dbe69adc20413b828cae0fb8f8dccdfedc64




   
});

 

