<!DOCTYPE html>
<html lang="es">
    <style>
        .content {
            position: fixed;
            width: 80%;
            top: 38%;
            margin-top: 1rem;
            margin-left: 7rem;
            z-index: -5;
                }
       tbody{
        text-align:center;
       }
    </style>

    <!-- Aqui va hacer informacion de las actividades del alumno-->
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>

    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i><i class="fa-solid fa-chevron-right"></i> Historial de Actividades</a>
    </div>
    <hr>
    <section class="content">
        <table class="table-light" >
            <thead>
                <tr>
                    <th scope="col"># Folio</th>
                    <th scope="col">Actividad Complementaria</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Credito Complementario</th>
                </tr>
            </thead>
            <tbody class="table-group-divider" id="tblactividad">
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/datos.js" type="text/javascript"></script>


</body>
</html>