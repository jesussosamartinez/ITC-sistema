<?php
if(strlen(session_id())<1)
session_start();

require "header.php";

if($_SESSION['Home']==1)
{
 ?>


<style>
.informacion {
    position: absolute;
    top: 33%;
    left: 20%;
    color: #916F09;
    font-family: 'Raleway';
    font-weight: 800;
    text-transform: uppercase;
    z-index: -2;
    font-size: 17px;
}

#hr {
    position: absolute;
    width: 28%;
    top: 35%;
    left: 17%;
    color: #000000;
    z-index: -3;
}

#texto {
    color: black;
    font-family: 'Montserrat';
    text-align: justify;
    width: 40%;
    position: absolute;
    z-index: -3;
    padding-top: 5rem;
    padding-left: 5rem;
    font-weight: 500;
}

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


    <script src="../assets/js/nav.js" type="text/javascript"></script>

    </body>
    <?php 
}
ob_end_flush();
?>