<?php
ob_start();
if (strlen(session_id()) < 1) 
  session_start();


    require "../vendor/autoload.php";

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Reader\Xls;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (!isset($_SESSION["email"]))
{
  echo 'Debe ingresar al sistema correctamente para visualizar el reporte';
}
else
{
if ($_SESSION['Reporte']==1)
{

    $nombre_actividad = $_POST["nombre_actividad"];
    $periodo = $_POST["periodo"];
    $horario = $_POST["horario"];

    $fila = 14;


    //Comenzamos a crear las filas de los registros según la consulta mysql
    require_once "../modelos/AlumnoTaller.php";
    $alumnotaller = new AlumnoTaller();

    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load("ListasAsistencias.xlsx");

    
    try {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle("Hoja1");
        $sheet->setCellValue("F8",utf8_decode($nombre_actividad));
        $sheet->setCellValue("F9",utf8_decode($periodo));
        $sheet->setCellValue("F10",utf8_decode($horario));

        $rspta = $alumnotaller->listadoAE($nombre_actividad, $horario,$periodo);
        while($reg= $rspta->fetch_object())
        {  
          $num = 1;
          $no = $reg->NumeroControl;
          $alumnoname =$reg->ApellidoP." ". $reg->ApellidoM." ". $reg->Nombre;

          $sheet->setCellValue("A".$fila, utf8_decode($num));
          $sheet->setCellValue('B'.$fila, utf8_decode($no));
          $sheet->setCellValue('D'.$fila, utf8_decode($alumnoname));

          $fila++;
          $num++;
        }
      

      $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
      $writer->save("ListasActividadComplementaria.xlsx");
      
      $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="'. urlencode("Listas $nombre_actividad.xlsx").'"');
      ob_clean();
      return $writer->save("php://output");
        
  
    } catch (\Exception $e){
        echo 'Ocurrió un error al intentar abrir el archivo '. $e;
    }

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
