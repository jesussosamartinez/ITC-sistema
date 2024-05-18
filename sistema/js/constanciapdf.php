<?php

require_once("includes/PHPWord/vendor/autoload.php");

$inputfile = "Documento02.docx";

$path = realpath(realpath(__DIR__) . '/includes/dompdf');

echo "realpath: " . $path;

\PhpOffice\PhpWord\Settings::setPdfRendererPath($path);
\PhpOffice\PhpWord\Settings::setPdfRendererName(\PhpOffice\PhpWord\Settings::PDF_RENDERER_DOMPDF);

//Load temp file
$phpWord = \PhpOffice\PhpWord\IOFactory::load($inputfile); 

//Save it
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
$xmlWriter->save('result.pdf');

?>