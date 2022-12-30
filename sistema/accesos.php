<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITC - SIC</title>
    
</head>
<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Control de Accesos </a>
    </div>
    <hr>

    <div class="table">

    </div>



<!-- Modal -->
<div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label >No. Control</label>
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
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idalumno" name="">
      <label >No. Control</label>
        <input type="text" name="" id="ncontrolu" class="form-control input-sm">
        <label >Apellido Paterno</label>
        <input type="text" name="" id="apellidoPu" class="form-control input-sm">
        <label >Apellido Materno</label>
        <input type="text" name="" id="apellidoMu" class="form-control input-sm">
        <label >Nombre</label>
        <input type="text"  name="" id="nombreu" class="form-control input-sm">
        <label >Correo</label>
        <input type="text"  name="" id="correou" class="form-control input-sm">
        <label >Carrera</label>
        <input type="text"  name="" id="carrerau" class="form-control input-sm">
        <label >Semestre</label>
        <input type="text"  name="" id="semestreu" class="form-control input-sm">
        <label >Estado</label>
        <input type="text"  name="" id="estadou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="updateData">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('.table').load('../assets/components/tablaAccesos.php');
    });

</script>