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
    case 'permisos':
		//Obtenemos todos los permisos de la tabla permisos
		require_once "../modelos/Permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();

		//Obtener los permisos asignados al usuario
		$id=$_GET['id'];
		$marcados = $usuario->listarmarcados($id);
		//Declaramos el array para almacenar todos los permisos marcados
		$valores=array();

		//Almacenar los permisos asignados al usuario en el array
		while ($per = $marcados->fetch_object())
			{
				array_push($valores, $per->idpermiso);
			}
	break;

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
        $marcados = $usuario->listarmarcados($fetch->idRol);

        //Declaramos el array para almacenar todos los permisos marcados
        $valores= array();
        
        //Almacenamos los permisos marcados en el array
        while($per = $marcados->fetch_object())
        {
            array_push($valores, $per->idpermiso);
        }

        //Determinamos los permisos del usuario
            in_array(1,$valores)?$_SESSION['HOME']=1:$_SESSION['HOME']=0;
			in_array(2,$valores)?$_SESSION['InfoEscolar Historial']=1:$_SESSION['InfoEscolar Historial']=0;
			in_array(3,$valores)?$_SESSION['InfoEscolar Horario']=1:$_SESSION['InfoEscolar Horario']=0;
			in_array(4,$valores)?$_SESSION['InfoEscolar DatosGen']=1:$_SESSION['InfoEscolar DatosGen']=0;
			//in_array(5,$valores)?$_SESSION['acceso']=1:$_SESSION['acceso']=0;
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