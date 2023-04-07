$.post("../ajax/talleres.php?op=listar", function(data, status){
    var data = JSON.parse(data);

    for (var i = 0; i < data.aaData.length; i++) {
      var $option = '<option value='+data.aaData[i].Nombre+'>'+data.aaData[i].Nombre+" ["+data.aaData[i].Horario+']</option>'; 
      $("#actividadlistas").append($option);
      // agrego los options al select
    }
      
    
  });


  $("#formslistas").on("submit", function (e) {
    e.preventDefault();
    var combo = document.getElementById("actividadlistas");
    var per = document.getElementById("periodo");
    actividad = combo.options[combo.selectedIndex].text;
    nombre_actividad = (actividad.split(" [")[0]);

    horario = (actividad.split("[")[1].split("]")[0]);

    periodo = per.options[per.selectedIndex].text;

    
 $.post(
      "../ajax/alumnotaller.php?op=listadosAE",
      { "nombre_actividad" : nombre_actividad, "horario" : horario, "periodo" : periodo },
      function (data) {
        data = JSON.parse(data);
  
       
       
       for (var i = 0; i < data.aaData.length; i++) {
        var $tr =
          '<tr style="text-transform:uppercase;"> <td>' +
          (i+1)+
          "</td> <td>" +
          data.aaData[i].no +
          "</td> <td >" +
          data.aaData[i].alumno +
          "</td> </tr>";
          $("#tbllistas").append($tr);
          }
        
  
      })

  });

