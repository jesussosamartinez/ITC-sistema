<?php 
 require "../config/Conexion.php";
if(strlen(session_id())<1)
session_start();
$alumno = mysqli_query($conexion, "SELECT * FROM alumnos WHERE correo= '".$_SESSION['email']."' ");
$alumno  = mysqli_fetch_array($alumno);
$nombre=$alumno['Nombre'];
$apellidoP=$alumno['ApellidoP'];
$apellidoM=$alumno['ApellidoM'];
$email=$alumno['Correo'];
$NoControl=$alumno['NumeroControl'];
$semestre=$alumno['Semestre'];
$telefono=$alumno['Telefono'];
?>
<body>
    <!-- Aqui va la informacion del alumno-->
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio <i class="fa-solid fa-chevron-right"></i> Datos Generales</a>
    </div>
    <hr>

    <form class="custom-form"  id="datosgenerales">
      
        <div class="formgroup nombre ">
          <label for="">NOMBRE</label>
          <input class="inputcenter" type="text"  name="nombre" <?php if(isset($nombre)) { ?> value="<?php echo $nombre; ?>" <?php } ?> readonly>
        </div>
        <div class="formgroup apellidoP ">
          <label for="">Apellido Paterno</label>
          <input class="inputcenter" type="text"  name="apellidoP" <?php if(isset($apellidoP)) { ?> value="<?php echo $apellidoP; ?>" <?php } ?> readonly >
        </div>
        <div class="formgroup apellidoM ">
          <label for="">Apellido Materno</label>
          <input class="inputcenter" type="text"  name="apellidoM" <?php if(isset($apellidoM)) { ?> value="<?php echo $apellidoM; ?>" <?php } ?> readonly>
        </div>
        <div class="formgroup correoinstitucional">
          <label for="">CORREO INSTITUCIONAL</label>
          <input class="inputcenter" type="email" name="email" <?php if(isset($email)) { ?> value="<?php echo $email; ?>" <?php } ?> readonly>
        </div>
        <div class="formgroup numcontrol">
          <label for="">No. Control</label>
          <input class="inputcenter" type="text" name="nocontrol" <?php if(isset($NoControl)) { ?> value="<?php echo $NoControl; ?>" <?php } ?> readonly>
        </div>
        <div class="formgroup lic">
          <label for="">LICENCIATURA</label>
          <input class="inputcenter" type="text" name="licenciatura" id="licenciatura">
        </div>
        <div class="formgroup semestre">
          <label for="">SEMESTRE</label>
          <input class="inputcenter" type="text" name="semestre" <?php if(isset($semestre)) { ?> value="<?php echo $semestre; ?>" <?php } ?> readonly>
        </div>
        <div class="formgroup telefono">
          <label for="">TELEFONO</label>
          <input class="inputcenter" type="text" name="telefono" <?php if(isset($telefono)) { ?> value="<?php echo $telefono; ?>" <?php } ?> readonly>
        </div>
</form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>