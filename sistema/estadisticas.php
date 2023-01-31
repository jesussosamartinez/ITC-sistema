<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE ESTADISTICAS-SIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">

</head>
<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"> </i> ESTADISTICA</a>
    </div>
    <hr>

     <!--TE--------------------------------------------------------------------------------------------------------->
     <div class="panel-body panel-center" id="listadoregistros">
        <table id="tbllistadoD" class="display table-striped table-bordered table-condensed table-hover">
            <thead>
                <th>Departamento</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>H</th>
                <th>M</th>
                <th>Actividad Complementaria</th>
                <th>Total</th>
                
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <th>Departamento</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>H</th>
                <th>M</th>
                <th>Actividad Complementaria</th>
                <th>Total</th>
            </tfoot>
        </table>
    </div>
