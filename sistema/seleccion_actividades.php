<!DOCTYPE html>
<html lang="es">
<style>
#buscadoractividades {
    padding-top: 5rem;
    padding-left: 3rem;
    align-items: center;
}

#formulario {
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

#registro{
    padding-top: 3rem;
}
</style>
<body>

    <?php  
    require 'header.php';
?>
    <div class="container">
        <div class="navegacion">
            <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Actividades Complementarias
            </a>
        </div>
        <hr>

        <h1 class="selec">SELECCIÓN DE ACTIVIDADES</h1>

        <div class="panel-body" id="buscadoractividades">
            <form class="row g-3" name="formulario" id="formulario" method="POST">
                <div class="form-group col-auto">
                    <label for="numcontrol">Numero de Control:</label>
                </div>
                <div class="form-group col-auto">
                    <input type="text" class="form-control mb-3 inputcenter" name="numerocontrol" id="numerocontrol"
                        maxlength="8" onkeyup="this.value=Numeros(this.value)" placeholder="Número de Control" required>
                </div>
                <div class="form-group col-auto">
                    <button class="btn btn-primary mb-3" type="submit" id="btnBuscar" onclick="mostrarform(false)"><i
                            class="fa fa-search"></i> Buscar</button>
                </div>
            </form>
        </div>

        <div class="box-title" id="registro">
            <h6 class="selec" style="font-weight: 800;">DATOS DEL ALUMNO</h6>
            <table class="table-bordered">
                <tbody>
                    <tr>
                        <td colspan="2">NOMBRE:</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="scripts/verificacionnumeros.js"></script>
    <script src="scripts/seleccionactividades.js"></script>
</body>
</html>