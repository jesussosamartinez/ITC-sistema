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

<!--TE--------------------------------------------------------------------------------------------------------->

<div class="container" id="">
    <table id="" class="table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th></th>
                <th colspan="2">Departamento</th>
                <th></th>
            </tr>
            <tr>
                <th>Carrera</th>
                <th>H</th>
                <th>M</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th>Carrera</th>
                <th>H</th>
                <th>M</th>
                <th>Total</th>
            </tr>
        </tfoot>
    </table>
</div>