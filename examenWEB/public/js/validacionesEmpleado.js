$().ready(function() {
	$("#registroEmpleados").validate();
	$("#registroEmpleados").validate({
		rules: {
			nombre: "required",
			apellido_paterno: "required",
			apellido_materno: {
				minlength: 2
			}
		},
		messages: {
			nombre: "Favor de ingresar tus nombres",
			apellido_paterno: "Favor de ingresar tu apellidopaterno",
			apellido_materno: "Favor de ingresar un apellido válido"
		}
	});
	//alert('hola mundo');
	
	
	
});