<?php
 require "../../config/Conexion.php";
?>


<div class="panel-body table-responsive" id="listadoregistrosES">
    <table id="tlistaE" class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <th>Depatamento</th>
            <th>Carrera</th>
            <th>ClaveTaller</th>
            <th>H</th>
            <th>M</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT idE, idDepartamento, idCarrera, ClaveTaller, H, M, Total
                FROM estadistica ";

                $resultado=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($resultado)){
                ?>
                <tr>
                <td></td>
                <td><?php echo $ver["idE"];?></td>
                <td><?php echo $ver["idDepartamento"];?></td>
                </td>
            </tr>
            
            <?php
}
                ?>
        </tbody>
        <tfoot>
        <th>Depatamento</th>
            <th>Carrera</th>
            <th>ClaveTaller</th>
            <th>H</th>
            <th>M</th>
            <th>Total</th>
        </tfoot>
    </table>
</div>

