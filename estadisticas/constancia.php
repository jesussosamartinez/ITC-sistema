<header>
        <?php 
    require '../sistema/header.php'
    ?>
    </header>
    <div id="constancia" >
<section class="container">
    <div class="titulo">
        <h3>CONSTANCIA DE CUMPLIMIENTO DE ACTIVIDAD COMPLEMENTARIA</h3>
    </div>
    <div class="datos_departamento">
        <p>________________ <br>
        Jefe(a) del Departamento de Servicios Escolares <br>
        presente
    </p>
    </div>
     <div class="asunto">
        El/La que suscribe, ____________, por este medio se permite hacer de su <br>
        conocimiento que el estudiante __________________ con número de control ___________ <br>
        de la carrera de ______________________ ha cumplido su actividad complementaria por su <br>
        _____________________________________, con el nivel de desempeño ____________ y <br>
        un valor númerico de ____ durante el periodo escolar _______________ con valor curricular de <br>
        __ crédito.
        <br>
        <br>
        Se extiende la presente en la H. H. Cuautla, Mor., a los ____ dias del mes de ____ del año ______.
     </div>
</section>    
</div>

<script>
      var pre = document.createElement('pre');
//custom style.
pre.style.maxHeight = "400px";
pre.style.margin = "0";
pre.style.padding = "24px";
pre.style.whiteSpace = "pre-wrap";
pre.style.textAlign = "justify";
pre.appendChild(document.createTextNode($('#constancia').text()));
//show as confirm
alertify.confirm(pre, function(){
        alertify.success('Accepted');
    },function(){
        alertify.error('Declined');
    }).set({labels:{ok:'Accept', cancel: 'Decline'}, padding: false});
</script>