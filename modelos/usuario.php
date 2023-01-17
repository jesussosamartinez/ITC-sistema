<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementar un método para listar los registros
	//public function listar()
	//{
	//	$sql="SELECT * FROM usuario";
	//	return ejecutarConsulta($sql);		
	//}
	
	public function listarmarcados($idRol)
	{
		$sql="SELECT * FROM permisos_rol WHERE rol_id='$idRol'";
		return ejecutarConsulta($sql);
	}

    //Función para verificar el acceso al sistema
	public function verificar($email,$Password)
    {
    	$sql="SELECT idUsuario, email, Password, idRol FROM usuarios WHERE email='$email' AND Password='$Password';"; 
    	return ejecutarConsulta($sql);  
    }
}

?>