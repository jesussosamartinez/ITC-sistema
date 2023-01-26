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
         
    }
}
?>