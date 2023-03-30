<style>
.selec {
    font-family: 'Montserrat';
    font-weight: bold;
    color: #916F09;
    text-align: center;
    padding-left: 3rem;
    padding-top: 3rem;
    padding-bottom: 1rem; 
    font-size: 25px;
}

.form-select {
    position: relative;

}
th{
    font-size: 12px;
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
                    <td colspan="2"><select class="form-select select-picker" aria-label="Default select example"
                            name="actividadlistas" id="actividadlistas">
                            <option value="">SELECCIONA LA ACTIVIDAD</option>
                        </select></td>
                </tr>
                <tr>
                    <th> PERIODO </th>
                    <td><select class="form-select select-picker" name="periodo" id="periodo">
                        <option value="">SELECCIONA EL PERIODO</option>
                            <script>
                            var d = new Date();
                            var n = d.getFullYear();
                            for (var i = n; i >= 2020; i--){
                                document.write('<option value="AGOSTO - DICIEMBRE '+ i +'">AGOSTO - DICIEMBRE '+ i +'</option>');
                                document.write('<option value="ENERO - JUNIO '+ i +'">ENERO - JUNIO '+ i +'</option>');
                             } </script>
                        </select></td>
                </tr>
            </thead>

        </table>
    </div>
    <div align="center" style=" position:relative" >
            <button class="btn" type="submit" style="background-color:  #1B396A; color: white; font-weight: 700;"> BUSCAR </button>
        </div>
</section>



<script src="scripts/listados.js" type="text/javascript"></script>
</body>
</html>