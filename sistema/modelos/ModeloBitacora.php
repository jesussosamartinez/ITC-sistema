<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class ModeloBitacora
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	
	public function insertarRegistro($Movimiento, $Descripcion, $MensajeDevuelto, $FechaHora, $Usuario){
		$sql = "INSERT INTO bitacora (Movimiento, Descripcion, MensajeDevuelto, FechaHora, Usuario)
		VALUES ('$Movimiento','$Descripcion','$MensajeDevuelto','$FechaHora','$Usuario')";
		return ejecutarConsulta($sql);
	}
	
		 //Función para registrar los intentos de inicio de sesión 
	public function insertarRegistroIntentos($Ip, $Intento, $fecha){
		$sql = "INSERT INTO login (ip, intentos, datetime)
		VALUES ('$Ip','$Intento','$fecha')";
		return ejecutarConsulta($sql);
	}
	

    //Función para verificar el acceso al sistema
	public function verificar($email,$Password)
    {
    	$sql="SELECT idUsuario, email, Password, idRol FROM usuarios WHERE email='$email' AND Password='$Password'"; 
    	return ejecutarConsulta($sql);  
    }
}