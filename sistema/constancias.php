<!DOCTYPE html>
<html lang="es">
<style>
        .content {
            position: fixed;
            width: 80%;
            top: 38%;
            margin-top: 1rem;
            margin-left: 7rem;
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
    <title>ITC - SIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i
                class="fa-solid fa-chevron-right"></i> Constancias </a>
    </div>
    <hr>

    <section class="content">
        <div class="table table-responsive">
        <table class="table-light">
            <thead>
                <tr>
                    <th scope="col">Opciones</th>
                    <th scope="col">Nombre del Alumno</th>
                    <th scope="col">Actividad Complementaria</th>
                    <th scope="col">Departamento Responsable</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Desempeño</th>
                    <th scope="col">Crédito Complementario</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td></td>
                    <td></td>
                    <td>FUTBOLL</td>
                    <td>Actividades ExtraEscolares</td>
                    <td> 1°</td>
                    <td>BUENO</td>
                    <td><button>PDF</button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </section>


    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>

    <!-- jsPDF library -->
    <script src="js/jsPDF/dist/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../PDF/constancia.js"></script>
</body>
</html>