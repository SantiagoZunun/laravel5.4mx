<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    //Asiganmaos la table de la base de datos
     protected $table = 'personas';
     protected $primaryKey = 'per_IdPersona';

    /*Hacer la relacion con la tabla de usuario
    Una peraonas esta registrado como usuarios*/
    // public function tablapersona()
    // {     
    //    se colocar el modelo usuario. la columna relacionados entre las dos tablas.
    //    return $this->hasOne('App\User', 'us_IdPersona', 'per_IdPersona');
    // }

   public function usuario()
    {   
      return $this->hasOne('App\User', 'us_IdPersona', 'per_IdPersona');  //en la tabla de usuario cual es el id.
    }

}
