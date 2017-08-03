<div class="tab-pane" id="tabAlumno">

    <div class="row"> 

      <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Informacion como Alumno</h2>
            <ul class="buttons">                                            
              <div class="side fr">   
             @if ($usuario->alumno == null) 
                    <a href="javascript:AltaAlumno()"> 
                      <button  data-toggle="modal"  class="btn btn-success">Asignarlo como Alumno</button>
                    </a>
              @else   
                     <a href="javascript:asignarIglesiaAlumno('alumno')"> 
                      <button  data-toggle="modal"  class="btn btn-success">Agregar Iglesia</button>
                    </a>
                 
               @endif                                              
              </div>                                                              
            </ul> 

          </div>
          <div class="content np">
            <table cellpadding="0" cellspacing="0" width="100%">
              <thead>
                <tr>                                    
                  <th width="7%"> Matricula </th>
                  <th width="35%"> Nombre Completo</th>
                  <th width="10%"> Status</th>
                  <th width="7%"> </th>
                </tr>
              </thead>
              <tbody>              
                   @if (!empty($usuario->alumno))
                    <tr>
                      <td> {{ $usuario->alumno->alum_Id }} </td>
                      <td> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP  }}  {{ $usuario->persona->per_ApellidoM }}  </td>
                       <td> {{ $usuario->alumno->alum_Activo }}  </td>
                      <td align="center">
                        <a href="" class="btn btn-xs btn-default btn-block"> Baja </a>
                      </td>
                    </tr>
                  @endif
                      
              </tbody>
            </table>                                        
          </div>
        </div>
      </div>
           
       <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Igesia Asignado del Alumno</h2>
            <ul class="buttons">                                            
              <div class="side fr">     
                                                                       
              </div>                                                              
            </ul> 

          </div>
          <div class="content np">
            <table cellpadding="0" cellspacing="0" width="100%">
              <thead>
                <tr>                                    
                  <th width="7%"> Clave Iglesia </th>
                  <th width="50%">Nombre Iglesia</th>                 
                </tr>
              </thead>
              <tbody>
                @if (!empty($usuario->alumno))
                  @foreach ($usuario->alumno->alumnoiglesia as $alumnos)
                    <tr>
                        <td> {{  $alumnos->alumigle_Id }} </td>
                        <td> {{ $alumnos->iglesia->igle_Nombre }} </td>                     
                      </tr>
                  @endforeach 
                @endif                    
                   
              </tbody>
            </table>                                        
          </div>
        </div>
      </div>


     
    </div>
 

     
 
</div>