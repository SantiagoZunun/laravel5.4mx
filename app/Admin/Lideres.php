<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Lideres extends Model
{
    //Asiganmaos la table de la base de datos
    protected $table = 'lideres';
    protected $primaryKey = 'lid_Id';

     /*Relaciones */
    public function user()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\User','id', 'lid_idUsuario' )->withDefault();        
    }
    /*Relacion de alumno con AlumnoIlesia*/
    public function lideriglesias()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->hasMany('App\Admin\LideresIglesias', 'lidigle_idLider', 'lid_Id' );      
    }



}
