<?php
if(strlen(session_id())<1)
session_start();

    require_once "../vendor/autoload.php";


    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Style\Font;
    use PhpOffice\PhpWord\TemplateProcessor;

    $templateWord = new TemplateProcessor('constancia.docx');

     $nombre_alumno = $_POST['nombre_alumno'];
     //$nombredep = $_POST["nombredep"];
     //$numerocontrol = $_POST["numerocontrol"];
     
     //$nombrecarrera = $_POST['nombrecarrera'];
     //$nombre_actividad = $_POST["nombre_actividad"];
     //$nivel_desempeño = $_POST["nivel_desempeño"];
     //$valornum = $_POST["valornum"];
     //$periodo = $_POST["periodo"];
     $nombredepto = $_SESSION['nombred'];


     // --- Asignamos valores
     $templateWord->setValue('nombre_alumno', $nombre_alumno);
     $templateWord->setValue('departamento', $nombredepto);
     /*$templateWord->setValue('nombredep', $direccion);
     $templateWord->setValue('numerocontrol', $municipio);
     $templateWord->setValue('nombrecarrera', $provincia);
     $templateWord->setValue('nombre_actividad', $cp);
     $templateWord->setValue('nivel_desempeño', $telefono);
     $templateWord->setValue('valornum', $provincia);
     $templateWord->setValue('periodo', $cp);
*/
     $templateWord->saveAs('Documento02.docx');
     header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
        echo file_get_contents('Documento02.docx');
?>