<style>
tbody {
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
}

thead,
th {
    font-size: 11px;
    height: 10px;
    text-transform: uppercase;
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
    text-align: center;
    margin-left: 2em;
}

input , select {
    text-align: center;
}
</style>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Constancias </a>
    </div>
    <hr>
    <main>
    <div class="input-container">
        <input type="search" name="" id="search" placeholder="Buscar">
    </div>
    <div class="errors-container" style="display: none; margin: auto, auto;  " >
    <p></p>
    </div>
    <section class="container">
        <div class="table table-responsive" id="tblContainer">
            <table class="table table-bordered table-hover" id="tableContainer">
                <thead>
                    <th>Opciones</th>
                    <th>No. Control</th>
                    <th>Nombre del Alumno</th>
                    <th>Actividad Complementaria</th>
                    <th>Periodo</th>
                    <th>Valor</th>
                    <th>Desempeño</th>
                    <th>Crédito Complementario</th>
                </thead>
                <tbody id="tblevalua">
                </tbody>
            </table>
        </div>
    </section>
    </main>
    <!-- Modal -->
    <form id="evaluacion" method="POST">
        <div class="modal fade" id="ModalEvaluacion" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="height: 1070px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">EVALUACIÓN DE DESEMPEÑO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="datos_ajax"></div>
                        <div class="form-group">
                            <label>NOMBRE DEL ESTUDIANTE:</label>
                            <input type="text" name="idAlumnoT" class="form-control" id="idAlumnoT" hidden>
                            <input type="text" name="nombrealumno" class="form-control" id="nombrealumno" readonly>
                        </div>
                        <div class="form-group">
                            <label>ACTIVIDAD COMPLEMENTARIA</label>
                            <input type="text" class="form-control" name="actividadcomplementaria"
                                id="actividadcomplementaria" readonly>
                        </div>
                        <div class="form-group col-lg col-md">
                            <label>PERIODO DE REALIZACIÓN:</label>
                            <select class="form-select select-picker" name="periodo" id="periodo">
                                <option value="">SELECCIONA EL PERIODO</option>
                                <script>
                                var d = new Date();
                                var n = d.getFullYear();
                                for (var i = n; i >= 2020; i--) {
                                    document.write('<option value="AGOSTO - DICIEMBRE ' + i + '">AGOSTO - DICIEMBRE ' +
                                        i + '</option>');
                                    document.write('<option value="ENERO - JUNIO ' + i + '">ENERO - JUNIO ' + i +
                                        '</option>');
                                }
                                </script>
                            </select>
                        </div>
                        <section style="padding-top: 1rem;">
                            <div class="table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th colspan="5">Nivel de desempeño del criterio</th>
                                        </tr>
                                        <th>No.</th>
                                        <th>Criterios a Evaluar</th>
                                        <th>insuficiente</th>
                                        <th>suficiente</th>
                                        <th>bueno</th>
                                        <th>notable</th>
                                        <th>excelente</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cumple en tiempo y forma con las actividades encomendadas alcanzando los
                                                objetivos.</td>
                                            <td><input name="desempeñouno" type="radio" value="0" /></td>
                                            <td><input name="desempeñouno" type="radio" value="1"  /></td>
                                            <td><input name="desempeñouno" type="radio" value="2"  /></td>
                                            <td><input name="desempeñouno" type="radio" value="3" /></td>
                                            <td><input name="desempeñouno" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result1" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Trabaja en equipo y se adapta a nuevas situaciones.</td>
                                            <td><input name="desempeñodos" type="radio" value="0" /></td>
                                            <td><input name="desempeñodos" type="radio" value="1" /></td>
                                            <td><input name="desempeñodos" type="radio" value="2" /></td>
                                            <td><input name="desempeñodos" type="radio" value="3" /></td>
                                            <td><input name="desempeñodos" type="radio" value="4"/></td>
                                            <td><input type="text" name="" id="result2" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Muestra liderazgo en las actividades encomendadas.</td>
                                            <td><input name="desempeñotres" type="radio" value="0" /></td>
                                            <td><input name="desempeñotres" type="radio" value="1" /></td>
                                            <td><input name="desempeñotres" type="radio" value="2" /></td>
                                            <td><input name="desempeñotres" type="radio" value="3" /></td>
                                            <td><input name="desempeñotres" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result3" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Organiza su tiempo y trabaja de manera proactiva.</td>
                                            <td><input name="desempeñocuatro" type="radio" value="0" /></td>
                                            <td><input name="desempeñocuatro" type="radio" value="1" /></td>
                                            <td><input name="desempeñocuatro" type="radio" value="2" /></td>
                                            <td><input name="desempeñocuatro" type="radio" value="3" /></td>
                                            <td><input name="desempeñocuatro" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result4" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Interpreta la realidad y se sensibiliza aportando soluciones a la
                                                problemática con la actividad complementaria.</td>
                                            <td><input name="desempeñocinco" type="radio" value="0" /></td>
                                            <td><input name="desempeñocinco" type="radio" value="1" /></td>
                                            <td><input name="desempeñocinco" type="radio" value="2" /></td>
                                            <td><input name="desempeñocinco" type="radio" value="3" /></td>
                                            <td><input name="desempeñocinco" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result5" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Realiza sugerencias innovadoras para beneficio o mejora del programa en
                                                el que participa.</td>
                                            <td><input name="desempeñoseis" type="radio" value="0" /></td>
                                            <td><input name="desempeñoseis" type="radio" value="1" /></td>
                                            <td><input name="desempeñoseis" type="radio" value="2" /></td>
                                            <td><input name="desempeñoseis" type="radio" value="3" /></td>
                                            <td><input name="desempeñoseis" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result6" hidden></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Tiene iniciativa para ayudar en las actividades encomendadas y muestra
                                                espíritu de servicio.</td>
                                            <td><input name="desempeñosiete" type="radio" value="0" /></td>
                                            <td><input name="desempeñosiete" type="radio" value="1" /></td>
                                            <td><input name="desempeñosiete" type="radio" value="2" /></td>
                                            <td><input name="desempeñosiete" type="radio" value="3" /></td>
                                            <td><input name="desempeñosiete" type="radio" value="4" /></td>
                                            <td><input type="text" name="" id="result7" hidden></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>

                        <div class="form-group col-lg col-md">
                            <label>VALOR NÚMERICO:</label>
                            <input type="text" class="form-control" name="valor_numerico" id="valor_numerico" maxlength="4" readonly>
                        </div>
                        <div class="form-group col-lg col-md">
                            <label>NIVEL DE DESEMPEÑO:</label>
                            <select type="text" class="form-control" name="desempeno" id="desempeno">
                                <option value="">SELECCIONA EL NIVEL DE DESEMPEÑO</option>
                                <option value="INSUFICIENTE">INSUFICIENTE</option>
                                <option value="SUFICIENTE">SUFICIENTE</option>
                                <option value="BUENO">BUENO</option>
                                <option value="NOTABLE">NOTABLE</option>
                                <option value="EXCELENTE">EXCELENTE</option>
                            </select>
                        </div>
                        <div class="form-group col-lg col-md col-sm col-xs">
                            <label for="credito">Crédito Complementario:</label>
                            <input type="text" class="form-control" name="credito" id="credito" maxlength="256"
                                placeholder="">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="scripts/evaluacion.js" type="text/javascript"></script>

            
            <script>

                
                $("input[type='radio']").on('change', function() {
    $(this).closest('tr').find('input[type="text"]').val($(this).val());
    mostrar();
});
            </script>
         

</body>
</html>