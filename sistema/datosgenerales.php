<?php 
 //Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["email"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
if ($_SESSION['InfoEscolar DatosGen']==1)
{
?>
<body>

    

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Inicio <i
                class="fa-solid fa-chevron-right"></i> Datos Generales</a>
    </div>
    <hr>
    <!-- Aqui va la informacion del alumno-->
    <form class="custom-form" id="datosgenerales">

        <div class="formgroup nombre ">
            <label for="">NOMBRE</label>
            <input class="inputcenter" type="text" name="nombre" id="nombre" readonly>
        </div>
        <div class="formgroup apellidoP ">
            <label for="">Apellido Paterno</label>
            <input class="inputcenter" type="text" name="apellidoP" id="apellidop" readonly>
        </div>
        <div class="formgroup apellidoM ">
            <label for="">Apellido Materno</label>
            <input class="inputcenter" type="text" name="apellidoM" id="apellidom" readonly>
        </div>
        <div class="formgroup correoinstitucional">
            <label for="">CORREO INSTITUCIONAL</label>
            <input class="inputcenter" type="email" name="email" id="email" readonly>
        </div>
        <div class="formgroup numcontrol">
            <label for="">No. Control</label>
            <input class="inputcenter" type="text" name="nocontrol" id="numerocontrol" readonly>
        </div>
        <div class="formgroup lic">
            <label for="">LICENCIATURA</label>
            <input class="inputcenter" type="text" name="licenciatura" id="licenciatura" readonly>
        </div>
        <div class="formgroup semestre">
            <label for="">SEMESTRE</label>
            <input class="inputcenter" type="text" name="semestre" id="semestre" readonly>
        </div>
        <div class="formgroup telefono">
            <label for="">TELEFONO</label>
            <input class="inputcenter" type="text" name="telefono" id="telefono" readonly>
        </div>
    </form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/datos.js" type="text/javascript"></script>

    <?php
}
}
ob_end_flush();
?>
</body>
</html>