<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Datos
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}


//Implementar un método para mostrar los datos de un registro a modificar
public function mostrar()
{
    $sql="SELECT * FROM alumnos WHERE correo= '".$_SESSION['email']."'"; 
    return ejecutarConsultaSimpleFila($sql);
}


}   