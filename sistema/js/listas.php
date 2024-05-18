<?php
        header("Content-Disposition: attachment; filename=ListasActividadComplementaria.xlsx;");
        echo file_get_contents('ListasActividadComplementaria.xlsx');
?>