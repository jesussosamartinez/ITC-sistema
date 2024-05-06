function init(){

	$("#foract").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}


$("#formsalum").on("submit", function (e) {
  e.preventDefault();
  NumeroControl = $("#numcontrol").val();
  

  $.post(
    "../ajax/datos.php?op=alumnom",
    { NumeroControl: NumeroControl },
    function (data) {
      data = JSON.parse(data);

      $("#cuerpo").html("");
      var tr =
        '<tr style="text-transform:uppercase;"> <td>' +
        data.NumeroControl +
        "</td> <td>" +
        data.ApellidoP +
        " " +
        data.ApellidoM +
        " " +
        data.Nombre +
        "</td> <td>" +
        data.Correo +
        "</td> <td>" +
        data.ClaveCarrera +
        "</td> </tr>";
      $("#cuerpo").append(tr);
      $("#NumeroControl").val(data.NumeroControl);
      $("#correo_institucional").val(data.Correo);

    }
  );

  var frm = document.getElementById("buscadoractividades");
  var tbl = document.getElementById("actividades");
  var event = document.getElementById("eventosacademicos");
  if (
    frm.style.display == "block" &&
    tbl.style.display == "none" &&
    event.style.display == "none"
  ) {
    frm.style.display = "none";
    tbl.style.display = "block";
    event.style.display = "block";
  } else if (frm.style.display == "none") {
    frm.style.display = "block";
  }
});

//Función para guardar o editar

function guardaryeditar(e) {
  e.preventDefault(); //No se activará la acción predeterminada del evento
  var formData = new FormData($("#foracts")[0]);

  $.ajax({
    url: "../ajax/alumnotaller.php?op=inscribir",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,

    success: function (datos) {
      alertify.success(datos);
      $("#ModalAgregar").modal("hide"); 
    },
  });
}

function mostrarform()
{
	
}

function limpiar()
{
	$("#nombre_actividad").val("");
	$("#tipo_actividad").val("");
	$("#departamento").val("");
	$("#nombre_carrera").val("");
    $("#NumeroControl").val("");
    $("#correo_institucional").val("");
}

init();