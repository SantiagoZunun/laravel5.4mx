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
	          <form id="validate" method="POST" action="{{ route('Usuarios.store') }} " enctype="multipart/form-data">
	          	 {{ csrf_field() }}   
	            <div class="block">	                
	              <div class="head">
	                <h2> Registro de nuevo Usuario </h2>
	                <div class="side fr">	                  
	                </div>
	              </div>

	              
	              
	              <div class="content np">
	                <div class="controls-row">
	                  <div class="col-md-2"> Nombre:</div>
	                  <div class="col-md-5">
	                    <input type="text" class="validate[required] form-control" name="per_Nombre"/>
	                  </div>
	                  <div class="col-md-5">
	                    <span class="help-inline">*</span>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Apellido P</div>
	                  <div class="col-md-5">
	                    <input type="text" class="validate[required] form-control" name="per_ApellidoP"/>
	                  </div>
	                  <div class="col-md-5">
	                    <span class="help-inline">*</span>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Apellido M</div>
	                  <div class="col-md-5">
	                    <input type="text" class="form-control" name="per_ApellidoM"/>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Lugar de nacimiento</div>
	                  <div class="col-md-3">
	                    <input type="text" class="form-control" name="per_LugarNacimiento"/>
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2"> Fecha Nacimiento</div>
	                  <div class="col-md-3">
	                    <input type="date" class="form-control" name="per_FechaNacimiento" placeholder="mm-dd-yyyy" value=""/>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2 TAR"> Sexo</div>
	                  <div class="col-md-3">
	                    <label class="radio-uni inline"><input type="radio" name="per_Sexo" class="uni" value="1"/> Mujer</label>
	                    <label class="radio-uni inline"><input type="radio" name="per_Sexo" class="uni" value="2"/> Hombre</label>                                                
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2">Estado civil</div>
	                  <div class="col-md-3">
	                    <select class="select2" style="width: 220px;" name="per_EstadoCivil">
	                    	<option>1</option>
	                    	<option>2</option>
	                    
	                    
	                    </select>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Ocupacion</div>
	                  <div class="col-md-3">
	                    <input type="text" class="form-control" name="per_Ocupacion"/>
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2">Escolaridad</div>
	                  <div class="col-md-3">
	                    <select class="select2" style="width: 220px;" name="per_Escolaridad">
	                     
	                    </select>
	                  </div>
	                </div>
	              

	                <div class="controls-row">
	                  <div class="col-md-2">Idioma</div>
	                  <div class="col-md-3">
	                  	<select class="select2" style="width: 220px;" id="iglesia_alta_alumno" name="per_Idioma">
				            @foreach ($idiomas as $Idioma)
				               <option value="{{ $Idioma->idio_Id }}"> {{ $Idioma->idio_Clave }} - {{ $Idioma->idio_Idioma }}</option>
				            @endforeach                             
				        </select>
	                  </div>
	                </div>

	                <div class="controls-row">
	                  <div class="col-md-2">Telefono</div>
	                  <div class="col-md-3">                                                    
	                    <input type="text" class="mask_phone form-control validate[]" name="per_Telefono1" value=""/>
	                  </div>
	                  <div class="col-md-1">
	                    <span class="help-inline">*</span>
	                  </div>
	                  <div class="col-md-2">Telefono</div>
	                  <div class="col-md-3">                                                    
	                    <input type="text" class="mask_phone form-control" name="per_Telefono2" value=""/>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Pais</div>
	                  <div class="col-md-3">
	                    <select class="select2" style="width: 220px;" id="pais_alta" name="pais_alta"  onchange="cargarEstados()" >
	                      <option value=""></option>
	                      @foreach ($paises as $Pais)
				           <option value="{{ $Pais->pais_Id }}"> {{ $Pais->pais_Clave }} - {{ $Pais->pais_Pais }}</option>
				          @endforeach  	                   
	                    </select>
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2">Estados</div>
	                  <div class="col-md-3">
	                    <select class="select2" style="width: 220px;" id="estado_alta" name="estado_alta"  >
	                    </select>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Ciudad</div>
	                  <div class="col-md-3">
	                    <select class="select2" style="width: 220px;" id="ciudad_alta" name="ciudad_alta" >
	                    </select>
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2">Codigo Postal</div>
	                  <div class="col-md-3">
	                    <input type="text" class="form-control" name="cp_alta"/>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Direccion</div>
	                  <div class="col-md-5">
	                    <input type="text" class="validate[] form-control" name="direccion_alta"/>
	                  </div>
	                  <div class="col-md-5">
	                    <span class="help-inline">*</span>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Num Exterior:</div>
	                  <div class="col-md-3">
	                    <input type="text" class="form-control" name="nExterior_alta"/>
	                  </div>
	                  <div class="col-md-1">
	                  </div>
	                  <div class="col-md-2">Num Interior</div>
	                  <div class="col-md-3">
	                    <input type="text" class="form-control" name="nInterior_alta"/>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Correo</div>
	                  <div class="col-md-3">
	                    <input type="text" class="validate[required] form-control" name="email"/>
	                  </div>
	                  <div class="col-md-1">
	                    <span class="help-inline">*</span>
	                  </div>
	                </div>
	                <div class="controls-row">
	                  <div class="col-md-2">Contraseñ</div>
	                  <div class="col-md-3">
	                    <input type="password" class="validate[required,minSize[8]] form-control" name="password" id="password"/>
	                  </div>
	                  <div class="col-md-1">
	                    <span class="help-inline">*</span>
	                  </div>
	                  <div class="col-md-2">Confirmra</div>
	                  <div class="col-md-3">                                                    
	                    <input type="password" class="validate[required,equals[password]] form-control" name="password_confirmation" id="password2_alta"/>
	                  </div>
	                  <div class="col-md-1">                                                    
	                    <span class="help-inline">*</span>
	                  </div>
	                </div>                    
	                <div class="controls-row">
	                  <div class="col-md-2">Foto</div>
	                  <div class="col-md-5">
	                    <input type="file" class="uni" name="foto_alta" id="foto_alta"/>
	                  </div>
	                </div>
	              </div>
	              <div class="footer ">
	                <div class="side fr">
	                  <div class="btn-group ">
	                   
	                    <button class="btn btn-primary" type="submit">Guardar Informacion</button>
	                  </div>
	                </div>
	              </div>

	              <abbr></abbr>

	             
	            </div>
	          </form>
	        </div>
	       

	      </div>
	    </div>
      </div>
    </div>
  </div>  <!-- cierra layout -->
</div>    <!-- cierra wrapper -->

@endsection



<script type="text/javascript">


  
  function cargarEstados(){

    var idPais = document.getElementById('pais_alta').value;
        
    // Consultar estados
    $.ajax({
      type: 'get',
      url: '{!!URL::to('estados')!!}',
      data: {'id':idPais},

      success: function (data){   

      console.log(data);

        var estados = JSON.parse(data);

        var sEstados = document.getElementById('estado_alta'); 
        sEstados.innerHTML = '';

        var option1 = document.createElement('OPTION');
        sEstados.appendChild(option1);

        for(var i=0; i<estados.length; i++){
            var option = document.createElement('OPTION');
            option.innerHTML = estados[i]['estado_Estado'];
            option.value = estados[i]['estado_Id'];
            sEstados.appendChild(option);
        }	        
      }
    });
  }



</script>


