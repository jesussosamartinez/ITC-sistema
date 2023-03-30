<style>
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


.input-container {
    margin-left: 100px;
    background-color: #fff;
    padding: 25px;
    border-radius: 8px;
}

.input-container input[type="search"] {
    padding: 12px 20px;
    border-radius: 5px;
    border: none;
    background-color: rgb(221, 221, 221);
    width: 150px;
}

.bold {
    font-weight: bold;
    color: #1B396A;
}

.form-group {
    width: 26rem;
    text-align: center;
    margin-left: 2em;
}


</style>

<!-- Aqui va hacer informacion de las actividades del alumno-->
<header>
    <?php 
    require 'header.php'
    ?>
</header>

<div class="navegacion">
    <a><i class="fa-solid fa-house"></i><i class="fa-solid fa-chevron-right"></i> Historial de Actividades</a>
</div>
<hr>
<?php if($_SESSION['idRol']==3){
                            echo '
<section class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover" style="width:100%">
        <thead>
            <th>Actividad Complementaria</th>
            <th>Departamento</th>
            <th>Estatus</th>
            <th>Crédito Complementario</th>
        </thead>
        <tbody id="tblactividad" >
           
        </tbody>
    </table>
</div>
</section>';} ?>
<p></p>
<?php if($_SESSION['idRol']==1){
echo '
<main>
    <div class="input-container">
        <input type="search" name="" id="search" placeholder="Buscar">
    </div>
    <div class="errors-container" style="display: none; margin: auto, auto;  " >
    <p></p>
    </div>
    <section class="container">
        <div class="table-responsive" id="tblContainer" >
            <table class="table table-bordered table-hover" style="width:100%" id="tableContainer">
                <thead>
                    <th>Opciones</th>
                    <th>No. Control</th>
                    <th>Nombre del Alumno</th>
                    <th>Actividad Complementaria</th>
                    <th>Carrera</th>
                    <th>Departamento</th>
                    <th>Estatus</th>
                </thead>
                <tbody id="tblhistorial">
           
                </tbody>
            </table>
        </div>
    </section>
</main>
<!-- Modal -->
<form id="actualizardatos" method="POST">
<div class="modal fade" id="ModalEdicion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="height: 520px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >HISTORIAL DE ACTIVIDADES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
<div class="modal-body" >
<div id="datos_ajax"></div>
      <div class="form-group">
          <label>No. Control:</label>
          <input type="text" name="idAlumnoT" class="form-control" id="idAlumnoT" hidden>
          <input type="text" name="no_control" class="form-control" id="no_control" readonly>
      </div>
      <div class="form-group" id="miinput">
          <label>NOMBRE DEL ALUMNO(*):</label>
          <input type="text" class="form-control" name="nombrealumno" id="nombrealumno" readonly>
      </div>
      <div class="form-group">
          <label>ACTIVIDAD COMPLEMENTARIA</label>
         <input type="text" class="form-control" name="actividadcomplementaria" id="actividadcomplementaria" readonly> 
      </div>
      <div class="form-group col-lg col-md">
          <label>CARRERA:</label>
          <input type="text" class="form-control" name="carrera" id="carrera" maxlength="8"
              placeholder="carrera" readonly>
      </div>
      <div class="form-group col-lg col-md" >
          <label>DEPARTAMENTO:</label>
          <input type="text" class="form-control" name="departamento" id="departamento"
              maxlength="256" readonly>
      </div>
      <div class="form-group col-lg col-md col-sm col-xs" >
          <label>Estatus:</label>
              <select class="form-control select-picker" name="estatus_" id="estatus" required>
  <option value="CURSANDO">CURSANDO</option>
  <option value="FINALIZADO">FINALIZADO</option>
  <option value="ACREDITADO">ACREDITADO</option>
</select>     
      </div>

      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Actualizar</button>
     </div>
     </div>
    </div>
  </div>
</div>
<form>
';} ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="scripts/datos.js" type="text/javascript"></script>
<script src="scripts/historial.js" type="text/javascript"></script>
</body>
</html>