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
	$sql="INSERT INTO alumnotaller (nombre_actividad,tipo_actividad,NumeroControl,correo_institucional,departamento,nombre_carrera,Estatus,Credito,horario,periodo)
		VALUES ('$nombre_actividad','$tipo_actividad','$NumeroControl','$correo_institucional','$departamento','$nombre_carrera','CURSANDO', 'PENDIENTE','n/a', 'PENDIENTE')";
		return ejecutarConsulta($sql);
}

    //Implementamos un método para editar el estatus y la url del crédito
     public function editar($idAlumnoT,$estatus)
    {
	$sql="UPDATE alumnotaller SET Estatus='$estatus' WHERE idAlumnoT='$idAlumnoT'";
	ejecutarConsulta($sql);
	}

	public function mostrar()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl";
		return ejecutarConsulta($sql);
	}

	public function buscar($searchs){
		$sql = "SELECT t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito, t.periodo, t.valor_numerico, t.desempeno FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE a.NumeroControl LIKE '%$searchs%'";
		return ejecutarConsulta($sql);
	}

	public function estadisticas(){
		$sql = "SELECT a.nombre_carrera, count(Sexo)  FROM alumnotaller a INNER JOIN alumnos al ON a.NumeroControl= al.NumeroControl WHERE Sexo = 'H'";
		return ejecutarConsulta($sql);
	}

	public function insertarAlumno($nombre_actividad,$tipo_taller,$no_control,$email,$nombre_carrera,$horario){
		$sql="INSERT INTO alumnotaller (nombre_actividad,tipo_actividad,NumeroControl,correo_institucional,departamento,nombre_carrera,Estatus,Credito,horario)
		VALUES ('$nombre_actividad','$tipo_taller','$no_control','$email','Departamento de Actividades Extraescolares','$nombre_carrera','CURSANDO', 'PENDIENTE','$horario')";
		return ejecutarConsulta($sql);
	}

	public function visualizar(){
		$sql = "SELECT ae.idAlumnoT, ae.NumeroControl , ae.nombre_actividad, ae.tipo_actividad,ae.periodo, ae.valor_numerico, ae.desempeno,ae.Credito, a.ApellidoP, a.ApellidoM, a.Nombre FROM alumnotaller ae INNER JOIN alumnos a ON a.NumeroControl=ae.NumeroControl";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar el periodo, el desemepeño, el valor numerico de la actividad 
	public function editarcon($idAlumnoT,$periodo, $valornum, $desempeño, $credito)
    {
	$sql="UPDATE alumnotaller SET periodo='$periodo', valor_numerico = '$valornum', desempeno = '$desempeño', Credito = '$credito' WHERE idAlumnoT='$idAlumnoT'";
	ejecutarConsulta($sql);
	}
	   
}

?>