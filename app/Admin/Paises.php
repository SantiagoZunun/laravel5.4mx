<?php

namespace App\Admin;


use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    
    protected $table = 'paises';
    protected $primaryKey = 'pais_Id';

    public function estados()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->hasMany('App\Admin\Estados', 'estado_idPais', 'pais_Id' );      
    }



}
