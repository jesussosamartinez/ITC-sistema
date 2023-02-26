<?php
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión

    require_once "../modelos/Talleres.php";
    
    $talleres = new Talleres();

    $idTaller = isset($_POST["idTaller"])? limpiarCadena($_POST["idTaller"]): "";
    $tipo_actividad = isset($_POST["tipo_actividad"])? limpiarCadena($_POST["tipo_actividad"]): "";
    $Nombre = isset($_POST["Nombre"])? limpiarCadena($_POST["Nombre"]): "";
    $Tipo = isset($_POST["Tipo"])? limpiarCadena($_POST["Tipo"]): "";
    $Grupo = isset($_POST["Grupo"])? limpiarCadena($_POST["Grupo"]): "";
    $Turno = isset($_POST["Turno"])? limpiarCadena($_POST["Turno"]): "";

    switch ($_GET["op"]){
        case 'guardaryeditar':

            if (empty($idTaller)){
                $rspta=$talleres->insertar($tipo_actividad,$Nombre,$Tipo,$Grupo,$Turno);
                echo $rspta ? "Actividad Registrada" : "Actividad no registrada";
            }
            else {
                $rspta=$talleres->editar($idarticulo,$idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen);
                echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
            }
        break;
        case 'desactivar':
            $rspta=$talleres->desactivar($idTaller);
             echo $rspta ? "Taller Desactivado" : "Taller no desactivado";
             //Fin de las validaciones de acceso
        break;
    
        case 'activar':
            $rspta=$talleres->activar($idTaller);
             echo $rspta ? "Taller activado" : "Taller no activado";
        break;
    
        case 'mostrar':
            $rspta=$talleres->mostrar($idTaller);
             //Codificar el resultado utilizando json
             echo json_encode($rspta);
        break;

        case 'listarActividades':
            $rspta=$talleres->listarActividades();
             //Vamos a declarar un array
             $data= Array();
    
             while ($reg=$rspta->fetch_object()){
            
                 $data[]=array(
                     "0"=>($reg->Condicion)?'<button class="btn btn-danger" onclick="desactivar('.$reg->idTaller.')"><i class="fa fa-close"></i></button>':
                         '<button class="btn btn-primary" onclick="activar('.$reg->idTaller.')"><i class="fa fa-check"></i></button>',
                     "1"=>$reg->tipo_actividad,
                     "2"=>$reg->Tipo,
                     "3"=>$reg->Nombre,
                     "4"=>$reg->Grupo,
                     "5"=>$reg->Turno,
                     "6"=>($reg->Condicion)?'<span class="badge text-bg-success">Activado</span>':
                     '<span class="badge text-bg-danger">Desactivado</span>'
                 );
             }
             $results = array(
                 "sEcho"=>1, //Información para el datatables
                 "iTotalRecords"=>count($data), //enviamos el total registros al datatable
                 "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                 "aaData"=>$data);
             echo json_encode($results);
     
        break;

        case 'listarActividadesAlumnos':
            $rspta=$talleres->listarActividadesA();
             //Vamos a declarar un array
             $data= Array();
    
             while ($reg=$rspta->fetch_object()){
            
                 $data[]=array(
                     "0"=>$reg->tipo_actividad,
                     "1"=>$reg->Tipo,
                     "2"=>$reg->Nombre,
                     "3"=>$reg->Grupo,
                     "4"=>$reg->Turno,
                     "5"=>($reg->Condicion)?'<span class="badge text-bg-success">Disponible</span>':
                     '<span class="badge text-bg-danger">No Disponible</span>'
                 );
             }
             $results = array(
                 "sEcho"=>1, //Información para el datatables
                 "iTotalRecords"=>count($data), //enviamos el total registros al datatable
                 "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                 "aaData"=>$data);
             echo json_encode($results);
     
        break;
    
    }
}
ob_end_flush();
?>