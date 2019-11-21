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
				</div>
			</div>
<hr>
     		<div class="container">
     		    <div class="row">
					<div class="col-md-3">
							     		<div class="form-group">
							    <label for="exampleFormControlSelect1">Seleccionar</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>HP</option>
							      <option>ASUS</option>
							      
							    </select>
							  		</div>
		     		</div>
		     		 <table class="table table-hover table-sm">
		     		 	<thead>
                             <tr class="bg-secondary">
                                 <th>ID</th>
                                 <th>SERIAL</th>
                                 <th>TIPO</th>
                                 <th>COLOR</th>
                                 <th>HORA INGRESO</th>
                             </tr>
                         </thead>
                         <tbody>
                             <th>121</th>
                                 <th>ASA151</th>
                                 <th>PORTATIL</th>
                                 <th>VERDE</th>
                                 <th>17:00</th>
                         </tbody>
                     </table>

                     <button type="submit" class="btn btn-warning" >ACEPTAR <span class="glyphicon glyphicon-send"></span></button>
				</div>
     </div>

     <hr>

<div class="form-group">
	<h1>SALIDA DE EQUIPO</h1>
	<br>
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
				<button type="submit" class="btn btn-warning" onclick="alert('byyyyyyy')">SALIR<span class="glyphicon glyphicon-send"></span></button>
				</div>
			</div>





     </div>
    





</body>
</html>

@endsection