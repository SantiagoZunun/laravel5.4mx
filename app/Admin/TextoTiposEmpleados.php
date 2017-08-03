<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class TextoTiposEmpleados extends Model
{
    protected $table = 'texto_tiposempleados';
    protected $primaryKey = 'textipoem_Id';

    public function idioma()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Idiomas','textipem_idIdioma', 'idio_Id' )->withDefault();       
    }


    


}
