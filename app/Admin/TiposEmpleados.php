<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class TiposEmpleados extends Model
{
    protected $table = 'tiposempleados';
    protected $primaryKey = 'tipoempl_Id';

    public function textotiposempleados()
    {       
      /*Ralacioin con el Tipos de Textos par ala descripcion de Idiomas*/
       return $this->hasMany('App\Admin\TextoTiposEmpleados', 'textipem_idTipoEmpleado', 'tipoempl_Id' );      
    }

}
