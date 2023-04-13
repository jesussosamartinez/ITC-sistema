<style>
.selec {
    font-family: 'Montserrat';
    font-weight: bold;
    color: #916F09;
    text-align: center;

    padding-top: 6rem;
    padding-bottom: 1rem;
    font-size: 18px;
}

#test{
    font-size: 1.5rem;
}

.form-select {
    position: relative;

}

th {
    font-size: 12px;
}

#left {
    display: flex;
    float: right;
    padding: 0 auto;
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
    <form class="row" id="formslistas" method="POST">
        <div class="table">
            <h6 class="selec" style="font-weight: 700;">LISTAS POR ACTIVIDAD EXTRAESCOLAR</h6>
            <table class="table-light table-bordered" align="center" id="listas" style=" font-size: 10px;">
                <thead style="text-transform: uppercase;">
                    <tr align="center">
                        <th> Actividad Extraescolar </th>
                        <td colspan="2"><select class="form-select select-picker" aria-label="Default select example"
                                name="actividadlistas" id="actividadlistas" required>
                                <option value="">SELECCIONA ACTIVIDAD</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th> PERIODO </th>
                        <td><select class="form-select select-picker" name="periodo" id="periodo" required>
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
                            </select></td>
                    </tr>
                </thead>
            </table>
        </div>
        <div align="right" style=" position:relative">
            <button class="btn" type="submit" style="background-color:  #1B396A; color: white; font-weight: 700;" data-bs-toggle="modal" id="dataUpdate" data-bs-target="#ModalListas"><i
                    class="fa-solid fa-magnifying-glass"></i> BUSCAR </button>
        </div>
    </form>

    <div class="modal fade" id="ModalListas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="height: 620px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LISTAS DE ASISTENCIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table" id="tbllist">
                        <thead style="text-transform: uppercase; ">
                            <th>#</th>
                            <th>No. Control</th>
                            <th>Alumno</th>
                            <script>
                            for (var i = 1; i <= 32; i++) {
                                document.write('<th>' + i + '</th>');
                            }
                            </script>

                        </thead>
                        <tbody id="tbllistas">

                        </tbody>
                        <tfoot></tfoot>
                    </table>
                    <div class="modal-footer">
                        <a href="#" id="test" class="btn btn-success" onClick="fnExcelReport();" type="button"><i class="fa-regular fa-file-excel"></i></a>
                        <button type="button"  class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<script src="scripts/listados.js" type="text/javascript"></script>
<script src="../js/excel.js" type="text/javascript"></script>

</body>
</html>