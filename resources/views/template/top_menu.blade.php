<div id="header">
  <div class="wrap">
    <a href="index.html" class="logo"></a>
    <div class="buttons fl">
      <div class="item">
        <a href="#" class="btn btn-primary btn-sm c_layout">
          <span class="i-layout-8"></span>
        </a>
      </div>
      <div class="item">
        <a href="#" class="btn btn-primary btn-sm c_screen">
          <span class="i-stretch"></span>
        </a>
      </div>
    </div>
    <div class="buttons">
      <div class="item">
        <a href="#" class="btn btn-primary btn-sm">
          <span class="i-cog"></span>
        </a>
        <div class="popup">
          <div class="head">
            <h2>Settings</h2>
          </div>
          <div class="content np">
            <div class="row">
              <div class="controls-row">
                <div class="col-md-3">Themes:</div>
                <div class="col-md-9 themes">
                  <a href="#" class="default tip" data-theme="" title="Default"></a>
                  <a href="#" class="dark tip" data-theme="themeDark" title="Dark"></a>
                  <a href="#" class="simple tip" data-theme="themeSimple" title="Simple"></a>
                  <div class="help-block">On click theme will changed and saved settings</div>
                </div>
              </div>
              <div class="controls-row">
                <div class="col-md-3">Backgrounds:</div>
                <div class="col-md-9 backgrounds">
                  <a href="#" class="default tip" data-theme="" title="Default"></a>
                  <a href="#" class="b_bcrosshatch" data-back="b_bcrosshatch"></a>
                  <a href="#" class="b_crosshatch" data-back="b_crosshatch"></a>
                  <a href="#" class="b_cube" data-back="b_cube"></a>
                  <a href="#" class="b_dots" data-back="b_dots"></a>
                  <a href="#" class="b_grid" data-back="b_grid"></a>
                  <a href="#" class="b_hline" data-back="b_hline"></a>
                  <a href="#" class="b_simple" data-back="b_simple"></a>
                  <a href="#" class="b_vline" data-back="b_vline"></a>
                  <div class="help-block">On click background will changed and saved settings</div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="side fr">
              <button class="btn btn-primary popup-close">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="btn-group">
          <a href="#" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
            <span class="i-forward"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="i-profile"></span> Profile</a></li>
            <li><a href="#"><span class="i-tools"></span> Controls</a></li>
            <li><a href="#"><span class="i-locked"></span> Lock</a></li>
            <li><a href="#"><span class="i-forward"></span> Logout</a></li>
          </ul>
        </div>
      </div>
			
			 
      <div class="item">
        <div class="btn-group">
          <a href="#" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
            <span><i class="glyphicon glyphicon-eye-open"></i></span>
          </a>
          <ul class="dropdown-menu">
            @foreach (Auth::user()->usuariovista as $vistas ) 
                @foreach ($vistas->vista->textovista as $vistass ) 
                  @if ($vistass->txtvista_idIdioma == Session::get('idioma'))
                      <li><a href="{{ route('Vistas.show',$vistass->txtvista_idVista) }}"><span></span>{{ $vistass->txtvista_Descripcion }}   </a></li>
                  @endif 
                @endforeach
            @endforeach
            
 
          </ul>
        </div>
      </div>

      <div class="item">                        
          <div class="btn-group">                        
              <a href="#" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <span class="i-forward"></span> Lenguaje
              </a>
              <ul class="dropdown-menu"> 
                  <li><a href="{{url('idioma/en')}}"><span class="i-profile"></span> Ingles</a></li>
                  <li><a href="{{url('idioma/es')}}"><span class="i-tools"></span> Espanol</a></li>                                
                  
              </ul> 
          </div>
      </div>
                    
    </div>
  </div>
</div>

