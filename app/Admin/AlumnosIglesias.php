<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class AlumnosIglesias extends Model
{
     protected $table = 'alumnosiglesias';
     protected $primaryKey = 'alumigle_Id';

   
    public function alumno()
    {       
      /*Un alumno esta relacion con un Usuario*/
       return $this->belongsTo('App\Admin\Alumnos','alumigle_idAlumno', 'alum_Id' )->withDefault();        
    }

    public function iglesia()
    {       
      /*Realcionarlo con la iglesias*/
       return $this->belongsTo('App\Admin\Iglesias','alumigle_idIglesia', 'igle_Id' )->withDefault();       
    }

     

}
