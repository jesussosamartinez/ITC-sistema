<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Escolar- SIC</title>
</head>
<body>
    <!-- Aqui va la informacion del alumno o departamento-->
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio <i class="fa-solid fa-chevron-right"></i> Datos Generales</a>
    </div>
    <hr>

    <form class="custom-form" method="get"   id="datosgenerales">
      
        <div class="formgroup nombre ">
          <label for="">NOMBRE</label>
          <input class="inputcenter" type="text"  name="nombre" id="nombre">
        </div>
        <div class="formgroup apellidoP ">
          <label for="">Apellido Paterno</label>
          <input class="inputcenter" type="text"  name="apellidoP" id="apellidoP">
        </div>
        <div class="formgroup apellidoM ">
          <label for="">Apellido Materno</label>
          <input class="inputcenter" type="text"  name="apellidoM" id="apellidoM">
        </div>
        <div class="formgroup correoinstitucional">
          <label for="">CORREO INSTITUCIONAL</label>
          <input class="inputcenter" type="email" name="email" id="email">
        </div>
        <div class="formgroup numcontrol">
          <label for="">No. Control</label>
          <input class="inputcenter" type="text" name="nocontrol" id="nocontrol">
        </div>
        <div class="formgroup lic">
          <label for="">LICENCIATURA</label>
          <input class="inputcenter" type="text" name="licenciatura" id="licenciatura">
        </div>
        <div class="formgroup semestre">
          <label for="">SEMESTRE</label>
          <input class="inputcenter" type="text" name="semestre" id="semestre">
        </div>
        <div class="formgroup telefono">
          <label for="">TELEFONO</label>
          <input class="inputcenter" type="text" name="telefono" id="telefono">
        </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../dist/script.js"></script>

</body>
</html>