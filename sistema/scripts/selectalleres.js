
var tabla;

//Función que se ejecuta al inicio
function init(){
	listarD();	
	
}

//Función Listar
function listarD()
{
	tabla=$('#tbllistadoDA').dataTable(
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
					url: '../../ajax/talleres.php?op=selectaller',
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




//Función para Seleccionar taller
function Inscribirse (idTaller)
{
	alertify.confirm('SELECCION DE TALLERES',"¿Está Seguro de Inscribirse al Taller?", function(){
		
        	$.post("../ajax/talleres.php?op=desactivar", {idTaller : idTaller}, function(e){
        		alert.sucess("INSCRITO EN EL TALLER")
	            tabla.ajax.reload();
        	});	
	}, function(){
		alertify.error("NO SE PUDO INSCRIBIR EN EL TALLER");
	})
}

//Función para desSeleccionar taller
function activar(idTaller)
{
	bootbox.confirm("¿Está Seguro de dar de baja el Taller?", function(result){
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