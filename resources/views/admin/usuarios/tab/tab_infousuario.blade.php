

<div class="tab-pane active" id="tabGeneral">

    <div class="row">
         
              <form id="validate" method="POST" action="{{ route('Usuarios.store') }} " enctype="multipart/form-data">
                 {{ csrf_field() }}   
                <div class="block">                 
                  {{-- <div class="head">
                    <h2> Registro de nuevo Usuario </h2>
                    <div class="side fr">                     
                    </div>
                  </div> --}}

                  
                  
                  <div class="content np">

                    <div class="col-md-6">
                        <div class="controls-row">
                          <div class="col-md-4"> Nombre:</div>
                          <div class="col-md-7">
                            <input type="text" class="validate[required] form-control" name="per_Nombre" value="{{ $usuario->persona->per_Nombre }}" />
                          </div>
                          
                        </div>

                        <div class="controls-row">
                          <div class="col-md-4">Apellido P</div>
                          <div class="col-md-7">
                            <input type="text" class="validate[required] form-control" name="per_ApellidoP" value="{{ $usuario->persona->per_ApellidoP }}"/>
                          </div>
                          
                        </div>
                        <div class="controls-row">
                          <div class="col-md-4">Apellido M</div>
                          <div class="col-md-7">
                            <input type="text" class="form-control" name="per_ApellidoM" value="{{ $usuario->persona->per_ApellidoM }}"/>
                          </div>
                        </div>
                    </div>
                  <div class="col-md-6">
                    <div class="controls-row">
                      <div class="col-md-12" align="center">
                        <img src="{{ $usuario->email }}" class="img-thumbnail" style="margin-bottom: 5px; width: 120px; height: 120px;"/>
                      </div>
                    </div>
                  </div>


                 {{--  este div es para agregar la secuencia de los colores en la vista de cada renglon --}}   
                 <div class="col-md-12">
                    <div class="controls-row" style="display: none;">
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <input type="text" class="uni"/>
                      </div>
                    </div>
                </div>    


                    
                   
                    <div class="controls-row">
                      <div class="col-md-2">Lugar de nacimiento</div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="per_LugarNacimiento" value="{{ $usuario->persona->per_LugarNacimiento }}" />
                      </div>
                      <div class="col-md-1">
                      </div>
                      <div class="col-md-2"> Fecha Nacimiento</div>
                      <div class="col-md-3">
                        <input type="date" class="form-control" name="per_FechaNacimiento" placeholder="mm-dd-yyyy" value="{{ $usuario->email }}"/>
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
                        <select class="select2" style="width: 220px;" name="per_EstadoCivil" value="{{ $usuario->email }}">
                            <option>1</option>
                            <option>2</option>
                        
                        
                        </select>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Ocupacion</div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="per_Ocupacion" value="{{ $usuario->persona->per_Ocupacion }}" />
                      </div>
                      <div class="col-md-1">
                      </div>
                      <div class="col-md-2">Escolaridad</div>
                      <div class="col-md-3">
                        <select class="select2" style="width: 220px;" name="per_Escolaridad" value="{{ $usuario->persona->per_Escolaridad }}" >
                         
                        </select>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Idioma</div>
                      <div class="col-md-3">
                        <select class="select2" style="width: 220px;" name="per_Idioma" >
                      
                        </select>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Telefono</div>
                      <div class="col-md-3">                                                    
                        <input type="text" class="mask_phone form-control validate[]" name="per_Telefono1" value="{{ $usuario->persona->per_Telefono1 }}" />
                      </div>
                      <div class="col-md-1">
                        <span class="help-inline">*</span>
                      </div>
                      <div class="col-md-2">Telefono</div>
                      <div class="col-md-3">                                                    
                        <input type="text" class="mask_phone form-control" name="per_Telefono2" value="{{ $usuario->email }}" />
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Pais</div>
                      <div class="col-md-3">
                        <select class="select2" style="width: 220px;" id="pais_alta" name="pais_alta" onchange="cargarEstados()" >
                          <option value=""></option>
                       
                        </select>
                      </div>
                      <div class="col-md-1">
                      </div>
                      <div class="col-md-2">Estados</div>
                      <div class="col-md-3">
                        <select class="select2" style="width: 220px;" id="estado_alta" name="estado_alta" onchange="cargarCiudades()" >
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
                        <input type="text" class="form-control" name="cp_alta" value="{{ $usuario->email }}"/>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Direccion</div>
                      <div class="col-md-5">
                        <input type="text" class="validate[] form-control" name="direccion_alta" value="{{ $usuario->email }}" />
                      </div>
                      <div class="col-md-5">
                        <span class="help-inline">*</span>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Num Exterior:</div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="nExterior_alta" value="{{ $usuario->email }}" />
                      </div>
                      <div class="col-md-1">
                      </div>
                      <div class="col-md-2">Num Interior</div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="nInterior_alta" value="{{ $usuario->email }}" />
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Correo</div>
                      <div class="col-md-3">
                        <input type="text" class="validate[required] form-control" name="email" value="{{ $usuario->email }}" />
                      </div>
                      <div class="col-md-1">
                        <span class="help-inline">*</span>
                      </div>
                    </div>
                    <div class="controls-row">
                      <div class="col-md-2">Contraseñ</div>
                      <div class="col-md-3">
                        <input type="password" class="validate[required,minSize[8]] form-control" name="password" id="password" value="{{ $usuario->email }}" />
                      </div>
                      <div class="col-md-1">
                        <span class="help-inline">*</span>
                      </div>
                      <div class="col-md-2">Confirmra</div>
                      <div class="col-md-3">                                                    
                        <input type="password" class="validate[required,equals[password]] form-control" name="password_confirmation" value="{{ $usuario->email }}"  id="password2_alta"/>
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
