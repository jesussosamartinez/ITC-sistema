$("#excel").click(function(e){
  e.preventDefault();
  var combo = document.getElementById("actividadlistas");
  var per = document.getElementById("periodo");
  actividad = combo.options[combo.selectedIndex].text;
  nombre_actividad = actividad.split(" [")[0];

  horario = actividad.split("[")[1].split("]")[0];

  periodo = per.options[per.selectedIndex].text;

  $.ajax({
    url: "../js/listastalleres.php",
    type: "POST",
    data: {"nombre_actividad":nombre_actividad, "horario":horario, "periodo": periodo}, 
    success: function (response){
      console.log(response);
      location.href= "../js/listastalleres.php";
    } 
});

});



 