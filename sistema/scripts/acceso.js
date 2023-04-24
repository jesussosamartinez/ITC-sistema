$.post("../ajax/datos.php?op=acceso", function(data, status){
    var data = JSON.parse(data);


    for (var i = 0; i < data.aaData.length; i++) {
      var $tr = '<tr><td>'+data.aaData[i].btn+'</td>  <td>'+data.aaData[i].no+'</td> <td>'+data.aaData[i].alumno+'</td> <td>'+data.aaData[i].email+'</td> <td>'+data.aaData[i].carrera+'</td> <td>'+data.aaData[i].semestre+'</td> <td>'+data.aaData[i].telefono+'</td> <td> ******** </td> </tr>'; 
      $("#tblaccesos").append($tr);
      // agrego los campos a la tabla
    }
      
    
  });

$('#ModalEdicion').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Botón que activó el modal
	var id = button.data('id') // Extraer la información de atributos de datos
	var nocontrol = button.data('no') // Extraer la información de atributos de datos
	var nombre = button.data('nombre') // Extraer la información de atributos de datos
	var email = button.data('email') // Extraer la información de atributos de datos
	var carrera = button.data('ncarrera') // Extraer la información de atributos de datos
    var telefono = button.data('telefono') // Extraer la información de atributos de datos
	var semestre = button.data('semestre') // Extraer la información de atributos de datos
	var password = button.data('password') // Extraer la información de atributos de datos
	
	var modal = $(this)
	modal.find('.modal-body #idalumno').val(id)
	modal.find('.modal-body #ncontrolu').val(nocontrol)
	modal.find('.modal-body #nombreu').val(nombre)
	modal.find('.modal-body #correou').val(email)
	modal.find('.modal-body #carrerau').val(carrera)
	modal.find('.modal-body #semestreu').val(semestre)
	modal.find('.modal-body #password').val(password)
    modal.find('.modal-body #telefono').val(telefono)
	$('.alert').hide();//Oculto alert
  })

  $("#actualizardatos").submit(function( event ) {
	 event.preventDefault();
	 
	 var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../ajax/datos.php?op=editaracceso",
				async: true,
				data: parametros,
				success: function(datos){
					
				alertify.alert('ACTUALIZACION DE DATOS',datos, function(){  
					location.reload();
							 });
							 
			  }
		});
	 
	});




	$("#añadirdatos").submit(function( event ) {
		event.preventDefault();
		var parametros = $(this).serialize();
			$.ajax({
				   type: "POST",
				   url: "../ajax/datos.php?op=accesos_alumnos",
				   data: parametros,
				   success: function(datos){
				   
				   alertify.alert('REGISTRO DE ALUMNO',datos, function(){ 
					   location.reload();
								});
				   
				 }
		   });
		
	   });
   
	
	

	
	
	  