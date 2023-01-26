
	$.post("../ajax/datos.php?op=mostrar", function(data, status)
	{
		data = JSON.parse(data);		

		$("#nombre").val(data.Nombre);
		$("#apellidop").val(data.ApellidoP);
		$("#apellidom").val(data.ApellidoM);
		$("#semestre").val(data.Semestre);
		$("#telefono").val(data.Telefono);
		$("#email").val(data.Correo);
		$("#numerocontrol").val(data.NumeroControl);
        $("#licenciatura").val(data.ClaveCarrera);
 	});

   
