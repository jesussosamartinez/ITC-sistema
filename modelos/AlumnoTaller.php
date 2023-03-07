<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class AlumnoTaller
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

public function inscribir($nombre_actividad,$tipo_actividad,$NumeroControl,$correo_institucional,$departamento,$nombre_carrera){
	$sql="INSERT INTO alumnotaller (nombre_actividad,tipo_actividad,NumeroControl,correo_institucional,departamento,nombre_carrera)
		VALUES ('$nombre_actividad','$tipo_actividad','$NumeroControl','$correo_institucional','$departamento','$nombre_carrera')";
		return ejecutarConsulta($sql);
}

}

?>