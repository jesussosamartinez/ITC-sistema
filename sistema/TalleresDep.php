<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres Deportivos- SIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet/less" type="text/css" href="../css/t.Less">

</head>
<body>
    <header>
        <?php 
    require 'header.html'
    ?>
    </header>
    
    <div class="navegacion">
        <a><i class="fa-solid fa-house"></i> <i class="fa-solid fa-chevron-right"></i>  Inicio <i class="fa-solid fa-chevron-right"></i> Talleres Deportivos</a>
    </div>
    <hr>

    <div class="cards">

        <div class="card">
            <div class="card__image-holder">
                <img class="card__image" src="https://www.cuautla.tecnm.mx/img/construccion.png" alt="" />
            </div>
            <div class="card-title">
                <a href="#" class="toggle-info btn">
                    <span class="left"></span>
                    <span class="right"></span>
                </a>
                <h2>
                    Grupos disponibles
                    <small>más información</small>
                </h2>
            </div>
            <div class="card-flap flap1">
                <div class="card-description">
                    This grid is an attempt to make something nice that works on touch devices. Ignoring hover states
                    when they're not available etc.
                </div>
                <div class="card-flap flap2">
                    <div class="card-actions">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__image-holder">
                <img class="card__image" src="https://www.cuautla.tecnm.mx/img/construccion.png" alt="" />
            </div>
            <div class="card-title">
                <a href="#" class="toggle-info btn">
                    <span class="left"></span>
                    <span class="right"></span>
                </a>
                <h2>
                    Inscribirse
                    <small>Image</small>
                </h2>
            </div>
            <div class="card-flap flap1">
                <div class="card-description">
                    This grid is an attempt to make something nice that works on touch devices. Ignoring hover states
                    when they're not available etc.
                </div>
                <div class="card-flap flap2">
                    <div class="card-actions">
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
            </div>



        </div>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../assets/js/cards.js" type="text/javascript"></script>

</body>
</html>