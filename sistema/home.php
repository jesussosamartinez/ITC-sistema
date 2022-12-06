<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SIC</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
  <header>
    <?php 
    require 'header.html'
    ?>
 </header>
    

 <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio</a>
    </div>
    <hr>

    <section class="container">
        <div class="text">
          <p >BIENVENIDO <br> <?php echo $_SESSION['email']?></p>
    </div>
    </section>
   
    <script src="../assets/js/nav.js" type="text/javascript"></script>
</body>
</html>