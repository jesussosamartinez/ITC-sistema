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
                        <div class="box-header with-border">
                            <h1 class="box-title">
                                <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)" ><i class="fa fa-plus-circle"></i> Agregar</button> 
                                </h1>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoD"
                                class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Opciones</th>
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
                                    <th>Opciones</th>
                                    <th>Tipo de Actividad</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </tfoot>
                            </table>
                        </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                            <div class="form-group">
                                <label>TIPO DE ACTIVIDAD (*):</label>
                                <input type="hidden" name="idTaller" id="idTaller">
                                <select class="form-control select-picker" name="tipo_actividad" id="tipo_actividad"
                                    required>
                                    <option value="">SELECCIONAR TIPO DE ACTIVIDAD</option>
                                    <option value="ACTIVIDAD EXTRAESCOLAR">ACTIVIDAD EXTRAESCOLAR</option>
                                    <option value="FOMENTO A LA LECTURA">FOMENTO A LA LECTURA</option>
                                </select>
                            </div>
                            <div class="form-group col-lg col-md col-sm col-xs" id="miinput" hidden>
                                <label>NOMBRE DEL TALLER(*):</label>
                                    <select class="form-control select-picker" name="Tipo" id="Tipo"
                                    required >
                                    <option value="">SELECCIONAR TIPO DE TALLER</option>
                                    <option value="TALLER DEPORTIVO">TALLER DEPORTIVO</option>
                                    <option value="TALLER CULTURAL">TALLER CULTURAL</option>
                                    <option value="TALLER CIVICO">TALLER CIVICO</option>
                                    <option value="CONCURSO DE OFRENDAS">CONCURSO DE OFRENDAS</option>
                                    <option value="CONCURSO DE DISFRACES">CONCURSO DE DISFRACES ALUSIVOS A LAS LEYENDAS Ó PERSONAJES MEXICANOS DEL DÍA DE MUERTOS</option>
                                    <option value="TALLER EN CENTRO DE INFORMACIÓN">TALLER EN CENTRO DE INFORMACIÓN</option>
                                </select>    
                            </div>
                            <div class="form-group col-lg col-md col-sm col-xs">
                                <label>Descripción:</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" maxlength="50"
                                    placeholder="DESCRIPCIÓN">
                            </div>
                            <div class="form-group col-lg col-md col-sm col-xs" id="grupo" hidden >
                                <label>Grupo:</label>
                                <input type="text" class="form-control" name="Grupo" id="Grupo" maxlength="256"
                                    placeholder="Grupo">
                            </div>
                            <div class="form-group col-lg col-md col-sm col-xs">
                                <label>Turno:</label>
                                <input type="text" class="form-control" name="Turno" id="Turno" maxlength="256"
                                    placeholder="Turno">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <button class="btn btn-primary" type="submit" id="btnGuardar" data-bs-dismiss="modal"><i class="fa fa-save"></i>
                                    Guardar</button>

                                <button class="btn btn-danger" onclick="cancelarform()" type="button"><i
                                        class="fa fa-arrow-circle-left"></i> Cancelar</button>
                            </div>
                        </form>
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
 



<script>
$(document).ready(function() {
    $('#tipo_actividad').change(function(e) {
        if ($(this).val() === "ACTIVIDAD EXTRAESCOLAR" || "FOMENTO A LA LECTURA") {
            $('#miinput').prop("hidden", false);
        } else {
            $('#miinput').prop("hidden", true);
        }
    })
});

$(document).ready(function() {
    $('#tipo_actividad').change(function(e) {
        if ($(this).val() === "FOMENTO A LA LECTURA") {
            $('#grupo').prop("hidden", false);
        } else {
            $('#grupo').prop("hidden", true);
        }
    })
});

$(document).ready(function() {
    $('#Tipo').change(function(e) {
        if ($(this).val() === "TALLER DEPORTIVO" || "TALLER CULTURAL" || "TALLER CIVICO") {
            $('#grupo').prop("hidden", false);
        } else {
            $('#grupo').prop("hidden", true);
        }
    })
});

</script>

</body>
</html>