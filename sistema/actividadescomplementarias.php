
<style>
.box-header {
    display: contents;
    float: none;
    box-sizing: border-box;
}

.box-title {
    padding-top: 1em;
}
</style>

    <?php 
    require 'header.php'
    ?>


    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Actividades Disponibles</a>
    </div>
    <hr>

    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <?php if($_SESSION['idRol']==1){
                            echo '
                        <div class="box-header with-border">
                            <h1 class="box-title"><button class="btn btn-success" id="btnagregar"
                                    onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> 
                                    <a href="../reportes/rptarticulos.php" target="_blank"><button class="btn btn-info"><i
                                    class="fa fa-clipboard"></i> Reporte</button></a></h1>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoD"
                                class="table  table-striped table-bordered table-condensed table-hover">
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
                        </div>';
                        } ?>
                        <?php if($_SESSION['idRol']==3){ echo '
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoDA"
                                class="table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <th>Nombre</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </tfoot>
                            </table>
                        </div>'; } ?>
                        <div class="panel-body" id="formularioregistros">
                            <form name="formulario" id="formulario" method="POST">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Nombre de la Actividad(*):</label>
                                    <input type="hidden" name="idTaller" id="idTaller">
                                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Tipo de Actividad(*):</label>
                                    <select class="form-control select-picker" name="tipo_actividad" id="tipo_actividad"
                                        required>
                                        <option value="ACTIVIDAD EXTRAESCOLAR">ACTIVIDAD EXTRAESCOLAR</option>
                                        <option value="FOMENTO A LA LECTURA">FOMENTO A LA LECTURA</option>
                                        <option value="EVENTOS ACADÉMICOS">EVENTOS ACADÉMICOS</option>
                                        <option value="CONSTRUCCIÓN DE PROTOTIPOS Y DESARROLLO TECNOLÓGICO">CONSTRUCCIÓN DE PROTOTIPOS Y DESARROLLO TECNOLÓGICO</option>
                                        <option value="PROYECTO DE INVESTIGACIÓN">PROYECTO DE INVESTIGACIÓN</option>
                                        <option value="PRODUCTIVIDAD LABORAL">PRODUCTIVIDAD LABORAL</option>
                                        <option value="COMITÉ ORGANIZADOR DE EVENTOS LOCALES, REGIONALES Y NACIONALES DEL TECNM">COMITÉ ORGANIZADOR DE EVENTOS LOCALES, REGIONALES Y NACIONALES DEL TECNM</option>
                                        <option value="HABILIDADES SOCIOEMOCIONALES">HABILIDADES SOCIOEMOCIONALES</option>
                                        <option value="PUEBLOS ORIGINARIOS">PUEBLOS ORIGINARIOS</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Grupo:</label>
                                    <input type="text" class="form-control" name="Grupo" id="Grupo" maxlength="256"
                                        placeholder="Grupo">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Turno:</label>
                                    <input type="text" class="form-control" name="Turno" id="Turno" maxlength="256"
                                        placeholder="Turno">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i
                                            class="fa fa-save"></i> Guardar</button>

                                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i
                                            class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <!--Fin centro -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
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