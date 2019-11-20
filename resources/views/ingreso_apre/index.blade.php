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
     <div class="container-fluid">
     	
     		<div class="form-group">
				<label class="col-md-5 control-label" >INGRESA DOCUMENTO</label> 
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
				<button type="submit" class="btn btn-warning" >INGRESAR <span class="glyphicon glyphicon-send"></span></button>
				</div></div>

     		<div class="container">
     		    <div class="row">
					<div class="col-md-5">
							     		<div class="form-group">
							    <label for="exampleFormControlSelect1">Equipo a Seleccionar</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>HP</option>
							      <option>ASUS</option>
							      
							    </select>
							  		</div>
		     		</div>
     	
				</div>
     </div>




     </div>
    





</body>
</html>

@endsection