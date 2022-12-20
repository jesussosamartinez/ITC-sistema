<?php
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión

    require_once "../modelos/Talleres.php";
    
    $talleres=new Talleres();

    $idTaller = isset($_POST["idTaller"])? limpiarCadena($_POST["idTaller"]): "";
    $ClaveTaller = isset($_POST["ClaveTaller"])? limpiarCadena($_POST["ClaveTaller"]): "";
    $Nombre = isset($_POST["Nombre"])? limpiarCadena($_POST["Nombre"]): "";
    $Tipo = isset($_POST["Tipo"])? limpiarCadena($_POST["Tipo"]): "";
    $Grupo = isset($_POST["Grupo"])? limpiarCadena($_POST["Grupo"]): "";
    $Turno = isset($_POST["Turno"])? limpiarCadena($_POST["Turno"]): "";

    switch ($_GET["op"]){
        
        case 'desactivar':
            $rspta=$talleres->desactivar($idTaller);
             echo $rspta ? "Taller Desactivado" : "Taller no desactivado";
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

        case 'listar':
            $rspta=$talleres->listar();
             //Vamos a declarar un array
             $data= Array();
    
             while ($reg=$rspta->fetch_object()){
                 $data[]=array(
                     "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idTaller.')"><i class="fa fa-pencil"></i></button>'.
                         ' <button class="btn btn-danger" onclick="desactivar('.$reg->idTaller.')"><i class="fa fa-close"></i></button>':
                         '<button class="btn btn-warning" onclick="mostrar('.$reg->idTaller.')"><i class="fa fa-pencil"></i></button>'.
                         ' <button class="btn btn-primary" onclick="activar('.$reg->idTaller.')"><i class="fa fa-check"></i></button>',
                     "1"=>$reg->Nombre,
                     "2"=>$reg->Tipo,
                     "3"=>$reg->Grupo,
                     "4"=>$reg->Turno,
                     //"5"=>"<img src='../files/articulos/".$reg->imagen."' height='50px' width='50px' >",
                     "5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
                     '<span class="label bg-red">Desactivado</span>'
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