$('#ModalEvaluacion').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Botón que activó el modal
	var id = button.data('id') // Extraer la información de atributos de datos
	var nombre = button.data('nombre') // Extraer la información de atributos de datos
	var actividad = button.data('actividad') // Extraer la información de atributos de datos
	var periodo = button.data('periodo') // Extraer la información de atributos de datos
	var valorn = button.data('valorn') // Extraer la información de atributos de datos
	var desempeño = button.data('desempeño') // Extraer la información de atributos de datos
	var credito = button.data('credito') // Extraer la información de atributos de datos

    
	
	
	var modal = $(this)
	modal.find('.modal-body #idAlumnoT').val(id)
	modal.find('.modal-body #nombrealumno').val(nombre)
	modal.find('.modal-body #actividadcomplementaria').val(actividad)
	modal.find('.modal-body #periodo').val(periodo)
	modal.find('.modal-body #valor_numerico').val(valorn)
	modal.find('.modal-body #desempeno').val(desempeño)
	modal.find('.modal-body #credito').val(credito)
	$('.alert').hide();//Oculto alert


  })

  $("#evaluacion").submit(function( event ) {
	 event.preventDefault();
	 var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../ajax/alumnotaller.php?op=editarcon",
				data: parametros,
				success: function(datos){
				
				alertify.confirm(datos, function(){ 
					location.reload();
							 });
				
			  }
		});
	 
	});

	window.addEventListener('DOMContentLoaded', () => {
		const search = document.querySelector("#search")
		const tableContainer = document.querySelector("#tableContainer tbody")
		const resultContainer = document.querySelector("#tblContainer");
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
			const response = await fetch('../ajax/alumnotaller.php?op=buscar',{
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
				<td><button class="btn btn-warning" data-bs-toggle="modal" id="dataUpdate" data-bs-target="#ModalEvaluacion" data-id="${alumnos.idAlumnoT}" data-nombre="${alumnos.ApellidoP+" "+alumnos.ApellidoM+" "+alumnos.Nombre}" data-actividad="${alumnos.nombre_actividad+"-"+alumnos.tipo_actividad}" data-periodo="${alumnos.periodo}" data-credito="${alumnos.Credito}" data-valorn ="${alumnos.valor_numerico}" data-desempeño="${alumnos.desempeno}" ><i class="fa fa-pencil"></i></button></td>
				<td>${alumnos.NumeroControl.toUpperCase().replace(searchs, '<span class="bold">$&</span>')}</td>
				<td>${alumnos.ApellidoP+" "+alumnos.ApellidoM+" "+alumnos.Nombre}</td>
				<td>${alumnos.nombre_actividad+"-"+alumnos.tipo_actividad}</td>
				<td>${alumnos.periodo}</td>
				<td>${alumnos.valor_numerico}</td>
				<td>${alumnos.desempeno}</td>
				<td><a href="${alumnos.Credito}" style="text-decoration: none; font-size: 15px; color: #1B396A;"><i class="fa-solid fa-arrow-right-to-bracket fa-rotate-90"></i><br> PDF</a></td>`
	  
				tableContainer.appendChild(row)
			  }
			 
			}
		  })
		}
	  
	  })

	  $.post("../ajax/alumnotaller.php?op=visualizar", function(data, status){
		var data = JSON.parse(data);
	  
		for (var i = 0; i < data.aaData.length; i++) {
		  var $tr = '<tr><td>'+data.aaData[i].btn+'</td>  <td>'+data.aaData[i].no+'</td> <td>'+data.aaData[i].alumno+'</td> <td>'+data.aaData[i].actividad+'</td> <td>'+data.aaData[i].periodo+'</td> <td>'+data.aaData[i].valor_numerico+'</td> <td>'+data.aaData[i].desempeno+'</td> <td>'+data.aaData[i].credito+'</td> </tr>'; 
		  $("#tblevalua").append($tr);
		  // agrego la columna tr a la tabla
		}
		  
	  });

	  var valor = 0;
                function mostrar() {
                    var r1 = $("#result1").val();
                    var r2 = $("#result2").val();
                    var r3 = $("#result3").val();
                    var r4 = $("#result4").val();
                    var r5 = $("#result5").val();
                    var r6 = $("#result6").val();
                    var r7 = $("#result7").val();    

                    valor = parseInt(r1) + parseInt(r2) + parseInt(r3) + parseInt(r4) + parseInt(r5) + parseInt(r6) + parseInt(r7);
					desempeño = valor/7;
					 $("#valor_numerico").val(desempeño.toFixed(2));
}