<?php
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión

    require_once "../modelos/AlumnoTaller.php";
    
    $alumnotaller = new AlumnoTaller();

    $idAlumnoT = isset($_POST["idAlumnoT"])? limpiarCadena($_POST["idAlumnoT"]): "";
    $nombre_actividad = isset($_POST["nombre_actividad"])? limpiarCadena($_POST["nombre_actividad"]): "";
    $tipo_actividad = isset($_POST["tipo_actividad"])? limpiarCadena($_POST["tipo_actividad"]): "";
    $NumeroControl = isset($_POST["NumeroControl"])? limpiarCadena($_POST["NumeroControl"]): "";
    $correo_institucional = isset($_POST["correo_institucional"])? limpiarCadena($_POST["correo_institucional"]): "";
    $departamento = isset($_POST["departamento"])? limpiarCadena($_POST["departamento"]): "";
    $nombre_carrera = isset($_POST["nombre_carrera"])? limpiarCadena($_POST["nombre_carrera"]): "";

    switch ($_GET["op"]) {
    case 'inscribir':
        if (empty($idAlumnoT)){
        $rspta=$alumnotaller->inscribir($nombre_actividad,$tipo_actividad,$NumeroControl,$correo_institucional,$departamento,$nombre_carrera);
        echo $rspta ? "Alumno Inscrito" : "Alumno No Inscrito"; 
    }
        break;
    
    case 'mostrar':
        $rspta=$alumnotaller->mostrar();
        //Vamos a declarar un array
        $data= Array();
    
        while ($reg=$rspta->fetch_object()){
       
            $data[]=array(
                "opciones"=>'<button class="btn btn-warning" ><i class="fa fa-pencil"></i>
                        </button>',
                "folio"=>0,
                "No"=>$reg->NumeroControl,
                "alumno"=>$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre,
                 "actividad"=>$reg->nombre_actividad ."-". $reg->tipo_actividad,
                 "carrera"=>$reg->nombre_carrera,
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
   
    }
}

?>    