
  <div class="modal" id="alta_Empleados_modal" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel3">Dar de alta como Empleado </h3>
      </div>
      <form name="form3" class="form-horizontal" method="post"action="{{ route('Empleados.store') }} " enctype="multipart/form-data">
         {{ csrf_field() }}  
      <div class="modal-body">
        <div class="row">

          <div class="controls-row">
            <div class="col-md-3">Tipos Empleados</div>
            <div class="col-md-5">
              <select class="select2" style="width: 390px;"  name="emple_TipoEmpleado">
                 @foreach ($tiposempleados as $TipoEmpleado)
                   @if ($TipoEmpleado->textipem_idIdioma == Session::get('idioma'))
                     <option value="{{ $TipoEmpleado->textipem_idTipoEmpleado }}"> {{ $TipoEmpleado->textipem_idTipoEmpleado }} - {{ $TipoEmpleado->textipem_Descripcion }}</option>               
                   @endif
                @endforeach                             
              </select>
            </div>
          </div>

       
        </div>
      </div>

       <input type="hidden" class="form-control" value="{{ $usuario->id }} " name="emple_idUsuario" > 

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">cancelar</button>
        <button type="submit" class="btn btn-success" aria-hidden="true"> guardar</button>
      </div>
    </form>
  </div>
</div>
</div>


 <script>
  
  function AltaEmpleados() {
    $('#alta_Empleados_modal').modal({backdrop: 'static'});
    $('#alta_Empleados_modal').modal('show');
  }
  
</script>
  