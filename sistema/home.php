<?php
if(strlen(session_id())<1)
session_start();

require "header.php";

if($_SESSION['HOME']==0)
{
 ?>
 <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio</a>
    </div>
    <hr>

    <section class="contain">
        <div class="text">
          <p >BIENVENIDO <br> <?php echo $_SESSION['email']?></p>
    </div>
    </section>

    
    <script src="../assets/js/nav.js" type="text/javascript"></script>
   
</body>
<?php 
}
ob_end_flush();
?>
