@extends('template.header')  {{-- Incluye la pagina principal --}}

{{-- Apartir de aqui agregar el contenido 
==================================================================--}}
@section('contenido')  

    <div id="content">
      <div class="wrap">
        <div class="head">
          <div class="info">
            <h1>Blank Page</h1>
            <ul class="breadcrumb">
              <li><a href="#">Top level</a></li>
              <li class="active">Current level</li>
            </ul>
          </div>
        </div>
        <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block">
                <div class="head">
                  <h2> Usuarios </h2>
                  <ul class="buttons">                                            
                    <div class="side fr">                                                
                      <a href="{{ route('Usuarios.create' )}}"> 
                        <button  data-toggle="modal"  class="btn btn-primary"> Agregar Nuevo Usuario</button>
                      </a>                                                          
                    </div>                                                              
                  </ul> 
                </div>

                <div class="content np">
                  <div class="controls-row">
                    <div class="col-md-5">
                      <form class="" method="GET" action="{{ url('Usu_ListaUsuarios' )}} " enctype="multipart/form-data" role="search" >
                           <div class="input-group">
                            
                            <input type="text" id="datoBusqueda" name="buscardatos" class="form-control"/>
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"> Buscar  </button>
                            </div>
                        </div>
                      </form>   

                    </div>

                    <div class="col-md-4">
                      <span class="help-inline"> Busqueda por : Id/Nombre/Apellido </span>                      
                    </div>
                   


                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="divTabla" style="">
            <div class="col-md-12">
              <div class="block">
               
                <div class="content np">
                  <table cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>                                    
                                <th width="7%">Usuario</th>
                                <th width="30%">Nombre</th>
                                <th width="12%">Teléfono</th>
                                <th width="19%">Correo</th>
                                <th width="5%">Detalle</th>                                    
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($Usuarios as $Usuario)
                              <tr>                                    
                                    <td>{{ $Usuario->id }}</td>
                                    <td>{{ $Usuario->persona->per_Nombre }} 
                                      {{ $Usuario->persona->per_ApellidoP }} 
                                      {{ $Usuario->persona->per_ApellidoM }} 
                                    </td>
                                    <td>{{ $Usuario->persona->per_Telefono1 }}</td>
                                    <td>{{ $Usuario->persona->per_Email }}</td>
                                    <td>
                                      <a href="{{ route('Usuarios.edit',$Usuario->id) }}" class="btn btn-xs btn-info btn-block"> Detalle </a>

                                    </td>
                          


                                </tr> 
                            @endforeach   
                        </tbody>
                    </table>                   
                </div>

                <div class="footer">
                    <div class="side fr">                                           
                        <ul class="pagination">
              {{ $Usuarios->links() }}                                 
                        </ul>                                            
                    </div>
                </div>
                {{-- Termina seccion de Footer de la tabla --}}

              </div>
            </div>
          </div>
        </div>
          
      </div>
      </div>
    </div>
  </div>  <!-- cierra layout -->
</div>    <!-- cierra wrapper -->

@endsection


