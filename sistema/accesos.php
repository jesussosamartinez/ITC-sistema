<style>
  table{
    text-transform: uppercase;
    font-family: 'Montserrat';
    font-size: 13px;
    text-align: center;
  }

  input, label , select{
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
                <th><i class="fa-solid fa-file-lines"></i></th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Telefono</th>
                <th>Contraseña</th>
            </thead>
            <tbody id="tblaccesos">
                
            </tbody>
            <tfoot>
                <th><i class="fa-solid fa-file-lines"></i></th>
                <th>No.Control</th>
                <th>Nombre del Alumno</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>semestre</th>
                <th>Telefono</th>
                <th>Contraseña</th>
            </tfoot>
        </table>
    </div>
</section>


<!-- Modal -->
<form id="añadirdatos" method="POST">
<div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-g" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <label >No. Control: </label>
        <input type="text" name="ncontrol" id="ncontrol" class="form-control input-sm" maxlength="8">
        <label >Nombre del Alumno:</label>
        <input type="text"  name="apellidop" id="apellidop" class="form-control input-sm" placeholder="APELLIDO PATERNO">
        <input type="text"  name="apellidom" id="apellidom" class="form-control input-sm" placeholder="APELLIDO MATERNO">
        <input type="text"  name="nombrealumno" id="nombrealumno" class="form-control input-sm" placeholder="NOMBRE">
        <label >Correo Institucional:</label>
        <input type="text"  name="correo" id="correo" class="form-control input-sm" placeholder="numerocontrol@cuautla.tecnm.mx">
        <label >Carrera:</label>
        <select class="form-control input-sm" name="nombre_carrera" id="nombre_carrera" required>
                <option value="">SELECCIONA CARRERA</option>
                <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                <option value="INGENIERÍA ELECTRONICA">INGENIERÍA ELECTRONICA</option>
                <option value="INGENIERÍA EN GESTIÓN EMPRESARIAL">INGENIERÍA EN GESTIÓN EMPRESARIAL</option>
                <option value="INGENIERÍA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                <option value="INGENIERÍA MECATRÓNICA">INGENIERÍA MECATRÓNICA</option>
                <option value="CONTADOR PÚBLICO">CONTADOR PÚBLICO</option>
            </select> 
        <label >Semestre:</label>
        <input type="text"  name="semestre" id="semestre" class="form-control input-sm">
        <label >Telefono</label>
        <input type="tel" name="telefonoal" id="telefonoal" class="form-control input-sm" maxlength="13" placeholder="000-000-00-00">
        <label >Sexo</label>
        <select name="sexo" id="sexo" class="form-control input-sm">
          <option value="">SELECIONA UNA OPCIÓN</option>
          <option value="H">HOMBRE</option>
          <option value="M">MUJER</option>
        </select>
        <label >Password:</label>
        <input type="text"  name="pass" id="pass" class="form-control input-sm">
        <button type="button" class="btn btn-success" onclick="generarcontraseña()">GENERAR CONTRASEÑA</button>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="guardarnuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal -->
<form id="actualizardatos" method="POST">
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
        <input type="text" name="ncontrolu" id="ncontrolu" class="form-control input-sm">
        <label >Nombre del Alumno: </label>
        <input type="text"  name="nombreu" id="nombreu" class="form-control input-sm">
        <label >Correo Institucional: </label>
        <input type="text"  name="correou" id="correou" class="form-control input-sm">
        <label >Telefono</label>
        <input type="tel" name="telefono" id="telefono" class="form-control input-sm" maxlength="13">
        <label >Carrera: </label>
        <input type="text"  name="carrerau" id="carrerau" class="form-control input-sm">
        <label >Semestre: </label>
        <input type="text"  name="semestreu" id="semestreu" class="form-control input-sm">
        <label >Contraseña: </label>
        <input type="text"  name="password" id="password" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
</form>

   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/acceso.js" type="text/javascript"></script>

    <script>

    function generarcontraseña(){
      const minus = "abcdefghijklmnñopqrstuvwxyz";
const mayus = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

var contraseña = '';

for (var i = 1; i <= 8; i++) {
  var eleccion = Math.floor(Math.random() * 3 + 1);

  if (eleccion == 1) {
    var caracter1 = minus.charAt(Math.floor(Math.random() * minus.length));
    contraseña += caracter1;
  } else {
    if (eleccion == 2) {
      var caracter2 = mayus.charAt(Math.floor(Math.random() * mayus.length));
      contraseña += caracter2;
    } else {
      var num = Math.floor(Math.random() * 10);

      contraseña += num;
    }
  }

}

$('#pass').val(contraseña);
    }
    </script>
</body>
</html>
