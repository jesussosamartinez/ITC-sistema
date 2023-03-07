$.post("../ajax/datos.php?op=mostrar", function (data, status) {
  data = JSON.parse(data);

  $("#nombrecomp").val(
    data.ApellidoP + " " + data.ApellidoM + " " + data.Nombre
  );
  $("#semestre").val(data.Semestre);
  $("#telefono").val(data.Telefono);
  $("#email").val(data.Correo);
  $("#numerocontrol").val(data.NumeroControl);
  $("#licenciatura").val(data.ClaveCarrera);
});

$.post("../ajax/datos.php?op=mostraractividad", function (data) {
  data = JSON.parse(data);

  $("#tblactividad").html("");
  var tr =
    '<tr style="text-transform:uppercase;"> <td scope="row">' +
    0 +
    "</td> <td>" +
    data.nombre_actividad +
    "</td> <td>" +
    data.departamento +
    "</td> </tr>";
  $("#tblactividad").append(tr);
});



