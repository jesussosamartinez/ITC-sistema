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
	$sql="INSERT INTO alumnotaller (nombre_actividad,tipo_actividad,NumeroControl,correo_institucional,departamento,nombre_carrera,Estatus,horario,periodo)
		VALUES ('$nombre_actividad','$tipo_actividad','$NumeroControl','$correo_institucional','$departamento','$nombre_carrera','CURSANDO','n/a', 'PENDIENTE')";
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

	//funcion para busqueda en las listas
	public function buscar($searchs){
		$sql = "SELECT t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito, t.periodo, t.valor_numerico, t.desempeno FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE a.NumeroControl LIKE '%$searchs%'";
		return ejecutarConsulta($sql);
	}

	public function estadisticas($periodo){
		$sql = "SELECT sexo, COUNT(sexo) num, a1.nombre_carrera, a1.periodo, a1.Estatus from alumnos a INNER JOIN alumnotaller a1 ON a.NumeroControl = a1.NumeroControl WHERE a1.periodo = '$periodo' && a1.Estatus = 'ACREDITADO' group by sexo, a1.nombre_carrera order by a1.nombre_carrera ASC";
		return ejecutarConsulta($sql);
	}

	public function insertarAlumno($nombre_actividad,$tipo_taller,$no_control,$email,$nombre_carrera,$horario){
		$sql="INSERT INTO alumnotaller (nombre_actividad,tipo_actividad,NumeroControl,correo_institucional,departamento,nombre_carrera,Estatus,horario)
		VALUES ('$nombre_actividad','$tipo_taller','$no_control','$email','Departamento de Actividades Extraescolares','$nombre_carrera','CURSANDO','$horario')";
		return ejecutarConsulta($sql);
	}

	//modal de evaluación de desempeño
	public function visualizar(){
		$sql = "SELECT ae.idAlumnoT, ae.NumeroControl , ae.nombre_actividad, ae.tipo_actividad,ae.periodo, ae.valor_numerico, ae.desempeno,ae.Credito, a.ApellidoP, a.ApellidoM, a.Nombre, ae.P1, ae.P2, ae.P3, ae.P4, ae.P5, ae.P6, ae.P7 FROM alumnotaller ae 
		INNER JOIN alumnos a ON a.NumeroControl=ae.NumeroControl";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para guardar el periodo, el desempeño, el valor numerico de la actividad 
	public function guardarcon($idAlumnoT,$periodo, $valornum, $desempeño, $credito, $p1, $p2, $p3, $p4, $p5, $p6, $p7)
    {
	$sql="UPDATE alumnotaller SET periodo='$periodo', valor_numerico = '$valornum', desempeno = '$desempeño', Credito = '$credito', P1 = '$p1', P2 = '$p2', P3 = '$p3', P4 = '$p4', P5 = '$p5', P6 = '$p6', P7 = '$p7'
	 WHERE idAlumnoT='$idAlumnoT'";
	ejecutarConsulta($sql);
	}
	
	public function listadoAE($nombre_actividad, $horario , $periodo)
	{
		$sql= "SELECT a1.NumeroControl, a2.ApellidoP ,a2.ApellidoM, a2.Nombre FROM alumnotaller a1 JOIN alumnos a2 ON a1.NumeroControl = a2.NumeroControl  WHERE a1.nombre_actividad= '$nombre_actividad' AND a1.horario='$horario' AND a1.periodo = '$periodo'";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesSistemas()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Sistemas y Computación' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesExtraexcolares()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Actividades Extraescolares' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesCienciasBasicas()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Ciencias Básicas' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividasEconomicoAdministrativas()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Ciencias Económico-Administrativas' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesElectricaElectronica()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Electrica y Electrónica' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesGestionTecnologica()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Gestión Tecnología y Vinculación' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesMetalMecanica()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Metal Mecánica' ";
		return ejecutarConsulta($sql);
	}
	
	public function mostrarActividadesCentroInformacion()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Centro de Información' ";
		return ejecutarConsulta($sql);
	}

	public function mostrarActividadesServiciosEscolares()
	{
		$sql="SELECT t.idAlumnoT, t.NumeroControl ,a.ApellidoP,a.ApellidoM, a.Nombre ,t.nombre_actividad, t.tipo_actividad, t.nombre_carrera, t.departamento, t.Estatus, t.Credito  FROM alumnotaller t INNER JOIN alumnos a ON a.NumeroControl = t.NumeroControl WHERE departamento = 'Departamento de Servicios Escolares' ";
		return ejecutarConsulta($sql);
	}

}

?>