<style>

#formularioregistros{
    align-items: center;
}

#fomulario{
            display: flex;
            position: relative;
            justify-content: center;
            margin: 0 auto;
            width:auto;
           
        }
</style>

<?php 
    require 'header.php';
    ?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <div class="navegacion">
            <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Actividades Disponibles</a>
        </div>
        <hr>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoDA"
                                class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Tipo de Actividad</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <th>Tipo de Actividad</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </tfoot>
                            </table>
                        </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<!-- Bootstrap -->
<script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
<!-- Jquey -->
<script src="../assets/librerias/jquery-3.6.3.min.js"></script>
<!-- DataTable -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="scripts/talleres.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.js"></script>



</body>
</html>