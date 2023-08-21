var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listarD();	
	listarDA();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiar
function limpiar()
{
	$("#Tipo").val("");
	$("#tipo_actividad").val("");
	$("#Nombre").val("");
	$("#Grupo").val("");
	$("#Turno").val("");
	$("#idTaller").val("");
}
//Función mostrar formulario
function mostrarform(flag)
{
	
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listarD()
{
	tabla=$('#tbllistadoD').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
		"ajax":
				{
					url: '../../ajax/talleres.php?op=listarActividades',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
			"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función Listar
function listarDA()
{
	tabla=$('#tbllistadoDA').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
		"ajax":
				{
					url: '../../ajax/talleres.php?op=listarActividadesAlumnos',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
			"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/talleres.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          $("#tbllistadoD").dataTable().api().ajax.reload();
	    }

	});
	limpiar();
}

//Función para desactivar registros
function desactivar(idTaller)
{
	alertify.confirm('ACTIVIDAD EXTRAESCOLAR','¿Está Seguro de desactivar el Taller?', function(){
		
        
        	$.post("../ajax/talleres.php?op=desactivar", {idTaller : idTaller}, function(){
        		//bootbox.alert(e);
				alertify.success('TALLER DESACTIVADO');
	            $("#tbllistadoD").dataTable().api().ajax.reload();
        	});        
	}, function(e){
		alertify.error('TALLER NO DESACTIVADO');
	})
}

//Función para activar registros
function activar(idTaller)
{
	alertify.confirm('ACTIVIDAD EXTRAESCOLAR',"¿Está Seguro de activar el Taller?", function(){
		
        	$.post("../ajax/talleres.php?op=activar", {idTaller : idTaller}, function(){
        		//bootbox.alert(e);
				alertify.success('TALLER ACTIVADO');
	            //tabla.ajax.reload();
				$("#tbllistadoD").dataTable().api().ajax.reload();
        	});	
        
	},function(){
		alertify.error('TALLER NO ACTIVADO');
	})
}

function eliminar(idTaller)
{
	alertify.confirm('ACTIVIDAD EXTRAESCOLAR',"¿Está Seguro de eliminar el Taller?", function(){
        	$.post("../ajax/talleres.php?op=eliminar", {idTaller : idTaller}, function(){
        		alertify.sucess("TALLER ELIMINADO");
	            $("#tbllistadoD").dataTable().api().ajax.reload();
        	});	
        
	},function(){
		alertify.error("TALLER NO ELIMINADO");
	})
}


init();