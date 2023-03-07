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

/*CARROUSEL CON IMAGENES DEL LAS ACTIVIDADES COMPLEMETARIAS*/
.tarjetas {
  position: absolute;
  top: 50%;
  left: 75%;
  width: 190px;
  height: 210px;
  margin: 0;
  -webkit-perspective: 800px;
		  perspective: 800px;
  -webkit-transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
}

.tarjetas__contenido {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
		  transform-style: preserve-3d;
  -webkit-transform: translateZ(-182px) rotateY(0);
		  transform: translateZ(-182px) rotateY(0);
  -webkit-animation: carrusel 10s infinite cubic-bezier(1, 0.015, 0.295, 1.225) forwards;
		  animation: carrusel 10s infinite cubic-bezier(1, 0.015, 0.295, 1.225) forwards;
}

.tarjetas__elemento {
  position: absolute;
  top: 0;
  left: 0;
  width: 190px;
  height: 310px;
  border-radius: 6px;
}

.tarjetas__elemento:nth-child(1) {
  background: #394fd5;
  -webkit-transform: rotateY(0) translateZ(182px);
		  transform: rotateY(0) translateZ(182px);
}
.tarjetas__elemento:nth-child(2) {
  background: #39d570;
  -webkit-transform: rotateY(120deg) translateZ(182px);
		  transform: rotateY(120deg) translateZ(182px);
}
.tarjetas__elemento:nth-child(3) {
  background: #f0091f;
  -webkit-transform: rotateY(240deg) translateZ(182px);
		  transform: rotateY(240deg) translateZ(182px);
}
@-webkit-keyframes carrusel {
  0%,  17.5% {
    -webkit-transform: translateZ(-182px) rotateY(0);
		    transform: translateZ(-182px) rotateY(0);
  }
  27.5%, 45% {
    -webkit-transform: translateZ(-182px) rotateY(-120deg);
		    transform: translateZ(-182px) rotateY(-120deg);
  }
  55%, 72.5% {
    -webkit-transform: translateZ(-182px) rotateY(-240deg);
		    transform: translateZ(-182px) rotateY(-240deg);
  }
  82.5%, 100% {
    -webkit-transform: translateZ(-182px) rotateY(-360deg);
		    transform: translateZ(-182px) rotateY(-360deg);
  }
}

@keyframes carrusel {
  0%,  17.5% {
    -webkit-transform: translateZ(-182px) rotateY(0);
		    transform: translateZ(-182px) rotateY(0);
  }
  27.5%, 45% {
    -webkit-transform: translateZ(-182px) rotateY(-120deg);
		    transform: translateZ(-182px) rotateY(-120deg);
  }
  55%, 72.5% {
    -webkit-transform: translateZ(-182px) rotateY(-240deg);
		    transform: translateZ(-182px) rotateY(-240deg);
  }
  82.5%, 100% {
    -webkit-transform: translateZ(-182px) rotateY(-360deg);
		    transform: translateZ(-182px) rotateY(-360deg);
  }
}
</style>
<header>
    <?php 
    require 'header.php';
    ?>
</header>


<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container">
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

                        <figure class="tarjetas">
                            <div class="tarjetas__contenido">
                                <div class="tarjetas__elemento">
                                    <h1>Elemento 1</h1>
                                </div>
                                <div class="tarjetas__elemento">
                                    <h1>Elemento 2</h1>
                                </div>
                                <div class="tarjetas__elemento">
                                    <h1>Elemento 3</h1>
                                </div>
                            </div>
                        </figure>

                        <!--Fin centro -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->





<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>