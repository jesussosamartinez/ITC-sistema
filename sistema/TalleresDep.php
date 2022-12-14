<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Deportivos- SIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../dist/style.css">

<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Inicio <i
                class="fa-solid fa-chevron-right"></i> Talleres Deportivos</a>
    </div>
    <hr>


    <div class="panel-body table-responsive" id="listadoregistros">
        <table id="tbllistadoD" class=" striped bordered condensed hover">
            <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th>Turno</th>
                <th>Estado</th>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th>Turno</th>
                <th>Estado</th>
            </tfoot>
        </table>
    </div>
    
    <!-- Bootstrap -->
    <script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
    <!-- Jquey -->
    <script src="../assets/librerias/jquery-3.6.3.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="../dist/script.js"></script>
    <script src="scripts/talleres.js" type="text/javascript"></script>

</body>
</html>