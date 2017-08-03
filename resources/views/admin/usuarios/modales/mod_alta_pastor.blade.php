
  <div class="modal" id="alta_Pastor_modal" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel3">Dar de alta como Pastor</h3>
      </div>
      <form name="form3" class="form-horizontal" method="post"action="{{ route('Pastores.store') }} " enctype="multipart/form-data">
         {{ csrf_field() }}  
      <div class="modal-body">
        <div class="row">
          <div class="controls-row">
            <div class="col-md-3">Iglesias</div>
            <div class="col-md-5">
              <select class="select2" style="width: 390px;" id="iglesia_alta_alumno" name="pas_idIglesia">
                 @foreach ($iglesias as $Iglesia)
                   <option value="{{ $Iglesia->igle_Id }}"> {{ $Iglesia->igle_Id }} - {{ $Iglesia->igle_Nombre }}</option>
                 @endforeach                             
              </select>
            </div>
          </div>
          <div class="controls-row">
            <div class="col-md-3">Fecha Inscripcion</div>
            <div class="col-md-5">
              <input type="date" class="form-control"  name="pas_FechaInscripcion" placeholder="<?= date('m-d-Y')?>" value="" required/>
            </div>
          </div>
        </div>
      </div>

       <input type="hidden" class="form-control" value="{{ $usuario->id }} " name="pas_idUsaurio" > 

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">cancelar</button>
        <button type="submit" class="btn btn-success" aria-hidden="true"> guardar</button>
      </div>
    </form>
  </div>
</div>
</div>


 <script>
  
  function AltaPastor() {
    $('#alta_Pastor_modal').modal({backdrop: 'static'});
    $('#alta_Pastor_modal').modal('show');
  }
  
</script>
  