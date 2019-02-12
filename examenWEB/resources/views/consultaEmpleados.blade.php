<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Prueba de evaluación</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/registroEmpleados.css">
	  <meta name="csrf-token" content="{{ csrf_token() }}" >
	  
	</head>
	<body>
		<!-- Para el menu --> 
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
			  <a class="navbar-brand" href="#">Prueba de evaluación B@UNAM</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li ><a href="registro">Registro de empleado</a></li>
				<li class="active"><a href="consultaEmpleado">Consulta empleado</a></li> 
			  </ul>
			</div>
		  </div>
		</nav>
		
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="container">
			<h3>Consulta de datos de los  empleados</h3>
			<form class="form-horizontal" method="" id="registroEmpleados" action="">
				<div class="form-group has-feedback inputTextoEmpleado">
					<label class="control-label col-sm-2 " for="empleado_id">Buscar empleado:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control " id="empleado_id" placeholder="Ingrese el identificador de empleado" name="empleado_id">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
					</div>
				</div>
				
				
				<!--<input type="hidden" name="_method" value="PUT" >-->
				<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Buscar</button>
						<button id="listaEmpleados" type="" class="btn btn-default">Mostrar lista de empleados</button>

					</div>
				</div>
			</form>
			
			<div class='contenido'>Hola</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="jqueryValidation/lib/jquery.js"></script>
		<script src="jqueryValidation/dist/jquery.validate.min.js"></script>
		<script src="jqueryValidation/dist/additional-methods.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<script>
			
			
		</script>
	</body>
</html>