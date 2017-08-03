
<div id="tabCoordinador" class="tab-pane">

	<div class="row"> 

      <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Informacion como Coordinador</h2>
            <ul class="buttons">                                            
              <div class="side fr">   
             @if ($usuario->coordinador == null) 
                    <a href="javascript:AltaCoordinador()"> 
                      <button  data-toggle="modal"  class="btn btn-success">Asignarlo como Coordinador</button>
                    </a>
              @else   
                     <a href="javascript:AsignarCoordinadorIglesias('alumno')"> 
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
                  <th width="7%"> Clave Coordinador </th>
                  <th width="35%"> Nombre Completo</th>
                  <th width="10%"> Status</th>
                  <th width="7%"> </th>
                </tr>
              </thead>
              <tbody>              
                   @if (!empty($usuario->coordinador))
                    <tr>
                      <td> {{ $usuario->coordinador->cord_Id }} </td>
                      <td> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP  }}  {{ $usuario->persona->per_ApellidoM }}  </td>
                       <td> {{ $usuario->coordinador->cord_Activo }}  </td>
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
                @if (!empty($usuario->coordinador))
                  @foreach ($usuario->coordinador->coordinadoriglesias as $cordIglesia)
                    <tr>
                        <td> {{  $cordIglesia->cordigle_idIglesia }} </td>
                        <td> {{ $cordIglesia->iglesia->igle_Nombre }} </td>                     
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
