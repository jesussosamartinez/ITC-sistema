
<?php 
//Incluímos inicialmente la conexión a la base de datos
require_once  "../config/Conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<!-- funcion ventana emergente
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
</script> -->

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
     $sql="SELECT idTaller, tipo_actividad, Nombre, Tipo, Grupo, Turno, condicion
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
      <!-- <h6 class="card-text"><?php  echo $ver  [ '6']; ?></h6>-->
   <!----   <button type="button" class="btn btn-primary" onclick="return Confirmar()" > SELECCIONAR </button>-->
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  SELECCIONAR
</button>
      
    </div>
    
  </div>

<?php
}
 ?>
    </section>




    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Esta seguro de desea inscribirse
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary">INSCRIBIR</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../dist/script.js"></script>
</body>
</html>