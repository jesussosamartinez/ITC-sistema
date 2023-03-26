<style>
.selec {
    font-family: 'Montserrat';
    font-weight: bold;
    color: #916F09;
    text-align: center;
    padding-left: 3rem;
    font-size: 25px;
}

.form-select{
    position: sticky;

}
</style>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i> Listados</a>
    </div>
    <hr>

    <section class="container">
    <div class="table">
       <h6 class="selec" style="font-weight: 700; font-size: 18px;">LISTAS POR ACTIVIDAD EXTRAESCOLAR</h6>
            <table class="table-light table-bordered" align="center" id="listas" style=" font-size: 10px;">
                <thead style="text-transform: uppercase;">
                    <tr align="center">
                        <th> Actividad Extraescolar </th>
                        <td ><select class="form-select select-picker" aria-label="Default select example" name="actividadlistas" id="actividadlistas">
                            <option value="">Selecciona una opcion</option>
                            <option value="">ACTIVIDAD EXTRAESCOLAR - </option>
                        </select></td>
                    </tr>
                    <tr>
                        <th> Nombre del Alumno </th>
                    </tr>
                </thead>

                <tbody id="cuerpo">
                </tbody>
            </table>
    </div>
    </section>

  
    <!-- Bootstrap -->
    <script src="../assets/librerias/bootstrap/js/bootstrap.js"></script>
    <!-- Jquey -->
    <script src="../assets/librerias/jquery-3.6.3.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="../dist/script.js"></script>
</body>
</html>

