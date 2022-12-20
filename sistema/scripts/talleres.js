var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	//Cargamos los items al select categoria
	$.post("../ajax/talleres.php?op=selectCategoria", function(r){
	  //          $("#idcategoria").html(r);
	    //        $('#idcategoria').selectpicker('refresh');

	});
	//$("#imagenmuestra").hide();
	//$('#mAlmacen').addClass("treeview active");
    //$('#lArticulos').addClass("active");
//}

//Función limpiar
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
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/talleres.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
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
		url: "../ajax/articulo.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idTaller)
{
	$.post("../ajax/talleres.php?op=mostrar",{idTaller : idTaller}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#idTaller").val(data.idTaller);
		$('#idTaller').selectpicker('refresh');
		//$("#codigo").val(data.codigo);
		$("#nombre").val(data.Nombre);
		$("#Tipo").val(data.Tipo);
		$("#Grupo").val(data.Grupo);
		//$("#imagenmuestra").show();
		//$("#imagenmuestra").attr("src","../files/articulos/"+data.imagen);
		//$("#imagenactual").val(data.imagen);
 		$("#Turno").val(data.Turno);

 	})
}

//Función para desactivar registros
function desactivar(idTaller)
{
	bootbox.confirm("¿Está Seguro de desactivar el artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/talleres.php?op=desactivar", {idTaller : idTaller}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idTaller)
{
	bootbox.confirm("¿Está Seguro de activar el Taller?", function(result){
		if(result)
        {
        	$.post("../ajax/talleres.php?op=activar", {idTaller : idTaller}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();