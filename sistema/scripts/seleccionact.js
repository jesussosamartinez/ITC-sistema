$("#formsalum").on('submit',function(e)
{
	e.preventDefault();
    NumeroControl=$("#numcontrol").val();

    $.post("../ajax/datos.php?op=alumnom",
        {"NumeroControl":NumeroControl},
        function(data){
            data = JSON.parse(data);

            $("#cuerpo").html("");
        var tr = '<tr style="text-transform:uppercase;"> <td>'+data.NumeroControl+'</td> <td>'+data.ApellidoP+' '+data.ApellidoM+' '+data.Nombre+'</td> <td>'+data.Correo+'</td> <td>'+data.ClaveCarrera+'</td> </tr>';
        $("#cuerpo").append(tr)
      
        }
    );

    var frm=document.getElementById("buscadoractividades");
    var tbl = document.getElementById("actividades");
    var event = document.getElementById("eventosacademicos");
    if(frm.style.display=="block" && tbl.style.display == "none" && event.style.display == "none" )
    {
        frm.style.display="none"
        tbl.style.display="block"
        event.style.display="block";
    }
    else
    if(frm.style.display=="none"){frm.style.display="block"}
     }) 
    


    $(document).on("ready", function(){                
      $("#eventosacademicos table tr td").click(function() {
        var celda = $(this).html();
        alert(celda);
        console.log(celda);
      });
    });