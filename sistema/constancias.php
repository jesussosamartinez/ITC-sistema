<!DOCTYPE html>
<html lang="es">
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
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Inicio <i
                class="fa-solid fa-chevron-right"></i> Constancias </a>
    </div>
    <hr>


    <div class="btn" style="top: 40%; position: absolute;">
        <button type="submit" id="generar">Generar</button>
    </div>



    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>

    <!-- jsPDF library -->
    <script src="js/jsPDF/dist/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../PDF/constancia.js"></script>
</body>
</html>