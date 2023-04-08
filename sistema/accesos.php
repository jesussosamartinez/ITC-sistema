<style>
  table{
    text-transform: uppercase;
    font-family: 'Montserrat';
    font-size: 13px;
    text-align: center;
  }

  input, label {
    text-align: center;
  }

  label, .modal-title {
    text-transform: uppercase;
    font-weight: 700;
  }

</style>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Control de Accesos </a>
    </div>
    <hr>

<section class="container">
    <div class="panel-body table-responsive" id="listadoregistros">
        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
           <div class="btn box">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAgregar"><i class="fa-solid fa-plus"></i>
            </button>
            </div>
        <thead>
                <th>Opciones</th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Contraseña</th>
            </thead>
            <tbody id="tblaccesos">
                
            </tbody>
            <tfoot>
                <th>Opciones</th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Contraseña</th>
            </tfoot>
        </table>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label >No. Control: </label>
        <input type="text" name="" id="ncontrol" class="form-control input-sm">
        <label >Apellido Paterno</label>
        <input type="text" name="" id="apellidoP" class="form-control input-sm">
        <label >Apellido Materno</label>
        <input type="text" name="" id="apellidoM" class="form-control input-sm">
        <label >Nombre</label>
        <input type="text"  name="" id="nombre" class="form-control input-sm">
        <label >Correo</label>
        <input type="text"  name="" id="correo" class="form-control input-sm">
        <label >Carrera</label>
        <input type="text"  name="" id="carrera" class="form-control input-sm">
        <label >Semestre</label>
        <input type="text"  name="" id="semestre" class="form-control input-sm">
        <label >Estado</label>
        <input type="text"  name="" id="estado" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="guardarnuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalEdicion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-g">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <input type="text" hidden id="idalumno" name="idalumno">
        <label >No. Control: </label>
        <input type="text" name="" id="ncontrolu" class="form-control input-sm">
        <label >Nombre del Alumno: </label>
        <input type="text"  name="" id="nombreu" class="form-control input-sm">
        <label >Correo Institucional: </label>
        <input type="text"  name="" id="correou" class="form-control input-sm">
        <label >Carrera: </label>
        <input type="text"  name="" id="carrerau" class="form-control input-sm">
        <label >Semestre: </label>
        <input type="text"  name="" id="semestreu" class="form-control input-sm">
        <label >Contraseña: </label>
        <input type="text"  name="" id="password" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="updateData">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/acceso.js" type="text/javascript"></script>
</body>
</html>
