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
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Usuario y/o Contraseña incorrectos',
                
              })
        }
    });
})

