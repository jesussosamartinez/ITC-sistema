$.post("../ajax/datos.php?op=mostrar", function (data, status) {
  data = JSON.parse(data);

  $("#nombrecomp").val(data.ApellidoP + " " + data.ApellidoM + " " + data.Nombre);
  $("#semestre").val(data.Semestre);
  $("#telefono").val(data.Telefono);
  $("#email").val(data.Correo);
  $("#numerocontrol").val(data.NumeroControl);
  $("#licenciatura").val(data.ClaveCarrera);
});


$.post("../ajax/datos.php?op=mostraractividad", function(data, status){
  var data = JSON.parse(data);
  for (var i = 0; i < data.aaData.length; i++) {
    var $tr = '<tr> <td>'+data.aaData[i].actividad+'</td> <td>'+data.aaData[i].departamento+'</td> <td>'+data.aaData[i].estatus+'</td> <td>'+data.aaData[i].credito+'</td> </tr>'; 
    $("#tblactividad").append($tr);
    // agrego la columna tr a la tabla
  }
    
});

$.post("../ajax/alumnotaller.php?op=mostrar", function(data, status){
  var data = JSON.parse(data);
  for (var i = 0; i < data.aaData.length; i++) {
    var $tr = '<tr><td>'+data.aaData[i].btn+'</td><td>'+data.aaData[i].No+'</td> <td>'+data.aaData[i].alumno+'</td> <td>'+data.aaData[i].actividad+'</td> <td>'+data.aaData[i].carrera+'</td> <td>'+data.aaData[i].departamento+'</td> <td>'+data.aaData[i].estatus+'</td> <td>'+data.aaData[i].credito+'</td> </tr>'; 
    $("#tblhistorial").append($tr);
    // agrego la columna tr a la tabla
  }
    
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
          <td><button class="btn btn-warning" onclick="" data-bs-toggle="modal" data-bs-target="#ModalEdicion"><i class="fa fa-pencil"></i></button></td>
          <td>${alumnos.NumeroControl.toUpperCase().replace(searchs, '<span class="bold">$&</span>')}</td>
          <td>${alumnos.ApellidoP+" "+alumnos.ApellidoM+" "+alumnos.Nombre}</td>
          <td>${alumnos.nombre_actividad+" "+alumnos.tipo_actividad}</td>
          <td>${alumnos.nombre_carrera}</td>
          <td>${alumnos.departamento}</td>
          <td>${alumnos.Estatus}</td>
          <td>${alumnos.Credito}</td>`

          tableContainer.appendChild(row)
        }
       
      }
    })
  }

})

function editar()
{
	//No se activará la acción predeterminada del evento
	var formData = new FormData($("#form")[0]);

  console.log(formData)

	$.ajax({
		url: "../ajax/alumnotaller.php?op=editar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          alert(datos);	          
	          $("#tableContainer").ajax.reload();
	    }

	});
}