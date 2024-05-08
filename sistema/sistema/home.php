<?php
if(strlen(session_id())<1)
session_start();

require "header.php";

if($_SESSION['Home']==1)
{
 ?>


<style>



</style>


<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container">
           

            <section class="contain">
                <div class="text">
                    <p>BIENVENIDO <br> <?php echo $_SESSION['email']?></p>
                </div>
            </section>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="informacion">
                            <a> ACTIVIDADES COMPLEMENTARIAS </a>
                        </div>
                        <hr id="hr">
                        <div id="texto">
                            <p>Son todas aquellas actividades que realiza el estudiante en beneficio de su formación
                                integral con el objetivo de complementar su formación y desarrollo de competencias
                                profesionales. <br>
                                <br> Las actividades complementarias pueden ser: tutoría, actividades extraescolares,
                                proyecto de investigación, proyecto integrador, participación en eventos académicos,
                                productividad laboral, emprendedurismo, fomento a la lectura, construcción de prototipos
                                y desarrollo tecnológico, conservación al medio ambiente, participación en ediciones,
                                fomento a la cultura y/o aquellas que la institución considere.
                            </p>
                        </div>

                        <!--Fin centro -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section><!-- /.content -->


    <!-- /.content <script src="../assets/js/nav.js" type="text/javascript"></script>-->

    </body>
    <?php 
}
ob_end_flush();
?>