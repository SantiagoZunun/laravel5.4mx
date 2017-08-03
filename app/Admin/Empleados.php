<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //Asiganmaos la table de la base de datos
     protected $table = 'empleados';
     protected $primaryKey = 'emple_Id';

    /*Relaciones */
    public function user()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\User','id', 'emple_idUsuario' )->withDefault();        
    }

    public function tiposempleados()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->hasOne('App\Admin\TiposEmpleados', 'tipoempl_Id', 'emple_TipoEmpleado' );        
    }




  

}
