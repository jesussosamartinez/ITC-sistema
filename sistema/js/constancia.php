<?php 
 header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
 echo file_get_contents('Documento02.docx');
 

 
?>
