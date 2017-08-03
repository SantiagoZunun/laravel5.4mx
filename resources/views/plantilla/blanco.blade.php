@extends('plantilla.principal')  {{-- Incluye la pagina principal --}}

{{-- Apartir de aqui agregar el contenido 
==================================================================--}}
@section('contenido')  {{-- Se llama Contenido porque en l apagina principla el @yield se llama Contenido --}}

	<div class="wrap">                    
	    <div class="head">
	        <div class="info">
	            <h1>Dashboard</h1>
	            <ul class="breadcrumb">
	                <li><a href="#">Home</a></li>
	                <li><a href="#">One more</a></li>
	                <li class="active">Dashboard</li>
	            </ul>
	        </div>
	        
	       {{--  <div class="search">
	            <form action="" method="post">
	                <input type="text" class="form-control" placeholder="search..."/>                                
	                <button type="submit"><span class="i-calendar"></span></button>
	                <button type="submit"><span class="i-magnifier"></span></button>
	            </form>
	        </div>    --}}                     
	    </div>                                                                    
	    
	    {{-- Inicio del Conteiner --}}
	    <div class="container">        

	        
	    </div> {{-- Final del Container --}}
	        
	</div>

@endsection
