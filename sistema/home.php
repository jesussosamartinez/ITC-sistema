<?php
if(strlen(session_id())<1)
session_start();


require "header.php";
 ?>
 <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio</a>
    </div>
    <hr>

    <section class="container">
        <div class="text">
          <p >BIENVENIDO <br> <?php echo $_SESSION['email']?></p>
    </div>
    </section>

    <script type="text/javascript" src="scripts/usuario.js"></script>
    <script src="../assets/js/nav.js" type="text/javascript"></script>
   
</body>
<?php 

ob_end_flush();
?>
