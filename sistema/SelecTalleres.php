
<style>
.content {
    margin-left: auto;
    margin-right: auto;
}

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
<?php 
//Incluímos inicialmente la conexión a la base de datos
require_once  "../config/Conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<body>
    <header>
        <?php 
    require 'header.php'
    ?>
    </header>
    <div class="container">
        <div class="navegacion">
            <a><i class="fa-solid fa-house"></i><i class="fa-solid fa-chevron-right"></i> Selección de Talleres</a>
        </div>
        <hr>

        <!-- Table Seleccion de actividades -->

    <section class="STalleres">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                        <div class="panel-body" id="listadoregistros">
                            <table id="tbllistadoDA"
                                class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Seleccionar</th>
                                    <th>Tipo de Actividad</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Horario</th>
                                    <th>Turno</th>
                                </thead>
                                <?php 
     $sql="SELECT t.idTaller, t.tipo_actividad, t.Nombre, t.Tipo, t.Turno, t.horario, t.condicion, a.NumeroControl, a.Correo, a.ClaveCarrera  
     FROM talleres t INNER JOIN alumnos a  WHERE Correo = '".$_SESSION['email']."'";
$result=mysqli_query($conexion,$sql);
while($ver=mysqli_fetch_row($result)){
    ?>
                                <tbody>
                                <th>
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalInscribir" data-id="<?php echo $ver['0'] ?>" data-nocontrol="<?php echo $ver['7'] ?>" data-email="<?php echo $ver['8'] ?>" data-carrera="<?php echo $ver['9'] ?>" data-nombreact="<?php echo $ver['2'] ?>" data-tipo="<?php echo $ver['3'] ?>" data-horario="<?php echo $ver['5'] ?>" data-turno="<?php echo $ver['4'] ?>" >
                                      <i class="fa-solid fa-pen-to-square"></i>
                                      </button></th> 
                                <th><?php  echo $ver  [ '1']; ?></th>
                                    <th><?php  echo $ver  [ '2']; ?></th>
                                    <th><?php  echo $ver  [ '3']; ?></th>
                                    <th><?php  echo $ver  [ '5']; ?></th>   
                                    <th><?php  echo $ver  [ '4']; ?></th>
                                </tbody>
                                <?php
}
 ?>
                            </table>
                        </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
    </section><!-- /.content -->


<!-- Modal -->
<form id="inscribir" method="POST">
<div class="modal fade" id="ModalInscribir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="height: 580px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >INCRIBIRSE A TALLER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
<div class="modal-body">
      <div class="form-group">
          <label>No. Control:</label>
          <input type="text" name="idTaller" class="form-control" id="idTaller" hidden readonly>
          <input type="text" name="no_control" class="form-control" id="no_control" maxlength="8" readonly>
      </div>
      <div class="form-group" id="miinput">
          <label>Email(*):</label>
          <input type="text" class="form-control" name="email" id="email" readonly>
      </div>
      <div class="form-group col-lg col-md col-sm col-xs" >
                        <label>CARRERA:</label>
                        <input class="form-control" name="nombre_carrera" id="nombre_carrera" readonly>     
                    </div>
      <div class="form-group">
          <label>ACTIVIDAD COMPLEMENTARIA / TALLER :</label>
         <input type="text" class="form-control" name="actividadcomplementaria" id="actividadcomplementaria" readonly> 
      </div>
      <div class="form-group col-lg col-md">
          <label>TIPO DE TALLER:</label>
          <input type="text" class="form-control" name="tipo_taller" id="tipo_taller" readonly>
      </div>
      <div class="form-group col-lg col-md" >
          <label>HORARIO:</label>
          <input type="text" class="form-control" name="horario" id="horario" readonly>
      </div>
      <div class="form-group col-lg col-md col-sm col-xs" >
          <label>TURNO:</label>
          <input type="text" class="form-control" name="turno" id="turno" readonly >      
      </div>  
      <div class="modal-footer">
        <div>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
        </div>
        <div>
      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" >INSCRIBIR</button>
    </div>
     </div>
     </div>
    </div>
  </div>
</div>
<form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../dist/script.js"></script>

    <script type="text/javascript">
    $('#ModalInscribir').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Botón que activó el modal
	var id = button.data('id') // Extraer la información de atributos de datos
  var nocontrol = button.data('nocontrol') // Extraer la información de atributos de datos
  var email = button.data('email') // Extraer la información de atributos de datos
  var carrera = button.data('carrera') // Extraer la información de atributos de datos
	var nombreact = button.data('nombreact') // Extraer la información de atributos de datos
	var tipo = button.data('tipo') // Extraer la información de atributos de datos
	var horario = button.data('horario') // Extraer la información de atributos de datos
	var turno = button.data('turno') // Extraer la información de atributos de datos
	
	
	
	var modal = $(this)
	modal.find('.modal-body #idTaller').val(id)
  modal.find('.modal-body #no_control').val(nocontrol)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #nombre_carrera').val(carrera)
	modal.find('.modal-body #actividadcomplementaria').val(nombreact)
	modal.find('.modal-body #tipo_taller').val(tipo)
	modal.find('.modal-body #horario').val(horario)
	modal.find('.modal-body #turno').val(turno)
	$('.alert').hide();//Oculto alert
  })

  $("#inscribir").submit(function( event ) {
	 event.preventDefault();
	 var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../ajax/alumnotaller.php?op=insertarAlumno",
				data: parametros,
				success: function(datos){
				
				alertify.confirm(datos, function(){ 
					alertify.success('Ok')
							 });
				
			  }
		});
	 
	});

    </script>
</body>

</html>