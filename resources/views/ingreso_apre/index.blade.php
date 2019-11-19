@extends('../layouts.app')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ingresa</title>
</head>
<body>
     <h1>Ingresar documento</h1>
     
<div class="form-group">
<label class="col-md-5 control-label" >documento</label> 
<div class="col-md-5 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="documento" placeholder="Documento" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label"></label>
<div class="col-md-5"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGUARDAR <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>


</body>
</html>

@endsection