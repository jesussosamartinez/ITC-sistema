<!DOCTYPE html>
<html lang="es">
    <style>
        .content {
            position: fixed;
            width: 80%;
            top: 38%;
            margin-top: 2rem;
            margin-left: 5rem;
            z-index: -5;
                }
       tbody{
        text-align:center;
       }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Escolar- SIC</title>


</head>
<body>
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
    <section class="content">
        <table class="table-light">
            <thead>
                <tr>
                    <th scope="col"># Folio</th>
                    <th scope="col">Actividad Complementaria</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Credito Complementario</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">ACOMSERVEXTRA-001</th>
                    <td>FUTBOLL</td>
                    <td>SERVICIOS EXTRAESCOLARES</td>
                    <td>ACTIVO</td>
                    <td>PENDIENTE</td>
                </tr>
            </tbody>
        </table>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>
</html>