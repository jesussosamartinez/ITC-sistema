<?php
 require "../../config/Conexion.php";
?>

<style>
#listadoregistros {
    /*width: 90%;*/
    position: absolute;
    top: 45%;
    left: 6%;
    font-family: 'Raleway';
    font-size: 15px;
    z-index: -3;
    text-transform: uppercase;
}
</style>

<div class="container">
    <div class="panel-body table-responsive" id="listadoregistros">
        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
           <caption>
            <button class="btn btn-primary fa fa-plus" data-bs-toggle="modal" data-bs-target="#ModalAgregar">
                Agregar nuevo
            </button>
           </caption> 
        <thead>
                <th>Opciones</th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT idAlumno, ApellidoP, ApellidoM, Nombre, NumeroControl, Correo, Semestre, ClaveCarrera 
                FROM alumnos";

                $result=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($result)){
                ?>
                <tr>
                    <td>
                        <button class="btn btn-warning" onclick="" data-bs-toggle="modal" data-bs-target="#ModalEdicion"><i class="fa fa-pencil"></i>
                        </button>
                       <!-- <button class="btn btn-danger" onclick=""><i class="fa fa-close"></i></button>
                        <button class="btn btn-warning" onclick=""><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-primary" onclick=""><i class="fa fa-check"></i></button>-->
                    </td>
                    <td><?php echo $ver[4]?></td>
                    <td><?php echo $ver[1].' '.$ver[2].' '.$ver[3]?></td>
                    <td><?php echo $ver[5]?></td>
                    <td><?php echo $ver[7]?></td>
                    <td><?php echo $ver[6]?></td>
                    <td><span class="badge text-bg-success">Activado</span>
                       <!-- <span class="badge text-bg-danger">Desactivado</span>-->
                    </td>
                </tr>
                <?php
}
                ?>
            </tbody>
            <tfoot>
                <th>Opciones</th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Estado</th>
            </tfoot>
        </table>
    </div>
</div>