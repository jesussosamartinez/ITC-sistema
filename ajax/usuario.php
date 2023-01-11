<?php 
ob_start();
if(strlen(session_id()) < 1){
    session_start(); //validacion de sesion
}

require_once "../modelos/Usuario.php";

$usuario = new Usuario();

$idUsuario= isset($_POST["idUsuario"])? limpiarCadena($_POST["idusuario"]):"";
$email = isset($_POST["email"])? limpiarCadena($_POST["email"]): "";
$Password = isset($_POST["Password"])? limpiarCadena($_POST["Password"]):"";
$idRol = isset($_POST["idRol"])? limpiarCadena($_POST["idRol"]):"";


switch ($_GET["op"]){
    case 'verificar':
        $email=$_POST['email'];
        $Password=$_POST['Password'];

    //consultamos al metodo que esta en la carpeta modelos usuario    
    $rspta=$usuario->verificar($email, $Password);
    $fetch=$rspta->fetch_object();

    if(isset($fetch)){
        //variables de session
        $_SESSION['idusuario']=$fetch->idUsuario;
        $_SESSION['email']=$fetch->email;
        $_SESSION['Password']=$fetch->Password;
        $_SESSION['idRol']=$fetch->idRol;
    
        //obtenemos los permisos del usuario segun rol
        $marcados = $usuario->listarmarcados($fetch->idusuario);

        //Declaramos el array para almacenar todos los permisos marcados
        $valores= array();
        
        //Almacenamos los permisos marcados en el array
        while($per = $marcados->fetch_object())
        {
            array_push($valores, $per->idpermiso);
        }
    }

    echo json_encode($fetch);

    break;

    case 'salir':
        //limpiamos las variables de sesion
        session_unset();
        //destruimos la sesion
        session_destroy();
        //redireccionamos al home
        header("Location: ../index.php");

    break;
    }

    ob_end_flush();


?>