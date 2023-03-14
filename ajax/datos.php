<?php
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión

    require_once "../modelos/Datos.php";
    
    $datos = new Datos();

    $idAlumno = isset($_POST["idAlumno"])? limpiarCadena($_POST["idAlumno"]): "";
    $ApellidoP = isset($_POST["ApellidoP"])? limpiarCadena($_POST["ApellidoP"]): "";
    $ApellidoM = isset($_POST["ApellidoM"])? limpiarCadena($_POST["ApellidoM"]): "";
    $Nombre = isset($_POST["Nombre"])? limpiarCadena($_POST["Nombre"]): "";
    $NumeroControl = isset($_POST["NumeroControl"])? limpiarCadena($_POST["NumeroControl"]): "";
    $Telefono = isset($_POST["Telefono"])? limpiarCadena($_POST["Telefono"]): "";
    $Correo = isset($_POST["Correo"])? limpiarCadena($_POST["Correo"]): "";
    $Semestre = isset($_POST["Semestre"])? limpiarCadena($_POST["Semestre"]): "";
    $ClaveCarrera = isset($_POST["ClaveCarrera"])? limpiarCadena($_POST["ClaveCarrera"]): "";

    switch ($_GET["op"]) {
        case 'mostrar':
            $rspta=$datos->mostrar();
             //Codificar el resultado utilizando json
             echo json_encode($rspta);
            break;

        case 'alumnom':
            $NumeroControl = $_POST['NumeroControl'];

            $rspta=$datos->alumnocomp($NumeroControl);
            echo json_encode($rspta);
            break; 
        
        case 'mostraractividad':
            $rspta=$datos->mostraractividad();
            //Vamos a declarar un array
            $data= Array();
    
            while ($reg=$rspta->fetch_object()){
           
                $data[]=array(
                    "folio"=>0,
                     "actividad"=>$reg->nombre_actividad ."-".$reg->tipo_actividad,
                     "departamento"=>$reg->departamento,
                     "estatus"=>$reg->condicion?'<span class="badge text-bg-success">Activado</span>':
                     '<span class="badge text-bg-danger">Desactivado</span>',
                     "credito"=>'pendiente'
                );
            }
            $results = array(
                "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                "aaData"=>$data);
            echo json_encode($results);
    
            break;
            
        
        case 'inscribir':
            $rspta=$datos->inscribir($tipo_actividad,$Nombre,$Tipo,$Grupo,$Turno);
            echo $rspta ? "Alumno Inscrito" : "Alumno No Inscrito";
            break;        
    }
}


?>