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
                  <h2>Block title</h2>
                </div>
                <div class="content">
                  Content  {{ Session::get('menu')}}
                </div>
                <div class="footer">
                  <div class="side fl">
                    Footer
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

@endsection