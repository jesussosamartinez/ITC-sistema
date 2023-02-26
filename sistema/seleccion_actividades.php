<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";
?>
<style>
#buscadoractividades {
    padding-top: 5rem;
    padding-left: 3rem;
    align-items: center;
}

#formsalum {
    display: row;
    position: relative;
    justify-content: center;
    margin: 0 auto;
    width: auto;

}

.selec {
    font-family: 'Montserrat';
    font-weight: bold;
    color: #916F09;
    text-align: center;
    padding-left: 3rem;
}

label {
    font-family: 'Montserrat';
    font-weight: 800;
    color: #916F09;
    padding-top: 5px;
}

input::placeholder {
    text-transform: uppercase;
    font-size: 10px;
    text-align: center;
    font-family: 'Montserrat';
}

.inputcenter {
    text-align: center;
    font-family: 'Montserrat';
}

#registro {
    padding-top: 3rem;
}

tbody{
    font-family:'Montserrat';
}

</style>

<script type="text/javascript">
    $("#formsalum").on('submit',function(e)
{
    e.preventDefault();
    var numcontrol=$("#numcontrol").val();

    $(document).load("seleccion_actividades.php",{numcontrol});
    

});

</script>
    <?php  
    require 'header.php';
?>
    <div class="container-fluid">
        <div class="navegacion">
            <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Actividades Complementarias
            </a>
        </div>
        <hr>

        <h1 class="selec">SELECCIÓN DE ACTIVIDADES</h1>

        <div class="panel-body" id="buscadoractividades">
            <form class="row g-3" name="formulario" id="formsalum" method="POST">
                <div class="form-group col-auto">
                    <label for="numcontrol">Numero de Control:</label>
                </div>
                <div class="form-group col-auto">
                    <input type="text" class="form-control mb-3 inputcenter" name="numcontrol" id="numcontrol"
                        maxlength="8" onkeyup="this.value=Numeros(this.value)" placeholder="Número de Control" required>
                </div>
                <div class="form-group col-auto">
                    <button class="btn btn-primary mb-3 position-relative n-1 " type="submit" value="Buscar" id="btnBuscar" onclick="mostrar()"><i class="fa fa-search"></i>
                        Buscar</button>
                </div>
            </form>
        </div>

        <div class="box-title" id="registro" >
            <h6 class="selec" style="font-weight: 800;">DATOS DEL ALUMNO</h6>
            <table class="table-light" width="700" align="center" id="buscar">
                <thead>
                    <tr align="center">
                        <th width="16%"> No. Control </th>
                        <th width="35%"> Nombre del Alumno </th>
                        <th width="25%"> Correo Institucional </th>
                        <th width="25%"> Carrera </th>
                    </tr>
                </thead>
                <?php

                $NumeroControl = $_REQUEST['numcontrol'];
                $sql="SELECT NumeroControl, ApellidoP, ApellidoM, Nombre, Correo, ClaveCarrera FROM alumnos WHERE NumeroControl='$NumeroControl'";

                $result=mysqli_query($conexion,$sql);
                while($data=mysqli_fetch_row($result)){
                ?>
                <tbody>
                    <tr align="center">
                        <td width="16%"><?php echo $data[0]; ?></td>
                        <td width="35%"><?php echo $data[1].' '.$data[2].' '.$data[3]; ?></td>
                        <td width="25%"><?php echo $data[4]; ?> </td>
                        <td width="25%"><?php echo $data[5]; ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>

            <h6 class="selec" style="font-weight: 800; margin-top: 3rem;"> EVENTOS ACADÉMICOS </h6>
            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">DEPTO. DE CIENCIAS BÁSICAS </th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" class="small_center" style="z-n1"><a href="">Ciclo de conferencias del cambio climático.</a> <br> Valor: 1 Crédito</td>
                        <td height="80" class="small_center"><a href="">Feria de Ciencias</a><br>Valor: 1 Crédito</td>
                        <td height="80" class="small_center"><a href="">Asesorías
                            Académicas</a><br> Valor: 1 Crédito</td>
                        <td height="80" class="small_center"><a href="">Concurso de
                            Ciencias Básicas en su etapa local</a><br>Valor: 1 Crédito</td>
                    </tr>
                </tbody>
            </table>

            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="10"> INDUSTRIAL / DEPTO. DE METAL – MECÁNICA</th>
                </thead>
                <tbody>
                    <tr>    
                        <td height="80" width="90" class="small_center" >1. “La quinta disciplina” <br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >2. “Presentaciones efectivas”<br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >3. “Control Estadístico del Proceso” (CEP) con Minitab<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >4. “Líneas de producción” <br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >5. “Supervisión de la producción” <br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >6. “Requisitos para elaborar una línea de producción”<br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >7. “Distribución de Probabilidad normal”<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >8. “QC Story” <br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >9. “Soft Skills para Ingenieros”<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >10. Elaboración de cuadros enfocados a las metodologías de Ingeniería Industrial” <br>Valor: 1 Crédito</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="10">Ciclo de conferencias para el área de Ingeniería Industrial</td>
                    </tr>
                </tbody>
            </table>

            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">DEPTO. DE CIENCIAS ECONÓMICO-ADMINISTRATIVAS </th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" width="90" class="small_center">Cursos y Talleres del Colegio de Contadores<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center">Emprendedurismo<br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center">Diplomados CONDUSEF<br> Valor: 1 Crédito</td>
                    </tr>
                </tbody>
            </table>


            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">DEPTO. DE SISTEMAS Y COMPUTACIÓN</th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" width="90" class="small_center" >Hackathon, Desarrollo de SW o Prototipo, Rally, Cartel, Competencia Estudiantil<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >Impartición de Cursos y/o Talleres<br>Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >Cursos y Talleres<br> Valor: 1 Crédito</td>
                        <td height="80" width="90" class="small_center" >Asesoría Académica<br> Valor: 1 Crédito</td>
                    </tr>
                </tbody>
            </table>

            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">DEPTO. DE ELÉCTRICA Y ELECTRÓNICA</th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" width="90" class="small_center" style="text-align: center;" >Mantenimiento<br> Valor: 1 Crédito</td>
                    </tr>
                </tbody>
            </table>

            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">DEPARTAMENTO CORRESPONDIENTE</th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" width="90" class="small_center" id="verde">CONSTRUCCIÓN DE PROTOTIPOS Y DESARROLLO TECNOLÓGICO<br> Valor: 1 crédito</td>
                        <td height="80" width="90" class="small_center" id="verde">PROYECTO DE INVESTIGACIÓN<br> Valor: 1 crédito</td>
                        <td height="80" width="90" class="small_center" id="verde">PRODUCTIVIDAD LABORAL<br> Valor: 1 crédito</td>
                    </tr>
                </tbody>
            </table>

            <table align="center" class="table table-bordered">
                <thead>
                    <th class="medium_negrita_center" colspan="4">SUBDIRECCIÓN ACADÉMICA</th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" width="90" class="small_center" colspan="2">HABILIDADES SOCIOEMOCIONALES<br> Valor: 1 crédito</td>
                        <td height="80" width="90" class="small_center" colspan="2">PUEBLOS ORIGINARIOS<br> Valor: 1 crédito</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
    <!-- Jquey -->
    <script src="../assets/librerias/jquery-3.6.3.min.js"></script>
    <script src="scripts/verificacionnumeros.js"></script>
</body>
</html>