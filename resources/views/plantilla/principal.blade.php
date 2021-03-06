<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Leo - Premium Admin Template</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="{{asset('template/css/stylesheets.css')}}" rel="stylesheet" type="text/css" />        
    
    <!--[if lte IE 7]>        
        <script type='text/javascript' src='js/other/lte-ie7.js'></script>
    <![endif]-->    
   
    <script type='text/javascript' src='{{asset('template/js/jquery/jquery.min.js')}}'></script>
    <script  src="{{asset('template/js/funciones.js')}}"></script>   

    <script type='text/javascript' src='{{asset('template/js/jquery/jquery-ui-1.10.3.custom.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/jquery/jquery-migrate.min.js')}}'></script>  
    <script type='text/javascript' src='{{asset('template/js/jquery/globalize.js')}}'></script>
     <script type='text/javascript' src='{{asset('template/js/bootstrap/bootstrap.min.js')}}'></script>  
    <script type='text/javascript' src='{{asset('template/js/cookies/jquery.cookies.2.2.0.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/datatables/jquery.dataTables.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/validationengine/languages/jquery.validationEngine-en.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/validationengine/jquery.validationEngine.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/maskedinput/jquery.maskedinput.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/select2/select2.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/uniform/jquery.uniform.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/tagsinput/jquery.tagsinput.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/multiselect/jquery.multi-select.js')}}'></script>    
    <script type='text/javascript' src='{{asset('template/js/ibutton/jquery.ibutton.min.js')}}'></script>    
    <script type='text/javascript' src='{{asset('template/js/colorpicker/colorpicker.js')}}'></script>    
    <script type='text/javascript' src='{{asset('template/js/timepicker/jquery-ui-timepicker-addon.js')}}'></script> 
    <script type='text/javascript' src='{{asset('template/js/scrollup/jquery.scrollUp.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/stepy/jquery.stepy.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/plugins.js')}}'></script>    
    <script type='text/javascript' src='{{asset('template/js/actions.js')}}'></script>
    


</head>
<body>    
    
    <div id="wrapper">
        
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
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="i-chat"></span>
                        </a>
                        <div class="popup">
                            <div class="head">
                                <h2>Messages</h2>
                            </div>
                            <div class="content npb messages minify" id="messages"></div>
                            <div class="footer">
                                <div class="side fl">
                                    <button class="btn btn-link">Show all</button>
                                </div>
                                <div class="side fr">
                                    <button class="btn btn-primary popup-close">Close</button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="item">                        
                        <div class="btn-group">                        
                            <a href="#" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="i-forward"></span> Acceso
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
        
        <div id="layout">
        
            <div id="sidebar">

                <div class="user">
                    <div class="pic">
                        <img src="img/examples/users/dmitry_m.jpg"/>
                    </div>
                    <div class="info">
                        <div class="name">
                            <a href="#">John Doe</a>
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
                    <li class="active">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="openable">
                        <a href="#">Usuarios</a>
                        <ul>
                            <li>
                                <a href="{{ route('Usuarios.create' )}} ">  {{ trans('auth.NombreUsuario') }}  </a>
                            </li>
                            <li>
                                <a href="{{ url('Usu_ListaUsuarios' )}} ">Lista Usuarios</a>
                            </li>
                            <li>
                                <a href="ui_buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui_icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui_grid.html">Grid system</a>
                            </li>                        
                        </ul>
                    </li> 
                    <li class="openable">
                        <a href="#">Form Stuff</a>
                        <ul>
                            <li>
                                <a href="form_elements.html">Form elements</a>
                            </li>                            
                            <li>
                                <a href="form_validation.html">Form validation</a>
                            </li>                                                        
                            <li>
                                <a href="form_wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="form_wysiwyg.html">WYSIWYG</a>
                            </li>
                            <li>
                                <a href="form_code_editor.html">Code editor</a>
                            </li>
                        </ul>                        
                    </li>                
                    <li>
                        <a href="messages.html">Messages</a>
                    </li>                                
                    <li>
                        <a href="charts.html">Charts</a>
                    </li>                                   
                    <li class="openable">                        
                        <a href="tables.html">Tables</a>
                        <ul>
                            <li>
                                <a href="tables_default.html">Default tables</a>
                            </li>
                            <li>
                                <a href="tables_sort.html">Sorting tables</a>
                            </li>
                            <li>
                                <a href="tables_edit.html">Editable tables</a>
                            </li>
                        </ul>
                    </li>                 
                    <li>
                        <a href="typography.html">Typography</a>                       
                    </li>                
                    <li>
                        <a href="files.html">File handling</a>                       
                    </li>
                    <li>
                        <a href="calendar.html">Calendar</a>                       
                    </li>                    
                    <li class="openable">
                        <a href="#">Maps</a>
                        <ul>
                            <li>
                                <a href="maps_vector.html">Vector maps</a>
                            </li>
                            <li>
                                <a href="maps_google.html">Google maps</a>
                            </li>                            
                        </ul>
                    </li>                    
                    <li class="openable">
                        <a href="#">Sample Pages</a>
                        <ul>
                            <li>
                                <a href="sample_login.html">Login</a>
                            </li>     
                            <li>
                                <a href="sample_user_edit.html">User edit</a>
                            </li>      
                            <li>
                                <a href="sample_search.html">Search result</a>
                            </li>      
                            <li>
                                <a href="sample_faq.html">FAQ</a>
                            </li>                   
                            <li>
                                <a href="sample_mailbox.html">Mailbox</a>
                            </li>
                            <li>
                                <a href="sample_invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="sample_gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="sample_blank.html">Blank page</a>
                            </li>
                            <li>
                                <a href="sample_price.html">Pricing table</a>
                            </li>
                            <li>
                                <a href="sample_payment.html">Payment table</a>
                            </li>                            
                            <li class="openable">
                                <a href="#">Error pages</a>
                                <ul>
                                    <li><a href="sample_error_403.html">Error 403 forbidden</a></li>
                                    <li><a href="sample_error_404.html">Error 404 not found</a></li>
                                    <li><a href="sample_error_503.html">Error 503 service unavailable</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    <li class="openable">
                        <a href="#" class="icon"><span class="i-star text-info"></span>Navigation samples<span class="label label-danger fr">+6</span></a>
                        <ul>
                            <li><a href="#" class="icon"><span class="i-battery text-danger"></span>Second level<span class="label label-info fr">$35,224</span></a></li>                            
                            <li class="openable">
                                <a href="#" class="icon"><span class="i-cart text-success"></span>Second level<span class="label label-danger fr">+3</span></a>
                                <ul>
                                    <li><a href="#" class="icon"><span class="i-film"></span>Third level<span class="label label-info fr">3</span><span class="label label-success fr">2</span><span class="label fr">1</span></a></li>
                                    <li class="active"><a href="#" class="icon"><span class="i-cube text-info"></span>Active third level<span class="label label-info fr">3</span><span class="label label-info fr">2</span><span class="label label-info fr">1</span></a></li>
                                    <li><a href="#" class="icon"><span class="i-info"></span>Third level<span class="label label-warning fr">3</span><span class="label label-danger fr">2</span><span class="label fr">1</span></a></li>
                                </ul>
                            </li>                            
                            <li><a href="#" class="icon"><span class="i-box text-warning"></span>Second level<span class="label label-success fr">$1989.02</span></a></li>
                        </ul>
                    </li>                    
                </ul>

            </div>

            <div id="content">                        
                 @yield('contenido')
            </div>
            
        </div>

    </div>
    


    
</body>
</html>
