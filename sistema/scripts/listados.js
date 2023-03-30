$.post("../ajax/talleres.php?op=listar", function(data, status){
    var data = JSON.parse(data);

    for (var i = 0; i < data.aaData.length; i++) {
      var $option = '<option value='+data.aaData[i].Nombre+'>'+data.aaData[i].Nombre+" "+data.aaData[i].Horario+'</option>'; 
      $("#actividadlistas").append($option);
      // agrego los options al select
    }
      
  });



