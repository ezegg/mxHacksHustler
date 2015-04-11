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
    {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form']) }}

      {{ Form::label('nombre', 'nombre', ['class' => 'sr-only']) }}
      {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre', 'autofocus' => '']) }}


      {{ Form::label('email', 'email', ['class' => 'sr-only']) }}
      {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email', 'autofocus' => '']) }}


      {{ Form::label('saldoTotal', 'saldoTotal', ['class' => 'sr-only']) }}
      {{ Form::text('saldoTotal', null, ['class' => 'form-control', 'placeholder' => 'saldoTotal', 'autofocus' => '']) }}

      {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
      {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

      <p>
        <input type="submit" value="Register" class="btn btn-success">
      </p>
    {{ Form::close() }}
    </div>
  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
