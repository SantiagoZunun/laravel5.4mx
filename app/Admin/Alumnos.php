<?php

namespace App\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


use DB;

class Alumnos extends Model
{
     //Asiganmaos la table de la base de datos
     protected $table = 'alumnos';
     protected $primaryKey = 'alum_Id';

    /*Relaciones */
    public function user()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\User','id', 'alum_IdUsuario' )->withDefault();        
    }
    /*Relacion de alumno con AlumnoIlesia*/
    public function alumnoiglesia()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->hasMany('App\Admin\AlumnosIglesias', 'alumigle_idAlumno', 'alum_Id' );      
    }






     //  public static function SelectUsuarioAlumno($idUsuario) 
     //  {
	    //   return DB::table('alumnos') 
	    //         ->leftJoin('users','id', '=' ,'alum_IdUsuario')	    
	    //         ->leftJoin('personas','per_IdPersona', '=' ,'us_IdPersona')
	    //  		->where('alum_IdUsuario','=',$idUsuario)
	    //  		->Select('*')
	    //  		->get();     	
     // } 

     // public static function SelectAlumnoIglesia($idUsuario) 
     //  {
	    //   return DB::table('alumnos') 
	    //         ->leftJoin('alumnosiglesias','alumigle_idAlumno', '=' ,'alum_Id')	 
	    //         ->leftJoin('iglesias','igle_Id', '=' ,'alumigle_idIglesia')	 
	    //  		->where('alum_IdUsuario','=',$idUsuario)
	    //  		->Select('*')
	    //  		->get();     	

     // } 

     




}
