<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class UsuarioVista extends Model
{
    //
     protected $table = 'uservista';
     protected $primaryKey = 'usvis_Id';

    public function vista()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Vistas','usvis_IdVista', 'vis_Id' )->withDefault();       
    }
}
