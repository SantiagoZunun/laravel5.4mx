
  <div class="modal" id="coordinador_iglesia_modal" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel3">Asiganarlo a otra Iglesia como Coordinador</h3>
      </div>
      <form name="form3" class="form-horizontal" method="post"action="{{ route('CoordinadoresIglesias.store') }} " enctype="multipart/form-data">
         {{ csrf_field() }}  
      <div class="modal-body">
        <div class="row">
          <div class="controls-row">
            <div class="col-md-3">Iglesias</div>
            <div class="col-md-5">
              <select class="select2" style="width: 390px;"  name="cordigle_idIglesia">
                 @foreach ($iglesias as $Iglesia)
                   <option value="{{ $Iglesia->igle_Id }}"> {{ $Iglesia->igle_Id }} - {{ $Iglesia->igle_Nombre }}</option>
                 @endforeach                             
              </select>
            </div>
          </div>
        
        </div>
      </div>       

       @if (!empty($usuario->coordinador))
         <input type="hidden" class="form-control" value="{{ $usuario->coordinador->cord_Id }}" name="cordgle_idCoordinador" > 
       @endif

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">cancelar</button>
        <button type="submit" class="btn btn-success" aria-hidden="true"> guardar</button>
      </div>
    </form>
  </div>
</div>
</div>


 <script>
  
  function AsignarCoordinadorIglesias() {
    $('#coordinador_iglesia_modal').modal({backdrop: 'static'});
    $('#coordinador_iglesia_modal').modal('show');   
  }
  
</script>
  