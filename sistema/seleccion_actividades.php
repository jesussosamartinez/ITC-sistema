<style>
#buscadoractividades {
    padding-top: 5rem;
    align-items: center;
}


#formsalum {
    display: row;
    position: relative;
    justify-content: center;
    margin: auto auto auto auto;
    width: auto;

}

.selec {
    font-family: 'Montserrat';
    font-weight: bold;
    color: #916F09;
    text-align: center;
    padding-left: 3rem;
    font-size: 25px;
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
    padding-top: 1rem;
}

td {
    font-weight: 800;
}

table {
    margin-right: auto;
    margin-left: auto;
    border: 1px;
}

.form-group{
    width: 26rem; 
    text-align: center; 
    margin-left: 2em;
}


</style>

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

    <div class="panel-body" id="buscadoractividades" style="display: block;">
        <form class="row g-3" name="formulario" id="formsalum" method="POST">
            <div class="form-group col-auto">
                <label for="numcontrol">Numero de Control:</label>
            </div>
            <div class="form-group col-auto">
                <input type="text" class="form-control mb-3 inputcenter" name="numcontrol" id="numcontrol" maxlength="8"
                    onkeyup="this.value=Numeros(this.value)" placeholder="Número de Control" required>
            </div>
            <div class="form-group col-auto">
                <button class="btn btn-primary mb-3 position-relative n-1 " type="submit" value="Buscar"
                    id="btnBuscar"><i class="fa fa-search"></i>
                    Buscar</button>
            </div>
        </form>
    </div>
    <section id="actividades" style="display: none;">
        <div class="box-title" id="registro">
            <h6 class="selec" style="font-weight: 800; font-size: 15px;">DATOS DEL ALUMNO</h6>
            <table class="table-light table-bordered" align="center" id="buscar" style="width:700; font-size: 10px;">
                <thead style="text-transform: uppercase;">
                    <tr align="center">
                        <th width="16%"> No. Control </th>
                        <th width="35%"> Nombre del Alumno </th>
                        <th width="25%"> Correo Institucional </th>
                        <th width="25%"> Carrera </th>
                    </tr>
                </thead>

                <tbody id="cuerpo">
                </tbody>
            </table>
        </div>
        <h6 class="selec" style="font-weight: 800; margin-top: 1rem; font-size: 15px;"> EVENTOS ACADÉMICOS </h6>
        <div id="eventosacademicos" style="display: none; position: relative;" class="table-responsive">
            <table class="table table-bordered" style="width: auto; font-size:10px; float: left;">
                <thead>
                    <th class="medium_negrita_center" colspan="4" style="text-align: center;">DEPTO. DE CIENCIAS BÁSICAS</th>
                    <th class="medium_negrita_center" colspan="11"> INDUSTRIAL / DEPTO. DE METAL – MECÁNICA</th>
                    <th class="medium_negrita_center" colspan="3">DEPTO. DE CIENCIAS ECONÓMICO-ADMINISTRATIVAS </th>
                    <th class="medium_negrita_center" colspan="4">DEPTO. DE SISTEMAS Y COMPUTACIÓN</th>
                    <th class="medium_negrita_center">DEPTO. DE ELÉCTRICA Y ELECTRÓNICA</th>
                    <th class="medium_negrita_center" colspan="3">DEPARTAMENTO CORRESPONDIENTE</th>
                    <th class="medium_negrita_center" colspan="2">SUBDIRECCIÓN ACADÉMICA</th>
                </thead>
                <tbody>
                    <tr>
                        <td height="80" class="small_center">Ciclo de conferencias del cambio climático.</td>
                        <td height="80" class="small_center">Feria de Ciencias</td>
                        <td height="80" class="small_center">Asesoría Académicas</td>
                        <td height="80" class="small_center">Concurso de Ciencias Básicas en su etapa local.</td>
                        <td height="80" width="90" class="small_center">1. “La quinta disciplina”</td>
                        <td height="80" width="90" class="small_center">2. “Presentaciones efectivas”</td>
                        <td height="80" width="90" class="small_center">3. “Control Estadístico del Proceso” (CEP) con Minitab</td>
                        <td height="80" width="90" class="small_center">4. “Líneas de producción”</td>
                        <td height="80" width="90" class="small_center">5. “Supervisión de la producción”</td>
                        <td height="80" width="90" class="small_center">6. “Requisitos para elaborar una línea de producción”</td>
                        <td height="80" width="90" class="small_center">7. “Distribución de Probabilidad normal”</td>
                        <td height="80" width="90" class="small_center">8. “QC Story”</td>
                        <td height="80" width="90" class="small_center">9. “Soft Skills para Ingenieros”</td>
                        <td height="80" width="90" class="small_center">10. Elaboración de cuadros enfocados a las metodologías de Ingeniería Industrial”</td>
                        <td style="text-align: center;">Ciclo de conferencias para el área de Ingeniería Industrial</td>
                        <td height="80" width="90" class="small_center">Cursos y Talleres del Colegio de Contadores</td>
                        <td height="80" width="90" class="small_center">Emprendedurismo</td>
                        <td height="80" width="90" class="small_center">Diplomados CONDUSEF</td>
                        <td height="80" width="90" class="small_center">Hackathon, Desarrollo de SW o Prototipo, Rally, Cartel, Competencia Estudiantil</td>
                        <td height="80" width="90" class="small_center">Impartición de Cursos y/o Talleres</td>
                        <td height="80" width="90" class="small_center">Cursos y Talleres</td>
                        <td height="80" width="90" class="small_center">Asesoría Académica</td>
                        <td height="80" width="90" class="small_center" style="text-align: center;">Mantenimiento</td>
                        <td height="80" width="90" class="small_center">CONSTRUCCIÓN DE PROTOTIPOS Y DESARROLLO TECNOLÓGICO</td>
                        <td height="80" width="90" class="small_center">PROYECTO DE INVESTIGACIÓN</td>
                        <td height="80" width="90" class="small_center">PRODUCTIVIDAD LABORAL</td>
                        <td height="80" width="90" class="small_center">HABILIDADES SOCIOEMOCIONALES</td>
                        <td height="80" width="90" class="small_center">PUEBLOS ORIGINARIOS</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
