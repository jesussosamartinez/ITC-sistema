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
        <a><i class="fa-solid fa-house"></i> <i
                class="fa-solid fa-chevron-right"></i> Actividades Disponibles</a>
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
                        <div class="box-header with-border" style="display: flexbox; align:center; float: fixed; z-index: 2;  background-color: blue; left:50%;">
                            <h1 class="box-title" ><button class="btn btn-success" id="btnagregar"
                                    onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> <a
                                    href="../reportes/rptarticulos.php" target="_blank"><button class="btn btn-info"><i
                                            class="fa fa-clipboard"></i> Reporte</button></a></h1>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="panel-body panel-center" id="listadoregistros">
                            <table id="tbllistadoD"
                                class="display table-striped table-bordered table-condensed table-hover">
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
                        <div class="panel-body" id="formularioregistros">
                            <form name="formulario" id="formulario" method="POST">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Nombre(*):</label>
                                    <input type="hidden" name="idarticulo" id="idarticulo">
                                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Categoría(*):</label>
                                    <select id="idcategoria" name="idcategoria" class="form-control selectpicker"
                                        data-live-search="true" required></select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Stock(*):</label>
                                    <input type="number" class="form-control" name="stock" id="stock" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Descripción:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                                        maxlength="256" placeholder="Descripción">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Imagen:</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen"
                                        accept="image/x-png,image/gif,image/jpeg">
                                    <input type="hidden" name="imagenactual" id="imagenactual">
                                    <img src="" width="150px" height="120px" id="imagenmuestra">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Código:</label>
                                    <input type="text" class="form-control" name="codigo" id="codigo"
                                        placeholder="Código Barras">
                                    <button class="btn btn-success" type="button"
                                        onclick="generarbarcode()">Generar</button>
                                    <button class="btn btn-info" type="button" onclick="imprimir()">Imprimir</button>
                                    <div id="print">
                                        <svg id="barcode"></svg>
                                    </div>
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