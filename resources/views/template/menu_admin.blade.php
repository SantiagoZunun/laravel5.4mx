<div id="layout">
  <div id="sidebar">
    <div class="user">
        <div class="pic">
            <img src="img/examples/users/dmitry_m.jpg"/>
        </div>
        <div class="info">
            <div class="name">
                <a href="#">{{ Auth::user()->persona->per_ApellidoP }}  </a>
            </div>
            <div class="buttons">
                <a href="#"><span class="i-cog"></span> Settings</a>
                <a href="#"><span class="i-chat"></span> Messages</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="fr"><span class="i-forward"></span> Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  </form>
            </div>
        </div>
    </div>
    <ul class="navigation">
      <!-- HOME -->
      <li>
        <a href="">ADMIN</a>
      </li>
    
      <li class="openable">
          <a href="#">Usuarios</a>
          <ul>
              <li>
                  <a href="{{ route('Usuarios.create' )}} "> {{ trans('auth.NombreUsuario') }}    </a>
              </li>
              <li>
                  <a href="{{ url('Usu_ListaUsuarios' )}} "> Lista Usuarios</a>
              </li>
              <li>
                  <a href="ui_buttons.html">menu admin</a>
              </li>
              <li>
                  <a href="ui_icons.html">Icons</a>
              </li>
              <li>
                  <a href="ui_grid.html">Grid system</a>
              </li>                        
          </ul>
      </li>


      <!-- ALUMNOS -->
      
      <!-- LIDERES -->
      
      <!-- PASTORES -->
      
      <!-- USUARIOS -->
      
      <!-- IGLESIAS -->
      
       <!-- SECCION DE ALMACEN 
      ======================================================================================================-->
      
      
             <!-- SECCION DE CONTADURIA
      ======================================================================================================-->
      
      
    
      <!-- CONFIGURACIONES -->
      
      
            <!-- Reporte  -->
      <li>
        <a href="">re</a>
      </li>
      
      
    </ul>
  </div>