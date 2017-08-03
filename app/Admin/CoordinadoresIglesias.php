<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class CoordinadoresIglesias extends Model
{
    protected $table = 'coordinadoresiglesias';
    protected $primaryKey = 'cordigle_Id';

    public function coordinador()
    {       
      /*Un coordinador con cordiandoriglesia*/
       return $this->belongsTo('App\Admin\Coordinadores','cordigle_idCoordinador', 'cord_Id' )->withDefault();        
    }

    public function iglesia()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Iglesias','cordigle_idIglesia', 'igle_Id' )->withDefault();       
    }


}
