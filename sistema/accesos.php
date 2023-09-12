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
.errors-container{
    text-align: center;
}


</style>
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

    <div class="input-container">
        <input type="search" name="" id="search" placeholder="Buscar #" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57">
    </div>
    <div class="errors-container" style="display: none; margin: auto, auto;" >
    <p></p>
    </div>
    
<section class="container">
    <div class="panel-body table-responsive" id="listadoregistros">
        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
           <div class="btn box">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAgregar"><i class="fa-solid fa-plus"></i>
            </button>
            </div>

            <div class="btn box">
            <button class="btn" data-bs-toggle="modal" data-bs-target="#Modalagregarm" style="background-color: #474747;"><i class="fa-solid fa-file-csv" style="color:FFFFFF"></i>
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
        <input type="text" name="ncontrol" id="ncontrol" class="form-control input-sm" maxlength="8" onkeypress="return event.charCode>=48 && event.charCode<=57">
        <label >Nombre del Alumno:</label>
        <input type="text"  name="apellidop" id="apellidop" class="form-control input-sm" placeholder="APELLIDO PATERNO">
        <input type="text"  name="apellidom" id="apellidom" class="form-control input-sm" placeholder="APELLIDO MATERNO">
        <input type="text"  name="nombrealumno" id="nombrealumno" class="form-control input-sm" placeholder="NOMBRE">
        <label >Correo Institucional:</label>
        <input type="text"  name="correo" id="correo" class="form-control input-sm" placeholder="numerocontrol@cuautla.tecnm.mx">
        <label >Carrera:</label>
        <select class="form-control input-sm form-select select-picker" name="nombre_carrera" id="nombre_carrera" required>
                <option value="">SELECCIONA CARRERA</option>
                <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                <option value="INGENIERÍA ELECTRONICA">INGENIERÍA ELECTRONICA</option>
                <option value="INGENIERÍA EN GESTIÓN EMPRESARIAL">INGENIERÍA EN GESTIÓN EMPRESARIAL</option>
                <option value="INGENIERÍA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                <option value="INGENIERÍA MECATRÓNICA">INGENIERÍA MECATRÓNICA</option>
                <option value="CONTADOR PÚBLICO">CONTADOR PÚBLICO</option>
            </select> 
        <label >Semestre:</label>
        <select class="form-control input-sm form-select select-picker" name="semestre" id="semestre" required>
                <option value="">SELECCIONA EL SEMESTRE</option>
                <option value="PRIMERO">PRIMER SEMESTRE</option>
                <option value="SEGUNDO">SEGUNDO SEMESTRE</option>
                <option value="TERCERO">TERCER SEMESTRE</option>
                <option value="CUARTO">CUARTO SEMESTRE</option>
                <option value="QUINTO">QUINTO SEMESTRE</option>
                <option value="SEXTO">SEXTO SEMESTRE</option>
                <option value="SEPTIMO">SEPTIMO SEMESTRE</option>
                <option value="OCTAVO">OCTAVO SEMESTRE</option>
                <option value="NOVENO">NOVENO SEMESTRE</option>
                <option value="DECIMO">DECIMO SEMESTRE</option>
                <option value="ONCEAVO">ONCEAVO SEMESTRE</option>
                <option value="DOCEAVO">DOCEAVO SEMESTRE</option>
                <option value="TRECEAVO">TRECEAVO SEMESTRE</option>
            </select> 
        <label >Telefono</label>
        <input type="tel" name="telefonoal" id="telefonoal" class="form-control input-sm" maxlength="13" placeholder="000-000-00-00">
        <label >Sexo</label>
        <select name="sexo" id="sexo" class="form-control input-sm form-select select-picker">
          <option value="">SELECIONA UNA OPCIÓN</option>
          <option value="H">HOMBRE</option>
          <option value="M">MUJER</option>
        </select>
        <label >Contraseña:</label>
        
        <input type="text"  name="pass" id="pass" class="form-control input-sm" readonly>
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
        <input type="text" name="ncontrolu" id="ncontrolu" class="form-control input-sm" readonly>
        <label >Nombre del Alumno: </label>
        <input type="text"  name="nombreu" id="nombreu" class="form-control input-sm" readonly>
        <label >Correo Institucional: </label>
        <input type="text"  name="correou" id="correou" class="form-control input-sm">
        <label >Telefono</label>
        <input type="tel" name="telefono" id="telefono" class="form-control input-sm" maxlength="13">
        <label >Carrera: </label>
        <select class="form-control input-sm form-select select-picker" name="carrerau" id="carrerau" required>
                <option value="">SELECCIONA CARRERA</option>
                <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                <option value="INGENIERÍA ELECTRONICA">INGENIERÍA ELECTRONICA</option>
                <option value="INGENIERÍA EN GESTIÓN EMPRESARIAL">INGENIERÍA EN GESTIÓN EMPRESARIAL</option>
                <option value="INGENIERÍA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                <option value="INGENIERÍA MECATRÓNICA">INGENIERÍA MECATRÓNICA</option>
                <option value="CONTADOR PÚBLICO">CONTADOR PÚBLICO</option>
                <option value="INGENIERÍA CIVIL">INGENIERÍA CIVIL</option>
            </select> 
        <label >Semestre: </label>
        <select class="form-control input-sm form-select select-picker" name="semestreu" id="semestreu" required>
                <option value="">SELECCIONA EL SEMESTRE</option>
                <option value="PRIMERO">PRIMER SEMESTRE</option>
                <option value="SEGUNDO">SEGUNDO SEMESTRE</option>
                <option value="TERCERO">TERCER SEMESTRE</option>
                <option value="CUARTO">CUARTO SEMESTRE</option>
                <option value="QUINTO">QUINTO SEMESTRE</option>
                <option value="SEXTO">SEXTO SEMESTRE</option>
                <option value="SEPTIMO">SEPTIMO SEMESTRE</option>
                <option value="OCTAVO">OCTAVO SEMESTRE</option>
                <option value="NOVENO">NOVENO SEMESTRE</option>
                <option value="DECIMO">DECIMO SEMESTRE</option>
                <option value="ONCEAVO">ONCEAVO SEMESTRE</option>
                <option value="DOCEAVO">DOCEAVO SEMESTRE</option>
                <option value="TRECEAVO">TRECEAVO SEMESTRE</option>
            </select> 
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

<form id="añadir" method="POST">
<div class="modal fade" id="Modalagregarm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-g" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Archivo CSV</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <label>Archivo CSV: </label>
        <input type="file" name="file" class="form-control input-sm" />
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="guardarnuevos">Agregar Datos</button>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</form>


   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
