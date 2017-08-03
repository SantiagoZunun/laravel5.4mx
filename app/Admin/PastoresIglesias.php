<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class PastoresIglesias extends Model
{
    protected $table = 'pastoresiglesias';
    protected $primaryKey = 'pasigle_Id';

    public function pastor()
    {       
      /*Un coordinador con cordiandoriglesia*/
       return $this->belongsTo('App\Admin\Pastores','pasigle_idPastor', 'pas_Id' )->withDefault();        
    }

    public function iglesia()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Iglesias','pasigle_idIglesia', 'igle_Id' )->withDefault();       
    }


}
