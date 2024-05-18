<?php 
ob_start();
if(strlen(session_id()) < 1){
    session_start(); //validacion de sesion
}

require_once "../modelos/Usuario.php";
require_once "../modelos/ModeloBitacora.php";

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

        // Datos a encriptar
        $data =$Password;
        // Clave para el cifrado 
        $key = "Clav3";
        $encrypted_data="";
        if($email!="admin@cuautla.tecnm.mx"){
            // Encriptar los datos
            $encrypted_data = openssl_encrypt($data, 'aes-256-cbc', $key, 0, '1234567890123456');
            echo "Datos encriptados: " . $encrypted_data . "<br>";
        }else{
            $encrypted_data=$Password;
        }
    //Agregar texto encriptado a la constancia
   //Archivo impreso desde el sistema por "Usuario" a las "Hora" del día "Fecha"

        //consultamos al metodo que esta en la carpeta modelos usuario    
        $rspta=$usuario->verificar($email, $encrypted_data);
        $fetch=$rspta->fetch_object();

    if(isset($fetch)){

        $depto = $usuario->variables($email);
        $list = $deptos->fetch_object();

        //variables de session
        $_SESSION['idusuario']=$fetch->idUsuario;
        $_SESSION['email']=$fetch->email;
        $_SESSION['Password']=$fetch->Password;
        $_SESSION['idRol']=$fetch->idRol;
        $_SESSION['jdepto']=$list->jefeDepartamento;
        $_SESSION['ndepto']=$list->nombreDepartamento;
        
        session_start();

      //VARIABLES DE SESION PARA LA EXPIRACION 
        $_SESSION ['auth']= true; 
        $_SESSION ['start']= time(); 
        $_SESSION['expire']= $_SESSION['start']+ (1800); 
        $_SESSION['Home']=1;
        
       
        
        //obtenemos los permisos del usuario segun rol
        $marcados = $usuario->listarmarcados($fetch->email);

        //Declaramos el array para almacenar todos los permisos marcados
        $valores= array();
        
        //Almacenamos los permisos marcados en el array
        while($per = $marcados->fetch_object())
        {
            array_push($valores, $per->permisos_id);
        }

        //Determinamos los permisos del usuario
            in_array(1,$valores)?$_SESSION['Home']=1:$_SESSION['Home']=0;
			in_array(2,$valores)?$_SESSION['Información_Escolar']=1:$_SESSION['Información_Escolar']=0;
			in_array(3,$valores)?$_SESSION['Informacion']=1:$_SESSION['Informacion']=0;
			in_array(4,$valores)?$_SESSION['control_acceso']=1:$_SESSION['control_acceso']=0;
            in_array(5,$valores)?$_SESSION['Act Complementarias']=1:$_SESSION['Act Complementarias']=0;
			in_array(6,$valores)?$_SESSION['ActividadesDisponibles']=1:$_SESSION['ActividadesDisponibles']=0;
			in_array(7,$valores)?$_SESSION['Departamentos']=1:$_SESSION['Departamentos']=0;
			in_array(8,$valores)?$_SESSION['Reporte']=1:$_SESSION['Reporte']=0;
			in_array(9,$valores)?$_SESSION['Creditos']=1:$_SESSION['Creditos']=0;
            in_array(10,$valores)?$_SESSION['Disponibilidad']=1:$_SESSION['Disponibilidad']=0;
            in_array(11,$valores)?$_SESSION['Historial']=1:$_SESSION['Historial']=0;
    }else{ //aqui vamos a validar los intentos de inicio de sesión

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