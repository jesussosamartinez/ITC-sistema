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


$.post("../ajax/datos.php?op=mostraractividad", function(data, status){
  var data = JSON.parse(data);
  for (var i = 0; i < data.aaData.length; i++) {
    var $tr = '<tr><td>'+data.aaData[i].folio+'</td> <td>'+data.aaData[i].actividad+'</td> <td>'+data.aaData[i].departamento+'</td> <td>'+data.aaData[i].estatus+'</td> <td>'+data.aaData[i].credito+'</td> </tr>'; 
    $("#tblactividad").append($tr);
    // agrego la columna tr a la tabla
  }
    
});

$.post("../ajax/alumnotaller.php?op=mostrar", function(data, status){
  var data = JSON.parse(data);
  for (var i = 0; i < data.aaData.length; i++) {
    var $tr = '<tr><td> </td><td>'+data.aaData[i].folio+'</td> <td>'+data.aaData[i].No+'</td> <td>'+data.aaData[i].alumno+'</td> <td>'+data.aaData[i].actividad+'</td> <td>'+data.aaData[i].carrera+'</td> <td>'+data.aaData[i].departamento+'</td> <td>'+data.aaData[i].estatus+'</td> <td>'+data.aaData[i].credito+'</td> </tr>'; 
    $("#tblhistorial").append($tr);
    // agrego la columna tr a la tabla
  }
    
});

