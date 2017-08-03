<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Vistas extends Model
{
    //
     protected $table = 'vista';
     protected $primaryKey = 'vis_Id';

    public function textovista()
    {       
      /*Ralacioin con el Tipos de Textos par ala descripcion de Idiomas*/
       return $this->hasMany('App\Admin\TextoVista', 'txtvista_idVista', 'vis_Id' );      
    }
}
