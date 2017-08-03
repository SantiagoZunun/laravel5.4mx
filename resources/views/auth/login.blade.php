<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Login - Leo - Premium Admin Template</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="{{asset('template/css/stylesheets.css')}}" rel="stylesheet" type="text/css" />
    
    <!--[if lte IE 7]>
        <script type='text/javascript' src='js/other/lte-ie7.js'></script>
    <![endif]-->    
    
    <script type='text/javascript' src='{{asset('template/js/jquery/jquery.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/jquery/jquery-ui-1.10.3.custom.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/jquery/jquery-migrate.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/jquery/globalize.js')}}'></script>
    
    <script type='text/javascript' src='{{asset('template/js/bootstrap/bootstrap.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('template/js/cookies/jquery.cookies.2.2.0.min.js')}}'></script>
    
    <script type='text/javascript' src='{{asset('template/js/scrollup/jquery.scrollUp.min.js')}}'></script>
    
    <script type='text/javascript' src='{{asset('template/js/plugins.js')}}'></script>    
    <script type='text/javascript' src='{{asset('template/js/actions.js')}}'></script>
</head>
<body>        
    <div id="wrapper" class="screen_wide sidebar_off">       
        <div id="layout">
            <div id="content">                        
                <div class="wrap nm">            
                    
                    <div class="signin_block">
                        <div class="row">
                            {{-- <div class="alert alert-info">
                                <strong>Howdy!</strong> Please, don't tell anyone your password
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div> --}}
                            <div class="block">
                                <div class="head">
                                    <h2>Sign in</h2>                                    
                                    <ul class="buttons">                                        
                                        <li><a href="#" class="tip" title="Contact administrator"><i class="i-warning"></i></a></li>
                                        <li><a href="{{ route('password.request') }}" class="tip" title="Forget your password?"><i class="i-locked"></i></a></li>
                                    </ul>                                     
                                </div>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                 {{ csrf_field() }}

                                <div class="content np">
                                    <div class="controls-row{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-3">Login:</div>                                        
                                        <div class="col-md-9">
                                            {{-- <input type="text" name="login" class="form-control" value="root"/> --}}
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                             @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                    </div>

                                    <div class="controls-row{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-3">Password:</div>
                                        <div class="col-md-9">
                                            <input id="password" type="password" class="form-control" name="password" required>                                            
                                             @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>     

                                </div>
                                <div class="footer">
                                    <div class="side fl">
                                        <label class="checkbox">
                                            <input type="checkbox" name="kmsi"/> Keep me signed in
                                        </label>
                                    </div>
                                    <div class="side fr">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>               
        
    </div>
    
</body>
</html>
