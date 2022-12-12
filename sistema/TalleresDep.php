<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Deportivos- SIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet/less" type="text/css" href="../css/t.Less">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../dist/style.css">
</head>
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
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Grupo</th>
                            <th>Turno</th>
                            <th>Opciones</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Grupo</th>
                            <th>Turno</th>
                            <th>Opciones</th>
                          </tfoot>
                        </table>
                    </div>

<!-- Table Taller Dep -->
    <main>
        <table>
            <thead>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Departamento
                    </th>
                    <th>
                        SELECCIONAR
                    </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan='3'>
                        Year: 2022
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td data-title='Nombre'>
                        FUTBOL SOCCER - MAT
                    </td>
                    <td data-title='Departamento'>
                        SERVICIOS EXTRAEXCOLARES
                    </td>
                    <td class='select'>
                        <a class='button ver' href='#'>
                            ver
                        </a>
                        <a class='button' href='#'>
                            Inscribirse
                        </a>
                    </td>
                </tr>
                <tr>
                    <td data-title='Nombre'>
                        FUTBOL - VESP
                    </td>
                    <td data-title='Departamento'>
                    SERVICIOS EXTRAEXCOLARES
                    </td>
                    <td class='select'>
                        <a class='button ver' href='#'>
                            ver
                        </a>
                        <a class='button inscribirse' href='#'>
                            Inscribirse
                        </a>
                    </td>
                </tr>
                <tr>
                    <td data-title='Nombre'>
                        AJEDREZ - MAT
                    </td>
                    <td data-title='Departamento'>
                    SERVICIOS EXTRAEXCOLARES
                    </td>
                    <td class='select'>
                    <a class='button ver' href='#'>
                            ver
                        </a>
                        <a class='button' href='#'>
                            Inscribirse
                        </a>
                        <a class='button' href='#'>
                            Activar
                        </a>
                    </td>
                </tr>
                <tr>
                    <td data-title='Nombre'>
                        AJEDREZ - VESP
                    </td>
                    <td data-title='Departamento'>
                    SERVICIOS EXTRAEXCOLARES
                    </td>
                    <td class='select'>
                    <a class='button ver' href='#'>
                            ver
                        </a>
                        <a class='button' href='#'>
                            Inscribirse
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class='detail'>
            <div class='detail-container'>
                <dl>
                    <dt>
                        Nombre
                    </dt>
                    <dd>
                        FUTBOL SOCCER - MAT
                    </dd>
                    <dt>
                        Departamento
                    </dt>
                    <dd>
                    SERVICIOS EXTRAEXCOLARES
                    </dd>
                    <dt>
                        CUPO DISPONIBLE
                    </dt>
                    <dd>
                        30
                    </dd>
                    <dt>
                        HORAS MAX
                    </dt>
                    <dd>
                        555
                    </dd>
                    <dt>
                        Actualizacion
                    </dt>
                    <dd>
                        2022
                    </dd>
                    <dt>
                        Notes
                    </dt>
                    <dd>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                        eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                        posuere a, pede.
                    </dd>
                </dl>
            </div>
            <div class='detail-nav'>
                <button class='close'>
                    Cerrar
                </button>
            </div>
        </div>
    </main>
    <!-- partial -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../dist/script.js"></script>
    <script src="scripts/talleres.js" type="text/javascript"></script>
</body>
</html>