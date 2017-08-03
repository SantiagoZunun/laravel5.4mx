<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Coordinadores extends Model
{
    protected $table = 'coordinadores';
    protected $primaryKey = 'cord_Id';

     /*Relaciones */
    public function user()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\User','id', 'cord_IdUsuario' )->withDefault();        
    }
    /*Relacion de alumno con AlumnoIlesia*/
    public function coordinadoriglesias()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->hasMany('App\Admin\CoordinadoresIglesias', 'cordigle_idCoordinador', 'cord_Id' );      
    }



}
