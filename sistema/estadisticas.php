<style>

#buscador{
    padding-top: 5rem;
    align-items: center;
}

#formsestadisticas {
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
</style>

<header>
    <?php 
    require 'header.php'
    ?>
</header>

<div class="navegacion">
    <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Estadisticas</a>
</div>
<hr>

<div class="container" id="" >
<h1 class="selec">REPORTE DE ESTADISTICAS</h1>

    <div class="panel-body" id="buscador" style="display: block;">
        <form class="row g-3" name="formulario" id="formsestadisticas" method="POST">
            <div class="form-group col-auto">
                <label >PERIODO:</label>
            </div>
            <div class="form-group col-auto">
            <select class="form-select select-picker" name="periodo" id="periodo" required>
                                <option value="">SELECCIONA PERIODO</option>
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
            <div class="form-group col-auto">
                <button class="btn btn-primary mb-3 position-relative n-1 " type="submit" value="Buscar"
                    id="btnBuscar"><i class="fa fa-search"></i>
                    Buscar</button>
            </div>
        </form>
    </div>
<div>
    <table  class="table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th rowspan="2">Carrera</th>
                <th colspan="2">Sexo</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                    <th>H</th>
                    <th>M</th>
            </tr>
        </thead>
        <tbody id="tbllestadisticas">
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
    </div>
</div>
                            

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/constancia.js" type="text/javascript"></script>
<script src="scripts/listados.js" type="text/javascript"></script>