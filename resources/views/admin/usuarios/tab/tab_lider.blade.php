
<div id="tabLider" class="tab-pane">

<div class="row"> 

      <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Informacion Lider</h2>
            <ul class="buttons">                                            
              <div class="side fr">   
             @if ($usuario->lider == null) 
                    <a href="javascript:AltaLider()"> 
                      <button  data-toggle="modal"  class="btn btn-success">Asignarlo como Alumno</button>
                    </a>
              @else   
                     <a href="javascript:asignarIglesiaLider()"> 
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
                  <th width="7%"> Clave Lider </th>
                  <th width="35%"> Nombre Completo</th>
                  <th width="10%"> Status</th>
                  <th width="7%"> </th>
                </tr>
              </thead>
              <tbody>              
                   @if (!empty($usuario->lider))
                    <tr>
                      <td> {{ $usuario->lider->lid_Id }} </td>
                      <td> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP  }}  {{ $usuario->persona->per_ApellidoM }}  </td>
                       <td> {{ $usuario->lider->lid_Activo }}  </td>
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
            <h2>Lista de Iglesia asignado</h2>
            <ul class="buttons">                                            
              <div class="side fr">     
                                                                       
              </div>                                                              
            </ul> 

          </div>
          <div class="content np">
            <table cellpadding="0" cellspacing="0" width="100%">
              <thead>
                <tr>                                    
                  <th width="7%"> Id Iglesia </th>
                  <th width="50%">Nombre Iglesia</th>                 
                </tr>
              </thead>
              <tbody>
                @if (!empty($usuario->lider))
                  @foreach ($usuario->lider->lideriglesias as $iglesias )
                    <tr>
                        <td> {{ $iglesias->lidigle_idIglesia }} </td>
                        <td> {{ $iglesias->iglesia->igle_Nombre }} </td>                     
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
