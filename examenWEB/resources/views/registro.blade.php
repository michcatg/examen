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
				<li class="active"><a href="registro">Registro de empleado</a></li>
				<li><a href="consultaEmpleado">Consulta empleado</a></li> 
			  </ul>
			</div>
		  </div>
		</nav>
		
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="container">
			<h3>Registro de empleados</h3>
			<form class="form-horizontal" method="post" id="registroEmpleados" action="{{url('api/empleados')}}">
				<div class="form-group has-feedback inputTextoEmpleado">
					<label class="control-label col-sm-2 " for="nombre">Nombre:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control " id="nombre" placeholder="Ingrese sus nombres" name="nombre">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
					</div>
				</div>
				<div class="form-group has-feedback inputTextoEmpleado">
					<label class="control-label col-sm-2" for="apellido_paterno">Apellido Paterno:</label>
					<div class="col-sm-10"> 
						<input type="text" class="form-control inputTextoEmpleado" id="apellido_paterno" placeholder="Ingrese su apellido paterno" name="apellido_paterno">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
					</div>
				</div>
				<div class="form-group has-feedback inputTextoEmpleado">
					<label class="control-label col-sm-2 " for="apellido_materno">Apellido Materno:</label>
					<div class="col-sm-10"> 
						<input type="text" class="form-control inputEmpleado" id="apellido_materno" placeholder="Ingrese su apellido materno" name="apellido_materno">
					</div>
				</div>
				<div class="form-group has-feedback">
					<label class="control-label col-sm-2" for="fecha_nacimiento">Fecha de nacimiento:</label>
					<div class="col-sm-10"> 
						<input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento">
					</div>
				</div>
				<div class="form-group has-feedback">
					<label class="control-label col-sm-2" for="ingresos_anuales">Ingresos anuales:</label>
					<div class="col-sm-10"> 
						<input type="text" class="form-control" id="ingresos_anuales" placeholder="Ingrese ingresos anuales" name="ingresos_anuales">
					</div>
				</div>
				<!--<input type="hidden" name="_method" value="PUT" >-->
				<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="jqueryValidation/lib/jquery.js"></script>
		<script src="jqueryValidation/dist/jquery.validate.min.js"></script>
		<script src="jqueryValidation/dist/additional-methods.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script src="js/validacionesEmpleado.js"></script>
		<script>
			$.ajaxSetup({
			  headers: {
				  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});

			$('#registroEmpleados').on('submit', function (e) 
			{
			  e.preventDefault();
			  
			  var form = $(this);  

			  $.ajax({
					url       : {{ route('empleados.store') }},
					type    : 'POST' ,
					data    : form.serialize(),
					success : function( msn )
					{
					   alert (msn);
					}
				  }); 

			});//end onClick
		</script>
	</body>
</html>