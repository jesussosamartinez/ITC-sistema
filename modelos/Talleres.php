<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Talleres
{

    //Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($tipo_actividad,$Nombre,$Tipo,$Grupo,$Turno)
	{
		$sql="INSERT INTO talleres (tipo_actividad,Nombre,Tipo,Grupo,Turno,Condicion)
		VALUES ('$tipo_actividad','$Nombre','$Tipo','$Grupo','$Turno','1')";
		return ejecutarConsulta($sql);
	}

    //Implementamos un método para desactivar registros
	public function desactivar($idTaller)
	{
		$sql="UPDATE talleres SET Condicion='0' WHERE idTaller='$idTaller'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idTaller)
	{
		$sql="UPDATE talleres SET Condicion='1' WHERE idTaller='$idTaller'";
		return ejecutarConsulta($sql);
	}
    //Implementar un método para mostrar los datos.
	public function mostrar($idTaller)
	{
		$sql="SELECT * FROM talleres WHERE idTaller='$idTaller'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listarActividades()
	{
		$sql="SELECT idTaller,tipo_actividad,Tipo, Nombre, Grupo, Turno, horario, Condicion
		FROM talleres";
		return ejecutarConsulta($sql);		
	}

	public function listarActividadesDisponibles()
	{
		$sql="SELECT idTaller,tipo_actividad,Tipo, Nombre, Grupo, Turno, horario, Condicion
		FROM talleres WHERE Condicion='1'";
		return ejecutarConsulta($sql);		
	}

	public function eliminar($idTaller)
	{
		$sql="DELETE FROM talleres WHERE idTaller='$idTaller'";
		return ejecutarConsulta($sql);		
	}
	
}

?>