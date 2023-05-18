<?php
//Activamos el almacenamiento en el buffer
ob_start();
if (strlen(session_id()) < 1) 
  session_start();

if (!isset($_SESSION["email"]))
{
  echo 'Debe ingresar al sistema correctamente para visualizar el reporte';
}
else
{
if ($_SESSION['Reporte']==1)
{


//Inlcuímos a la clase PDF_MC_Table
require('PDF_MC_Table.php');

$nombre_actividad = $_POST["nombre_actividad"];
$periodo = $_POST["periodo"];
$horario = $_POST["horario"];

//Comenzamos a crear las filas de los registros según la consulta mysql
require_once "../modelos/AlumnoTaller.php";
$alumnotaller = new AlumnoTaller();


//Instanciamos la clase para generar el documento pdf
$pdf=new PDF_MC_Table();
 
//Agregamos la primera página al documento pdf
$pdf->AddPage();
 
//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;
 
//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100,6,'LISTA DE ASISTENCIA DE '.utf8_decode($nombre_actividad),1,0,'C'); 
$pdf->Ln(10);
 
//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232,232,232); 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'#',1,0,'C',1); 
$pdf->Cell(40,6,utf8_decode('N°. Control'),1,0,'C',1);
$pdf->Cell(68,6,utf8_decode('Nombre del Estudiante'),1,0,'C',1);
 
$pdf->Ln(10);


$rspta = $alumnotaller->listadoAE(utf8_decode($nombre_actividad), utf8_decode($horario) ,utf8_decode($periodo));

//Table with rows and columns
$pdf->SetWidths(array(10,40,68));

while($reg= $rspta->fetch_object())
{  
    $no = $reg->NumeroControl;
    $alumnoname =$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre;
 	
 	$pdf->SetFont('Arial','',10);
    $pdf->Row(array(1,utf8_decode($no),utf8_decode($alumnoname)));
}
 
//Mostramos el documento pdf
$pdf->Output();

?>

<?php
}
else
{
  echo 'No tiene permiso para visualizar el reporte';
}

}
ob_end_flush();
?>