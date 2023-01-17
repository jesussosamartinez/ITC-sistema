
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio <i class="fa-solid fa-chevron-right"></i> Talleres Civicos</a>
    </div>
    <hr>

    <div class="table">

    </div>
    
   

  
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

<script type="text/javascript">
    $(document).ready(function(){
        $('.table').load('../assets/components/tabla.php');
    });

</script>