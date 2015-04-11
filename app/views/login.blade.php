<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Authenticate with Laravel 4.2</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  {{ HTML::style('assets/css/signin.css') }}
</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'form-signin', 'role' => 'form']) }}

      @if(Session::has('error_message'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('error_message') }}
      </div>
      @endif

      <h2 class="form-signin-heading">Log in</h2>

      {{ Form::label('email', 'email', ['class' => 'sr-only']) }}
      {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => '']) }}

      {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
      {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

      <div class="checkbox">
        <label>
          {{ Form::checkbox('remember', true) }} Remember me
        </label>
      </div>

      {{ Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) }}

      {{ Form::close() }}
      <a class="btn btn-success" href="{{ action('AuthController@registerUser') }}">Create User</a>
      <a class="btn btn-success" href="{{ action('UserController@showPassRecovery') }}">Forget Password?</a>
    </div>


    <!-- jdjdhdhdhdhdhdhd -->
    <div class="col-md-4 col-md-offset-4">
      
      {{ Form::open(['url' => 'buy', 'method' => 'POST', 'role' => 'form']) }}

      {{ Form::text('Empresa', null, ['class' => 'form-control', 'placeholder' => 'Empresa', 'autofocus' => '']) }}
      {{ Form::number('pIndice', null, ['class' => 'form-control', 'placeholder' => 'Precio indice', 'autofocus' => '']) }}


      {{ Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) }}

      {{ Form::close() }}
    </div>
    <!--hola jajajajajajaja-->

  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
