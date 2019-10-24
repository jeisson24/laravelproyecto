<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Styles Laravel Mix -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
  </head>
  <body style="background-image: url('{{ url('img/bg_login.jpg') }}');width:100%;height:100%;background-size:cover;background-repeat:no-repeat;min-height:100%;background-attachment: fixed;    " >
    <br>
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                 
                <div class="card-body">
                <h1>Cur505</h1>
                <p>Aprendizaje para todo el mundo a un bajo costo.</p>
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="">{{ __('Correo Electronico') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                        </div>


                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                                <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- scripts Laravel Mix -->
      <script src="{{ url('js/app.js') }}"></script>
  </body>
</html>