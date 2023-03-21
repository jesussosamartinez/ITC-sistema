
<style>
.content {
    z-index: 1;
    margin-left: auto;
    margin-right: auto;
}

tbody {
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
}

thead,
th {
    font-size: 11px;
    height: 10px;
    text-transform: uppercase;
}
</style>
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

    <section class="STalleres" style="top:45%; position:absolute; left:10%; z-index:-5; width: 70%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoDA"
                                class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Tipo de Actividad</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Grupo</th>
                                    <th>Turno</th>
                                    <th>Estado</th>
                                </thead>
                                <?php 
     $sql="SELECT idTaller, tipo_actividad, Nombre, Tipo, Grupo, Turno, condicion
     FROM talleres ";
$result=mysqli_query($conexion,$sql);
while($ver=mysqli_fetch_row($result)){
    ?>
                                <tbody>
                                <th><?php  echo $ver  [ '1']; ?></th>
                                    <th><?php  echo $ver  [ '2']; ?></th>
                                    <th><?php  echo $ver  [ '3']; ?></th>
                                    <th><?php  echo $ver  [ '4']; ?></th>
                                    <th><?php  echo $ver  [ '5']; ?></th>
                                    <th>
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" Onclick="Close">
                                      SELECCIONAR
                                      </button></th>     
                                                   
                                </tbody>
                                <?php
}
 ?>
                            </table>
                        </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
    </section><!-- /.content -->

    <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="clic">
  <span aria-hidden="true">&times;</span>
</button>


    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selección de Taller</h5>
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