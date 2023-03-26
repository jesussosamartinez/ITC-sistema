

$('#ModalEdicion').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Botón que activó el modal
	var id = button.data('id') // Extraer la información de atributos de datos
	var nocontrol = button.data('no') // Extraer la información de atributos de datos
	var nombre = button.data('nombre') // Extraer la información de atributos de datos
	var actividad = button.data('actividad') // Extraer la información de atributos de datos
	var carrera = button.data('ncarrera') // Extraer la información de atributos de datos
	var departamento = button.data('departamento') // Extraer la información de atributos de datos
	var estatus = button.data('estatus') // Extraer la información de atributos de datos
	var credito = button.data('credito') // Extraer la información de atributos de datos
	
	
	var modal = $(this)
	modal.find('.modal-body #idAlumnoT').val(id)
	modal.find('.modal-body #no_control').val(nocontrol)
	modal.find('.modal-body #nombrealumno').val(nombre)
	modal.find('.modal-body #actividadcomplementaria').val(actividad)
	modal.find('.modal-body #carrera').val(carrera)
	modal.find('.modal-body #departamento').val(departamento)
	modal.find('.modal-body #estatus').val(estatus)
	modal.find('.modal-body #credito').val(credito)
	$('.alert').hide();//Oculto alert
  })

  $("#actualizardatos").submit(function( event ) {
	 event.preventDefault();
	 var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../ajax/alumnotaller.php?op=editar",
				data: parametros,
				success: function(datos){
				
				alertify.confirm(datos, function(){ 
					alertify.success('Ok')
							 });
				
			  }
		});
	 
	});

