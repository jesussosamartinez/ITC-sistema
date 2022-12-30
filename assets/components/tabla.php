<?php
 require "../../config/Conexion.php";
?>
<style>
.panel-body {
    position: fixed;
    top: 45%;
    left: 13%;
}
</style>

<div class="panel-body table-responsive" id="listadoregistros">
    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Grupo</th>
            <th>Turno</th>
            <th>Estado</th>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT idTaller, Nombre, Grupo, Turno, condicion
                FROM talleres WHERE Tipo='TALLER CIVICO'";

                $result=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($result)){
                ?>
            <tr>
                <td></td>
                <td><?php echo $ver[1]?></td>
                <td>SERVICIOS EXTRAESCOLARES</td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><span class="badge text-bg-success">Activado</span>
                    <span class="badge text-bg-danger">Desactivado</span>
                </td>
            </tr>
            <?php
}
                ?>
        </tbody>
        <tfoot>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Grupo</th>
            <th>Turno</th>
            <th>Estado</th>
        </tfoot>
    </table>
</div>