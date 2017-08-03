<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Pastores extends Model
{
    protected $table = 'pastores';
    protected $primaryKey = 'pas_Id';

     /*Relaciones */
    public function user()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\User','id', 'pas_IdUsuario' )->withDefault();        
    }
    /*Relacion de alumno con PasstorIlesia*/
    public function pastoriglesias()
    {       
       return $this->hasMany('App\Admin\PastoresIglesias', 'pasigle_idPastor', 'pas_Id' );      
    }


}
