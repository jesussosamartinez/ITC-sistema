<?php
if(strlen(session_id())<1)
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIC - ITCUAUTLA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../dist/style.css">

    <!-- Librerias -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../assets/librerias/bootstrap/css/bootstrap.css">

    <!-- Alertify -->
    <link rel="stylesheet" type="text/css" href="../assets/librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../assets/librerias/alertifyjs/css/themes/default.css">


    <script src="../assets/librerias/jquery-3.6.3.min.js"></script>
    <script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/librerias/alertifyjs/alertify.js"></script>

</head>
<body>
    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="https://www.cuautla.tecnm.mx/img/itcuautla.png" alt="">
            </div>
            <div class="title">
                <h1>SISTEMA DE INTEGRACIÓN COMPLEMENTARIA</h1>
            </div>

            <div class="dropdowns">
            <a href="../ajax/usuario.php?op=salir"><i class="fa-solid fa-right-from-bracket"> </i>Salir</a>
            </div>
        </div>

        <div class="container__menu">

            <div class="menu">
                <nav>
                    <ul>
                        <?php
                        if($_SESSION['Home']==1)
                        {
                        echo '<li><a href="home.php" id="selected"><i class="fa-solid fa-house"></i></a></li>';
                        }?>
                        <li><a href="#">Información Escolar</a>

                            <ul>
                                <?php if($_SESSION['InfoEscolar Historial']==1){
                                echo '<li><a href="InfoEscolar-HA.php">Historial de Actividades</a></li>';
                                }?>
                                <?php if($_SESSION['InfoEscolar Horario']==1){
                                echo '<li><a href="#">Horario</a></li>';
                                }?>
                                <?php if($_SESSION['InfoEscolar DatosGen']==1){
                                echo '<li><a href="datosgenerales.php">Datos Generales</a></li>';
                               }?>
                            </ul>
                        </li>
                        <li><a href="#">Actividades Complementarias</a>
                            <ul>
                                <li><a href="actividadescomplementarias.php">Actividades Disponibles</a></li>
                                <li><a href="TalleresCul.php">Seleccion de Actividades</a></li>
                                <li><a href="TalleresCiv.php">Talleres Civicos</a></li>
                            </ul>
                        </li>
                        <li><a href="departamentos.php">Departamentos</a>
                            <ul>
                                <li><a
                                        href="https://drive.google.com/file/d/1th22vLXjkuCLp1E9T95BFMsQf69oxcCL/view?usp=sharing">PROGRAMA
                                        DE ACT COMPLEMENTARIAS 2022-2023 BORRADOR</a></li>
                            </ul>
                        </li>
                        <li><a href="constancias.php">Creditos Complementarios</a></li>
                        <?php if($_SESSION['Reporte']==1)
                        {
                            echo '<li><a href="#">Reporte</a>
                            <ul>
                                <li><a href="estadisticas.php">Estadisticas</a></li>
                            </ul>
                            </li>';
                        }?>
                        <?php if($_SESSION['control_acceso']==1)
                        {
                        echo '
                        <li><a href="accesos.php">Control de Accesos</a>
                            <ul>
                                <li><a href="#">Accesos Disponibles</a></li>
                                <li><a href="#">Solicitudes de Accesos</a></li>
                            </ul>
                        </li>';
                        }?>
                    </ul>
                </nav>
            </div>

        </div>

    </header>