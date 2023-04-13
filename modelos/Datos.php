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
    $sql="SELECT * FROM alumnos WHERE Correo= '".$_SESSION['email']."'"; 
    return ejecutarConsultaSimpleFila($sql);
}

public function alumnocomp($NumeroControl){
	$sql="SELECT NumeroControl, ApellidoP, ApellidoM, Nombre, Correo, ClaveCarrera FROM alumnos WHERE NumeroControl='$NumeroControl'"; 
	return ejecutarConsultaSimpleFila($sql);
}
 
public function mostraractividad(){
	$sql = "SELECT nombre_actividad, tipo_actividad , departamento, Estatus, Credito FROM alumnotaller WHERE correo_institucional='".$_SESSION['email']."'";
	return ejecutarConsulta($sql);	
}

public function acceso(){
	$sql = "SELECT a.idAlumno, a.ApellidoP, a.ApellidoM, a.Nombre, a.NumeroControl, a.Correo, a.Semestre, a.ClaveCarrera, u.Password, a.Telefono FROM alumnos a INNER JOIN usuarios u ON a.Correo = u.email";
	return ejecutarConsulta($sql);
}

public function editaracceso($Semestre, $Telefono, $carrera, $idAlumno){
	$sql = "UPDATE alumnos SET Semestre = '$Semestre', Telefono = '$Telefono', ClaveCarrera = '$carrera' WHERE idAlumno='$idAlumno' ";
	return ejecutarConsulta($sql); 
}   

public function añadir_alumno($nocontrol, $ApellidoP, $ApellidoM, $nombre, $email, $semestre, $carrera, $Telefono, $sexo){
	$sql = "INSERT INTO alumnos (NumeroControl, ApellidoP, ApellidoM, Nombre, Correo, Semestre, ClaveCarrera, Telefono, Sexo, idRol )
	VALUES ('$nocontrol','$ApellidoP','$ApellidoM','$nombre','$email','$semestre','$carrera','$Telefono','$sexo','3')";
	return ejecutarConsulta($sql);
}

public function añadir_user($email, $password){
	$sql = "INSERT INTO usuarios (email , Password, idRol) VALUES ('$email','$password', '3')";
	return ejecutarConsulta($sql);
}

}
?>