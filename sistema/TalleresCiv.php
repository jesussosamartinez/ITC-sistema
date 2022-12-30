
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
    
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('.table').load('../assets/components/tabla.php');
    });

</script>