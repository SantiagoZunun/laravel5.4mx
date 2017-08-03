<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'us_UserName', 'email', 'password','us_IdPersona',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
    /*Seccion de Telaciones 
    =================================================================================*/ 
    /* Relacion con la de Usuario y Personas  */ 
    public function persona()
    {     
       /*Un Usuario esta relacionado con una Personas. 
        Al fina de la linea de codigo, poner tabla usuario el cablo del Ide Personas,
         realacionado con el campo del id personas en tabla personas*/  
      return $this->belongsTo('App\Admin\Personas', 'us_IdPersona', 'per_IdPersona')->withDefault();
    }

    public function alumno()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasOne('App\Admin\Alumnos','alum_IdUsuario','id' );    
    }

    public function lider()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasOne('App\Admin\Lideres','lid_idUsuario','id' );    
    }

    public function coordinador()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasOne('App\Admin\Coordinadores','cord_idUsuario','id' );    
    }

    public function pastor()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasOne('App\Admin\Pastores','pas_idUsuario','id' );    
    }

    public function empleado()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasOne('App\Admin\Empleados','emple_idUsuario','id' );    
    }

    public function usuariovista()
    {       
      /*Un Usuario pueder ser un alumno */
       return $this->hasmany('App\Admin\UsuarioVista','usvis_IdUsuario','id' );    
    }

    






    /*Termina seccion de relaciones
    ==================================================================================*/
    /*Seccion de Busqueda
    ==================================================================================*/
    public function scopeName($query, $buscardatos)
    {     
       // dd("scope:" . $name); para impirmir
       if (trim($buscardatos) != "")    //Trim se usa para eliminar los espacios de una busqueda
       {         
         $query->leftJoin('personas','per_IdPersona','=','us_IdPersona')
               ->where(\DB::raw("CONCAT(per_Nombre,' ',per_ApellidoP, ' ',per_ApellidoM )"), 'like', '%'.$buscardatos.'%')               
               ->orwhere('id', 'like', '%'.$buscardatos.'%')               
               ->orderBy('per_Nombre', 'asc');
       }
       
    }
    /*Termina Seccion de Busqueda
    ==================================================================================*/





 
}
