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
                     "actividad"=>$reg->nombre_actividad ."-".$reg->tipo_actividad,
                     "departamento"=>$reg->departamento,
                     "estatus"=>$reg->Estatus,
                     "credito"=>'<a href="'.$reg->Credito.'" style="text-decoration: none; font-size: 15px; color: #1B396A;"><i class="fa-solid fa-arrow-right-to-bracket fa-rotate-90"></i><br> DESCARGAR</a>' 
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
            
       case 'acceso':
            $rspta=$datos->acceso();
            //Vamos a declarar un array
            $data = Array();

            while($reg=$rspta->fetch_object()){

                $data[] = array(
                    "btn"=>'<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEdicion" data-id="'.$reg->idAlumno.'" data-nombre="'.$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre.'" data-no="'.$reg->NumeroControl.'" data-ncarrera="'.$reg->ClaveCarrera.'" data-email="'.$reg->Correo.'" data-semestre="'.$reg->Semestre.'" data-password="'.$reg->Password.'" data-telefono="'.$reg->Telefono.'"><i class="fa fa-pencil"></i></button>',
                    "no"=>$reg->NumeroControl,
                    "alumno"=>$reg->ApellidoP." ".$reg->ApellidoM." ".$reg->Nombre,
                    "email"=>$reg->Correo,
                    "carrera"=>$reg->ClaveCarrera,
                    "semestre"=>$reg->Semestre,
                    "telefono"=>$reg->Telefono,
                    "password"=>$reg->Password,
                );
            }
            $results = array(
                "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case 'editaracceso':

            $Semestre = $_POST["semestreu"];
            $Telefono = $_POST["telefono"];
            $ClaveCarrera = $_POST["carrerau"];
            $idAlumno=$_POST['idalumno'];

            
            $rspta=$datos->editaracceso($Semestre, $Telefono, $ClaveCarrera, $idAlumno);
            echo $rspta ? "Datos Actualizados" : "Datos No Actualizados";

        break;

        case 'accesos_alumnos':
            $NumeroControl = $_POST["ncontrol"];
            $ApellidoP = $_POST["apellidop"];
            $ApellidoM = $_POST["apellidom"];
            $Nombre = $_POST["nombrealumno"];
            $Sexo = $_POST["sexo"];
            $Correo = $_POST["correo"];
            $Telefono = $_POST["telefonoal"];
            $Semestre = $_POST["semestre"];
            $ClaveCarrera = $_POST["nombre_carrera"];
            $Password = $_POST["pass"];

            $rspta = $datos->añadir_alumno($NumeroControl,$ApellidoP,$ApellidoM,$Nombre,$Correo,$Semestre,$ClaveCarrera,$Telefono,$Sexo) ." ". $datos->añadir_user($Correo, $Password) ;
            echo $rspta ? "Almuno Reistrado" : "Alumno no se registro";

        break;
    }
}


?>