$("#login-form").on('submit',function(e)
{
	e.preventDefault();
    email=$("#email").val();
    password=$("#password").val();

    $.post("../ajax/usuario.php?op=verificar",
        {"email":email,"Password":password},
        function(data)
    {
        if (data!="null")
        {
            $(location).attr("href","home.php");            
        }
        else
        {
        alert("Usuario y/o Password incorrectos");
        }
    });
})