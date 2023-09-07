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
 
	   window.addEventListener('DOMContentLoaded', () => {
		const search = document.querySelector("#search")
		const tableContainer = document.querySelector("#tbllistado tbody")
		const resultContainer = document.querySelector("#listadoregistros");
		const errorsContainer = document.querySelector(".errors-container");
	  
		let searchs = ''
	  
		if(search){
		  search.addEventListener('input', event => {
			searchs = event.target.value.toUpperCase()
			showResults() 
		  })
		}
	  
		//enviar la peticion usando fetch
		const searchData = async () => {
		  let searchData = new FormData()
		  searchData.append('searchs', searchs)
	  
		  try {
			const response = await fetch('../ajax/datos.php?op=buscar',{
			  method: 'POST',
			  body: searchData
			})
	  
			return response.json()
		  } catch (error) {
			alert(`${'Hubo un error al procesar la solicitud en este momento: '}${error.message}`)
			console.log(error)
		  }
	  
		}
	  
		//Funcion para mostrar los datos despues de la busqueda
	  
		 const showResults = () => {
		  searchData()
		  .then(dataResults => {
			console.log(dataResults)
			tableContainer.innerHTML = ''
			if(typeof dataResults.data !== 'undefined' && !dataResults.data){
			  errorsContainer.style.display = 'block'
			  errorsContainer.querySelector('p').innerHTML = `No hay resultados para el criterio búsqueda: <span class="bold">${searchs}</span>`
			  resultContainer.style.display = 'none';
			}else{
			  resultContainer.style.display = 'block'
			  errorsContainer.style.display = 'none'
			  for(const alumnos of dataResults){
				const row = document.createElement('tr')
				row.innerHTML = `
				<td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEdicion" data-id="${alumnos.idAlumno}" data-nombre="${alumnos.ApellidoP}" "${alumnos.ApellidoM}" "${alumnos.Nombre}" data-no="${alumnos.NumeroControl}" data-ncarrera="${alumnos.ClaveCarrera}" data-email="${alumnos.Correo}" data-semestre="${alumnos.Semestre}" data-password="${alumnos.Password}" data-telefono="${alumnos.Telefono}"><i class="fa fa-pencil"></i></button></td>
				<td>${alumnos.NumeroControl.toUpperCase().replace(searchs, '<span class="bold">$&</span>')}</td>
				<td>${alumnos.ApellidoP+" "+alumnos.ApellidoM+" "+alumnos.Nombre}</td>
				<td>${alumnos.Correo}</td>
				<td>${alumnos.ClaveCarrera}</td>
				<td>${alumnos.Semestre}</td>
				<td>${alumnos.Telefono}</td>
				<td>*********</td>`
	  
				tableContainer.appendChild(row)
			  }
			 
			}
		  })
		}
	  
	  })
	
	
	
	  