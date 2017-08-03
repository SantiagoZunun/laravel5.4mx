<div id="tabEmpleado" class="tab-pane">

	<div class="row"> 

      <div class="col-md-12">
        <div class="block">
          <div class="head">
            <h2>Informacion como Empleado</h2>
            <ul class="buttons">                                            
              <div class="side fr">   
             @if ($usuario->empleado == null) 
                  <a href="javascript:AltaEmpleados()"> 
                    <button  data-toggle="modal"  class="btn btn-success">Asignarlo como Empleado</button>
                  </a>
               @endif                                              
              </div>                                                              
            </ul> 

          </div>
          <div class="content np">
            <table cellpadding="0" cellspacing="0" width="100%">
              <thead>
                <tr>                                    
                  <th width="15%"> No. </th>
                  <th width="15%"> Tipo</th>
                  <th width="35%"> Nombre Completo</th>
                  <th width="10%"> Status</th>
                  <th width="7%"> </th>
                </tr>
              </thead>
              <tbody>     
             
                   @if (!empty($usuario->empleado))
                    <tr>
                      <td> {{ $usuario->empleado->emple_Id }} </td>
                      <td> 
                         @foreach ($usuario->empleado->tiposempleados->textotiposempleados as $idiomaTipoEmpleados)
                           @if ($idiomaTipoEmpleados->textipem_idIdioma == Session::get('idioma')  )
                                {{ $idiomaTipoEmpleados->textipem_Descripcion }}
                           @endif 
                         @endforeach 
                       </td>
                      <td> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP  }}  {{ $usuario->persona->per_ApellidoM }}  </td>
                      <td> {{ $usuario->empleado->emple_Activo }}  </td>
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
           
       


     
    </div>
    
                                                
 </div>
