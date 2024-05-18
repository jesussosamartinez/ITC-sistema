<?php
if(strlen(session_id())<1)
session_start();

    require_once "../vendor/autoload.php";

    require_once "../modelos/AlumnoTaller.php";
    
    $alumnos = new AlumnoTaller();

    $idAlumnoT = isset($_POST["idAlumnoT"])? limpiarCadena($_POST["idAlumnoT"]): "";

    $alumno = $alumnos->constancia($idAlumnoT);
    $list = $alumno->fetch_object();


    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Style\Font;
    use PhpOffice\PhpWord\TemplateProcessor;

    $templateWord = new TemplateProcessor('constancia.docx');

     $nombre_alumno = $list->ApellidoP." ".$list->ApellidoM." ".$list->Nombre;
     $numerocontrol = $list->NumeroControl;
     $nombrecarrera = $list->nombre_carrera;
     $nombre_actividad = $list->nombre_actividad;
     $desempeño = $list->desempeno;
     $valornumerico = $list->valor_numerico;
     $periodo = $list->periodo;
     $nombredepto = $_SESSION['nombred'];
     $jdepto = $_SESSION['jdepto'];

     if(($list->P1)==0){
          $P1_1 = 'X';
     }elseif(($list->P1)==1){
          $P1_2 = 'X';
     }elseif(($list->P1)==2){
          $P1_3 = 'X';
     }elseif(($list->P1)==3){
          $P1_4 = 'X';
     }else{
          $P1_5 = 'X';
     }

     if(($list->P2)==0){
          $P2_1 = 'X';
     }elseif(($list->P2)==1){
          $P2_2 = 'X';
     }elseif(($list->P2)==2){
          $P2_3 = 'X';
     }elseif(($list->P2)==3){
          $P2_4 = 'X';
     }else{
          $P2_5 = 'X';
     }

     if(($list->P3)==0){
          $P3_1 = 'X';
     }elseif(($list->P3)==1){
          $P3_2 = 'X';
     }elseif(($list->P3)==2){
          $P3_3 = 'X';
     }elseif(($list->P3)==3){
          $P3_4 = 'X';
     }else{
          $P3_5 = 'X';
     }

     if(($list->P4)==0){
          $P4_1 = 'X';
     }elseif(($list->P4)==1){
          $P4_2 = 'X';
     }elseif(($list->P4)==2){
          $P4_3 = 'X';
     }elseif(($list->P4)==3){
          $P4_4 = 'X';
     }else{
          $P4_5 = 'X';
     }

     if(($list->P5)==0){
          $P5_1 = 'X';
     }elseif(($list->P5)==1){
          $P5_2 = 'X';
     }elseif(($list->P5)==2){
          $P5_3 = 'X';
     }elseif(($list->P5)==3){
          $P5_4 = 'X';
     }else{
          $P5_5 = 'X';
     }

     if(($list->P6)==0){
          $P6_1 = 'X';
     }elseif(($list->P6)==1){
          $P6_2 = 'X';
     }elseif(($list->P6)==2){
          $P6_3 = 'X';
     }elseif(($list->P6)==3){
          $P6_4 = 'X';
     }else{
          $P6_5 = 'X';
     }

     if(($list->P7)==0){
          $P7_1 = 'X';
     }elseif(($list->P7)==1){
          $P7_2 = 'X';
     }elseif(($list->P7)==2){
          $P7_3 = 'X';
     }elseif(($list->P7)==3){
          $P7_4 = 'X';
     }else{
          $P7_5 = 'X';
     }


     // --- Asignamos valores
     $templateWord->setValue('nombre_alumno', $nombre_alumno);
     $templateWord->setValue('departamento', $nombredepto);
     $templateWord->setValue('jdepto', $jdepto);
     $templateWord->setValue('numerocontrol', $numerocontrol);
     $templateWord->setValue('nombrecarrera', $nombrecarrera);
     $templateWord->setValue('actividadcomplementaria', $nombre_actividad);
     $templateWord->setValue('desempeño', $desempeño);
     $templateWord->setValue('valornumerico', $valornumerico);
     $templateWord->setValue('periodo', $periodo);

     $templateWord->setValue('p1_0', $P1_1);
     $templateWord->setValue('p1_1', $P1_2);
     $templateWord->setValue('p1_2', $P1_3);
     $templateWord->setValue('p1_3', $P1_4);
     $templateWord->setValue('p1_4', $P1_5);

     $templateWord->setValue('p2_0', $P2_1);
     $templateWord->setValue('p2_1', $P2_2);
     $templateWord->setValue('p2_2', $P2_3);
     $templateWord->setValue('p2_3', $P2_4);
     $templateWord->setValue('p2_4', $P2_5);

     $templateWord->setValue('p3_0', $P3_1);
     $templateWord->setValue('p3_1', $P3_2);
     $templateWord->setValue('p3_2', $P3_3);
     $templateWord->setValue('p3_3', $P3_4);
     $templateWord->setValue('p3_4', $P3_5);

     $templateWord->setValue('p4_0', $P4_1);
     $templateWord->setValue('p4_1', $P4_2);
     $templateWord->setValue('p4_2', $P4_3);
     $templateWord->setValue('p4_3', $P4_4);
     $templateWord->setValue('p4_4', $P4_5);

     $templateWord->setValue('p5_0', $P5_1);
     $templateWord->setValue('p5_1', $P5_2);
     $templateWord->setValue('p5_2', $P5_3);
     $templateWord->setValue('p5_3', $P5_4);
     $templateWord->setValue('p5_4', $P5_5);

     $templateWord->setValue('p6_0', $P6_1);
     $templateWord->setValue('p6_1', $P6_2);
     $templateWord->setValue('p6_2', $P6_3);
     $templateWord->setValue('p6_3', $P6_4);
     $templateWord->setValue('p6_4', $P6_5);

     $templateWord->setValue('p7_0', $P7_1);
     $templateWord->setValue('p7_1', $P7_2);
     $templateWord->setValue('p7_2', $P7_3);
     $templateWord->setValue('p7_3', $P7_4);
     $templateWord->setValue('p7_4', $P7_5);
     
     $templateWord->saveAs('Documento02.docx');
?>