<div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 600px;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">DATOS A REGISTRAR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body panel-body" id="foract">
                <form name="formularioact" id="foracts" method="POST">
                    <div class="form-group">
                        <label>TIPO DE ACTIVIDAD (*):</label>
                        <input type="hidden" name="idAlumnoT" id="idAlumnoT">
                        <input type="text" name="tipo_actividad" class="form-control" id="tipo_actividad" placeholder="Tipo de Actividad" required >
                    </div>
                    <div class="form-group" id="miinput">
                        <label>NOMBRE DE LA ACTIVIDAD(*):</label>
                        <input type="text" class="form-control" name="nombre_actividad" id="nombre_actividad" placeholder="NOMBRE DE LA ACTIVIDAD" required>
                    </div>
                    <div class="form-group col-lg col-md col-sm col-xs">
                        <label>DEPARTAMENTO RESPONSABLE</label>
                       <!-- <input type="text" class="form-control" name="departamento" id="departamento"
                            placeholder="DEPARTAMENTO" required>-->
                        <select class="form-control select-picker" name="departamento" id="departamento" required>
                <option value="">SELECCIONAR DEPARTAMENTO</option>
                <option value="Departamento de Sistemas y Computación">Departamento de Sistemas y Computación</option>
                <option value="Departamento de Electrica y Electrónica">Departamento de Electrica y Electrónica</option>
                <option value="Departamento de Metal Mecánica">Departamento de Metal-Mecánica</option>
                <option value="Departamento de Ciencias Económico-Administrativas">Departamento de Ciencias Económico-Administrativas
                </option>
                <option value="Departamento de Gestión Tecnología y Vinculación">Departamento de Gestión Tecnología y Vinculación</option>
                <option value="Departamento de Actividades Extraescolares">Departamento de Actividades Extraescolares</option>
                <option value="Centro de Información">Centro de Información</option>
                <option value="Departamento de Desarrollo Académico">Departamento de Desarrollo Académico</option>
                <option value="Departamento de Ciencias Básicas">Departamento de Ciencias Básicas</option>
                <option value="Subdirección Académica">Subdirección Académica</option>
            </select>    
                    </div>
                    <div class="form-group col-lg col-md col-sm col-xs" id="numcontrol">
                        <label>NUMERO DE CONTROL:</label>
                        <input type="text" class="form-control" name="NumeroControl" id="NumeroControl" maxlength="8"
                            placeholder="NUMERO DE CONTROL" required>
                    </div>
                    <div class="form-group col-lg col-md col-sm col-xs" >
                        <label>CORREO INSTITUCIONAL:</label>
                        <input type="text" class="form-control" name="correo_institucional" id="correo_institucional"
                            maxlength="256" placeholder="CORREO INSTITUCIONAL" required>
                    </div>
                    <div class="form-group col-lg col-md col-sm col-xs" >
                        <label>CARRERA:</label>
                            <select class="form-control select-picker" name="nombre_carrera" id="nombre_carrera" required>
                <option value="">SELECCIONA CARRERA</option>
                <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                <option value="INGENIERÍA ELECTRONICA">INGENIERÍA ELECTRONICA</option>
                <option value="INGENIERÍA EN GESTIÓN EMPRESARIAL">INGENIERÍA EN GESTIÓN EMPRESARIAL</option>
                <option value="INGENIERÍA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                <option value="INGENIERÍA MECATRÓNICA">INGENIERÍA MECATRÓNICA</option>
                <option value="CONTADOR PÚBLICO">CONTADOR PÚBLICO</option>
            </select>     
                    </div>
                    <div class="modal-footer form-group">
                        <button class="btn btn-primary" onclick="mostrarform()" type="submit" id="btnGuardar"><i class="fa fa-save"></i>
                            Guardar</button>

                        <button class="btn btn-danger" data-bs-dismiss="modal" type="button"><i
                                class="fa fa-arrow-circle-left" ></i> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
        <!-- Jquey -->
        <script src="../assets/librerias/jquery-3.6.3.min.js"></script>
        <script src="scripts/verificacionnumeros.js"></script>
        <script src="scripts/seleccionact.js" type="text/javascript"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).on("ready", function() {
            $("#eventosacademicos table tr td").click(function() {
                var celda = $(this);

                alertify.confirm('ACTIVIDAD SELECCIONADA', celda.html(), function() { 
                
                if(celda.html() == "Ciclo de conferencias del cambio climático." ){
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabed", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Ciencias Básicas").prop("disabled", false);
                }
                else if (celda.html() == "Feria de Ciencias" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Ciencias Básicas").prop("disabled", false);
                }
                else if (celda.html() == "Asesoría Académicas" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Ciencias Básicas").prop("disabled", false);
                }
                else if (celda.html() == "Concurso de Ciencias Básicas en su etapa local." ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Ciencias Básicas").prop("disabled", false);
                }
                else if (celda.html() == "1. “La quinta disciplina”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "2. “Presentaciones efectivas”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "3. “Control Estadístico del Proceso” (CEP) con Minitab" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "4. “Líneas de producción”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "5. “Supervisión de la producción”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "6. “Requisitos para elaborar una línea de producción”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "7. “Distribución de Probabilidad normal”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "8. “QC Story”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "9. “Soft Skills para Ingenieros”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "10. Elaboración de cuadros enfocados a las metodologías de Ingeniería Industrial”" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "Ciclo de conferencias para el área de Ingeniería Industrial" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Metal-Mecánica").prop("disabled", false);
                    $("#nombre_carrera").val("INGENIERÍA INDUSTRIAL").prop("disabled", false);
                }
                else if (celda.html() == "Cursos y Talleres del Colegio de Contadores" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Ciencias Económico-Administrativas").prop("disabled", false);
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "Emprendedurismo" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO");
                    $("#nombre_actividad").val(celda.html());
                    $("#departamento").val("Departamento de Ciencias Económico-Administrativas");
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "Diplomados CONDUSEF" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html());
                    $("#departamento").val("Departamento de Ciencias Económico-Administrativas");
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "Hackathon, Desarrollo de SW o Prototipo, Rally, Cartel, Competencia Estudiantil" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Sistemas y Computación");
                    $("#nombre_carrera").val("INGENIERÍA EN SISTEMAS COMPUTACIONALES");
                }
                else if (celda.html() == "Impartición de Cursos y/o Talleres" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Sistemas y Computación");
                    $("#nombre_carrera").val("INGENIERÍA EN SISTEMAS COMPUTACIONALES");
                }
                else if (celda.html() == "Cursos y Talleres" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Sistemas y Computación");
                    $("#nombre_carrera").val("INGENIERÍA EN SISTEMAS COMPUTACIONALES");
                }
                else if (celda.html() == "Asesoría Académica" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Sistemas y Computación");
                    $("#nombre_carrera").val("INGENIERÍA EN SISTEMAS COMPUTACIONALES");
                }
                else if (celda.html() == "Mantenimiento" ) {
                    $("#tipo_actividad").val("EVENTO ACADÉMICO").prop("disabled", false);
                    $("#nombre_actividad").val(celda.html()).prop("disabled", false);
                    $("#departamento").val("Departamento de Electrica y Electrónica");
                    $("#nombre_carrera").prop("disabled", false);

                }
                else if (celda.html() == "CONSTRUCCIÓN DE PROTOTIPOS Y DESARROLLO TECNOLÓGICO" ) {
                    $("#tipo_actividad").val(celda.html());
                    $("#nombre_actividad").prop("disabled", false);
                    $("#departamento").prop("disabled", false);
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "PROYECTO DE INVESTIGACIÓN" ) {
                    $("#tipo_actividad").val(celda.html());
                    $("#nombre_actividad").prop("disabled", false);
                    $("#departamento").prop("disabled", false);
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "PRODUCTIVIDAD LABORAL" ) {
                    $("#tipo_actividad").val(celda.html());
                    $("#nombre_actividad").prop("disabled", false);
                    $("#departamento").prop("disabled", false);
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "HABILIDADES SOCIOEMOCIONALES" ) {
                    $("#tipo_actividad").val(celda.html());
                    $("#nombre_actividad").prop("disabled", false);
                    $("#departamento").val("Subdirección Académica");
                    $("#nombre_carrera").prop("disabled", false);
                }
                else if (celda.html() == "PUEBLOS ORIGINARIOS" ) {
                    $("#tipo_actividad").val(celda.html());
                    $("#nombre_actividad").prop("disabled", false);
                    $("#departamento").val("Subdirección Académica");
                    $("#nombre_carrera").prop("disabled", false);
                }

                
                $("#ModalAgregar").modal("show"); 

                }, function() {});                
            });

        });
        </script>

        </body>
        </html>