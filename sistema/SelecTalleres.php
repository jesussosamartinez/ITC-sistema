<?php 
//Incluímos inicialmente la conexión a la base de datos
require_once  "../config/Conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<script type="text/javascript">
function Confirmar()
{
  var respuesta = conf ("Esta seguro que desea INSCRIBIRSE");
  if(respuesta == true)
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>

<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    <div class="container">
        <div class="navegacion">
            <a><i class="fa-solid fa-house"></i><i class="fa-solid fa-chevron-right"></i> Selección de Talleres</a>
        </div>
        <hr>

        <!-- Table Seleccion de actividades -->

<<<<<<< Updated upstream
        <section class="departamentos" style="padding-top:30px; padding-left:60px; width: auto;">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <br>
                    <h5> DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES </h5>
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            TALLERES DEPORTIVOS
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------TC--------------------->
                <br>
                <h2 class="accordion-header" id="flush-heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                        TALLERES CULTURALES
                    </button>
                </h2>
                <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer content than the first to
                                    show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
=======
    <section class="departamentos" style="top:45%; position:absolute; left:10%; z-index:-5; width: 70%;">
  
  <div class="accordion accordion-flush" id="accordionFlushExample">
  
<div class="accordion-item">
<br><h5> DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES </h5>
  <h2 class="accordion-header" id="flush-headingOne">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      TALLERES DEPORTIVOS
    </button>
  </h2>
  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
  <?php 
     $sql="SELECT idTaller, tipo_actividad, Nombre, Tipo, Grupo, Turno, area_responsable
     FROM talleres WHERE Tipo='TALLER DEPORTIVO' ";

$result=mysqli_query($conexion,$sql);
while($ver=mysqli_fetch_row($result)){
    ?>
 

  <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-text"><?php  echo $ver  [ '2']; ?></h5>
      <h6 class="card-text"><?php  echo $ver  [ '3']; ?></h6>
      <h6 class="card-text"> GRUPO <?php  echo $ver  [ '4']; ?></h6>
      <h6 class="card-text"> TURNO <?php echo $ver  [ '5']; ?></h6>
      <h6 class="card-text"><?php  echo $ver  [ '6']; ?></h6>
      <button type="button" class="btn btn-primary" onclick="return Confirmar()" >SELECCIONAR</button>
      
    </div>
    
  </div>

<?php
}
                ?>
<!------------------TC--------------------->


 

>>>>>>> Stashed changes





    </section>
<<<<<<< Updated upstream

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
=======
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    
>>>>>>> Stashed changes
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../dist/script.js"></script>
</body>
</html>