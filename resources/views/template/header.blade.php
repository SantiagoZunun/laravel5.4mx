<!DOCTYPE html>
<head>        
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
 



  <!--[if gt IE 8]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
  <![endif]-->                
  <title>INSTE USA</title>


  
  <link rel="icon" type="image/ico" href="favicon.ico"/>
  <link href="{{asset('template/css/stylesheets.css')}}" rel="stylesheet" type="text/css" />
  <!--[if lte IE 7]>
      <script type='text/javascript' src='js/other/lte-ie7.js'></script>
  <![endif]-->    
 <script  src='{{asset('js/jquery-3.2.1.min.js')}}'></script>
  // <script type='text/javascript' src='{{asset('template/js/jquery/jquery.min.js')}}'></script>
  <script  src='{{asset('template/js/funciones.js')}}'></script>
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

  
  <script  src='{{asset('js/usuarios.js')}}'></script>
  
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
 </script>



</head>
<body>
  <div id="wrapper">
   
    @include('template.top_menu') 
    @include('template.'.Session::get('menu') )
       
    @yield('contenido')
    
    @include('template.footer')


