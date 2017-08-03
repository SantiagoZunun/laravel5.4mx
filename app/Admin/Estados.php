<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Estados extends Model
{
   
     protected $table = 'estados';
     protected $primaryKey = 'estado_Id';

     
    //Obtener los estados de un pais seleccionado 
    public static function towns($idpais)
    {       
    	return DB::table('Estados')->where('estado_idPais','=',$idpais );
    }



}
