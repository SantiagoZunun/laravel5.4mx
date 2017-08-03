<div id="tabPastor" class="tab-pane">

	<div class="row"> 

      <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Informacion como Pastor</h2>
            <ul class="buttons">                                            
              <div class="side fr">   
             @if ($usuario->pastor == null) 
                    <a href="javascript:AltaPastor()"> 
                      <button  data-toggle="modal"  class="btn btn-success">Asignarlo como Pastor</button>
                    </a>
              @else   
                     <a href="javascript:asignarPastorIglesia()"> 
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
                  <th width="7%"> Clave Pastor </th>
                  <th width="35%"> Nombre Completo</th>
                  <th width="10%"> Status</th>
                  <th width="7%"> </th>
                </tr>
              </thead>
              <tbody>              
                   @if (!empty($usuario->pastor))
                    <tr>
                      <td> {{ $usuario->pastor->pas_Id }} </td>
                      <td> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP  }}  {{ $usuario->persona->per_ApellidoM }}  </td>
                       <td> {{ $usuario->pastor->pas_Activo }}  </td>
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
                @if (!empty($usuario->pastor))
                  @foreach ($usuario->pastor->pastoriglesias as $pastorIglesia)
                    <tr>
                        <td> {{  $pastorIglesia->pasigle_idIglesia }} </td>
                        <td> {{ $pastorIglesia->iglesia->igle_Nombre }} </td>                     
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