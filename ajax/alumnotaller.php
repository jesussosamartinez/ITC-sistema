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
   
    }
}

?>    