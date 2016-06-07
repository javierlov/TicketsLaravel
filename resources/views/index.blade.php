<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tickets</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<style>
		body{margin-top: 60px;}
	</style>
  </head>

  <body>

    <div class="container" >
        
        <div class="header clearfix">
            <h3 class="text-muted">Morgan</h3>
        </div>

     
    <form class="form-signin" method='POST' action="{{ route(login) }}"  >
        <div class="container">
        <h2 class="form-signin-heading">Log in</h2>
        
@include('partials\errors')
{!! csrf_field() !!}

        <label for="username" >Usuario</label>
        <input type="text" id="username" name="username" class="form-control" value='{{ old('username') }}' placeholder="Usuario" autofocus>
        <p></p>
        
        <label for="email" >Email</label>
        <input type="email" id="email" name="email" class="form-control" value='{{ old('email') }}' placeholder="Email" >
        <p></p>
        
        <label for="password" >Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
        <p></p>
        
        <label for="sexo" >Sexo</label>
        <input type="text" id="password" name="sexo" class="form-control"  value='{{ old('sexo') }}' placeholder="sexo" >
        <p></p>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">{{ trans('translation.rememberme') }} 
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div> <!-- /container -->
     </form>

    

<!--
        
        <div class="jumbotron" >        
            @include('partials\errors')
            {{ Form::open(array('url' => 'log', 'method'=>'POST')) }}
            {{ Form::label('username', 'Usuario' , array('class' => 'label')) }}
            {{ Form::text('username','', array('class' => 'form-control')) }}
            <p></p>
            {{ Form::label('email', 'E-Mail') }}
            {{ Form::text('email', 'example@gmail.com') }}
            <p></p>
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
            <p></p>

            <p></p>
            <button name="aceptra" class="btn btn-group">Aceptar</button>
            {{ Form::close() }}

            <hr>      
        </div>
               <footer class="footer">
                    <p>&copy; 2016 Cisco, Inc.</p>
              </footer>
    </div>
-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>
