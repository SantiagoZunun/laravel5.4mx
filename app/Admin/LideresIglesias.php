<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class LideresIglesias extends Model
{
    
    //Asiganmaos la table de la base de datos
    protected $table = 'lideresiglesias';
    protected $primaryKey = 'lidigle_id';

     public function lider()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\Admin\Lideres','lid_Id', 'lidigle_idLider' )->withDefault();        
    }

    public function iglesia()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Iglesias','lidigle_idIglesia', 'igle_Id' )->withDefault();       
    }


}

