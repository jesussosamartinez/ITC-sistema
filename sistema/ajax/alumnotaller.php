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
                "btn"=> '<button class="btn btn-warning" data-bs-toggle="modal" id="dataUpdate" data-bs-target="#ModalEdicion" data-id="'.$reg->idAlumnoT.'" data-no="'.$reg->NumeroControl.'" data-nombre="'.$reg->ApellidoP.' '.$reg->ApellidoM.' '.$reg->Nombre.'" data-actividad="'.$reg->nombre_actividad ."-". $reg->tipo_actividad.'" data-ncarrera="'.$reg->nombre_carrera.'" data-departamento="'.$reg->departamento.'" data-estatus="'.$reg->Estatus.'" data-credito="'.$reg->Credito.'" ><i class="fa fa-pencil"></i></button>',
                "No"=>$reg->NumeroControl,
                "alumno"=>$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre,
                 "actividad"=>$reg->nombre_actividad ."-". $reg->tipo_actividad,
                 "carrera"=>$reg->nombre_carrera,
                 "departamento"=>$reg->departamento,
                 "estatus"=>$reg->Estatus,
                 "credito"=>'<a href="'.$reg->Credito.'" style="text-decoration: none; font-size: 15px; color: #1B396A;"><i class="fa-solid fa-arrow-right-to-bracket fa-rotate-90"></i><br> DESCARGAR</a>'
            );
        }
        $results = array(
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar editar('.$reg->idAlumnoT.')
            "aaData"=>$data);
        echo json_encode($results);

        break;

    case 'buscar':
        $searchs = $_POST['searchs'];
        
        $rspta=$alumnotaller->buscar($searchs);
        $alumno= [];
        $errors=['data' => false];


        if($rspta->num_rows > 0){
        while ($data =$rspta->fetch_assoc()){
            $alumno[] = $data;
        }
        echo json_encode($alumno);
    } else {
        echo json_encode($errors);
    }

        break;

    case 'editar':
		$estatus=$_POST["estatus_"];
		$idAlumnoT=$_POST['idAlumnoT'];

        $rspta=$alumnotaller->editar($idAlumnoT,$estatus);
        echo $rspta ? "Datos No Actualizados" : "Datos Actualizados";
     
    break;

    case 'insertarAlumno':
        $no_control = $_POST["no_control"];
        $email = $_POST["email"];
        $carrera = $_POST["nombre_carrera"];
        $nombre_actividad = $_POST["actividadcomplementaria"];
        $tipo_taller = $_POST["tipo_taller"];
        $horario = $_POST["horario"];

        $rspta=$alumnotaller->insertarAlumno($nombre_actividad,$tipo_taller,$no_control,$email,$nombre_carrera,$horario);
        echo $rspta ? "Alumno Registrado " : "Alumno No Registrado";
     
    break;

    case 'visualizar':
        $rspta=$alumnotaller->visualizar();
        //Vamos a declarar un array
        $data= Array();
    
        while ($reg=$rspta->fetch_object()){
       
            $data[]=array(
                "btn"=> '<button class="btn btn-warning" data-bs-toggle="modal" id="dataUpdate" data-bs-target="#ModalEvaluacion" data-id="'.$reg->idAlumnoT.'" data-nombre="'.$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre.'"  data-actividad="'.$reg->nombre_actividad ."-". $reg->tipo_actividad.'" data-periodo="'.$reg->periodo.'" data-credito="'.$reg->Credito.'" data-valorn ="'.$reg->valor_numerico.'" data-desempeño="'.$reg->desempeno.'" ><i class="fa fa-pencil"></i></button>',
                "no"=> $reg->NumeroControl,
                "alumno"=>$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre,
                 "actividad"=>$reg->nombre_actividad ."-". $reg->tipo_actividad,
                 "periodo"=>$reg->periodo,
                 "valor_numerico"=>$reg->valor_numerico,
                 "desempeno"=>$reg->desempeno,
                 "credito"=>'<span><a href="'.$reg->Credito.'" style="text-decoration: none; font-size: 15px; color: #1B396A;"><i class="bi bi-download"></i><br> PDF </a></span>'
            );
        }
        $results = array(
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar editar('.$reg->idAlumnoT.')
            "aaData"=>$data);
        echo json_encode($results);

        break;

        case 'editarcon':
            $credito = $_POST["credito"];
            $periodo=$_POST["periodo"];
            $valornum = $_POST["valor_numerico"];
            $desempeño = $_POST["desempeno"];
            $idAlumnoT=$_POST['idAlumnoT'];
    
            $rspta=$alumnotaller->editarcon($idAlumnoT,$periodo,$valornum, $desempeño, $credito);
            echo $rspta ? "Datos No Actualizados" : "Datos Actualizados";
         
        break;


        case 'listadosAE':
            $nombre_actividad = $_POST['nombre_actividad'];
            $periodo = $_POST['periodo'];
            $horario = $_POST['horario'];

            $rspta = $alumnotaller->listadoAE($nombre_actividad,$horario,$periodo);
            $data= Array();
    
        while ($reg=$rspta->fetch_object()){
       
            $data[]=array(
                "no"=> $reg->NumeroControl,
                "alumno"=>$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre
            );
        }
        $results = array(
            "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar editar('.$reg->idAlumnoT.')
            "aaData"=>$data);
        echo json_encode($results);
        
        break;

        case 'estadisticas':
           $periodo = $_POST['periodo'];

            $rspta = $alumnotaller->estadisticas($periodo);
            $data= Array();
            while ($reg=$rspta->fetch_object()){
       
                $data[]=array(
                    "carrera"=> $reg->nombre_carrera,
                    "sexo"=>$reg->sexo,
                    "cont"=>$reg->num
                );
            }
           
            $results = array(
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );
            echo json_encode($results);
            break;

        }
 
    
}

?>