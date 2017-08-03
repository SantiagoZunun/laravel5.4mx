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
          <div class="row">
            <div class="col-md-12">
              <div class="block">
                <div class="head">
                  <h2> {{ $usuario->persona->per_Nombre }} {{ $usuario->persona->per_ApellidoP }}  {{ $usuario->persona->per_ApellidoM }} </h2>
                </div>
                <div class="content tabable tabable-head np">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tabGeneral" data-toggle="tab">Generea</a></li>
                  
                    <li><a href="#tabEmpleado" data-toggle="tab">Empleado</a></li>
                    <li><a href="#tabPastor" data-toggle="tab">Pastor</a></li>
                    <li><a href="#tabCoordinador" data-toggle="tab">Coordinador</a></li>
                    <li><a href="#tabLider" data-toggle="tab">lider</a></li>
                    <li><a href="#tabAlumno" data-toggle="tab">Alumno</a></li>
                    
                  
                  </ul>
                  <div class="tab-content">
                           @include('admin.usuarios.tab.tab_infousuario')
                           @include('admin.usuarios.tab.tab_empleado')
                           @include('admin.usuarios.tab.tab_pastor')
                           @include('admin.usuarios.tab.tab_lider')
                           @include('admin.usuarios.tab.tab_alumno')
                           @include('admin.usuarios.tab.tab_cordinador')
                     

                  </div>
                </div>
                <div class="footer">
                  <div class="side fr">
                    <div class="btn-group">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- cierra layout -->
</div>    <!-- cierra wrapper -->

    {{--  Incluir los modales necesarios que necesite en la seccion de usuarios --}}
@include('admin.usuarios.modales.mod_alta_alumno') 
@include('admin.usuarios.modales.mod_alta_alumnoiglesia') 
@include('admin.usuarios.modales.mod_alta_lider') 
@include('admin.usuarios.modales.mod_alta_lideriglesia') 
@include('admin.usuarios.modales.mod_alta_coordinador') 
@include('admin.usuarios.modales.mod_alta_coordinadoriglesia') 
@include('admin.usuarios.modales.mod_alta_pastor') 
@include('admin.usuarios.modales.mod_alta_pastoriglesia') 
@include('admin.usuarios.modales.mod_alta_empleado') 



@endsection


 





  