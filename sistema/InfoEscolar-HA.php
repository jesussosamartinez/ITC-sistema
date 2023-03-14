<style>
.content {
    z-index: 1;
    margin-left: auto;
    margin-right: auto;
}

tbody {
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
}

thead,
th {
    font-size: 11px;
    height: 10px;
    text-transform: uppercase;
}
</style>

<!-- Aqui va hacer informacion de las actividades del alumno-->
<header>
    <?php 
    require 'header.php'
    ?>
</header>

<div class="navegacion">
    <a><i class="fa-solid fa-house"></i><i class="fa-solid fa-chevron-right"></i> Historial de Actividades</a>
</div>
<hr>
<?php if($_SESSION['idRol']==3){
                            echo '
<section class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover" style="width:100%"   >
        <thead>
            <th># Folio</th>
            <th>Actividad Complementaria</th>
            <th>Departamento</th>
            <th>Estatus</th>
            <th>Crédito Complementario</th>
        </thead>
        <tbody id="tblactividad" >
           
        </tbody>
    </table>
</div>
</section>';} ?>

<?php if($_SESSION['idRol']==1){
                            echo '
<section class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover" style="width:100%">
        <thead>
            <th>Opciones</th>
            <th>Folio</th>
            <th>No. Control</th>
            <th>Nombre del Alumno</th>
            <th>Actividad Complementaria</th>
            <th>Carrera</th>
            <th>Departamento</th>
            <th>Estatus</th>
            <th>Crédito Complementario</th>
        </thead>
        <tbody id="tblhistorial">
           
        </tbody>
    </table>
</div>
</section>';} ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="scripts/datos.js" type="text/javascript"></script>


</body>
</html>