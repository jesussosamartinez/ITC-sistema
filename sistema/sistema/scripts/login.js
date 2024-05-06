var intentos=0; 
$("#login-form").on('submit', function(e) {
    e.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();

    $.post("../ajax/usuario.php?op=verificar", {"email": email, "Password": password}, function(data) {
        if (data != "null") {
            registrarEnBitacora(email, "Inicio de sesión correcto", function(success) {
                if (success) {
                    console.log("Registro en bitácora correcto");
                    window.location.href = "home.php";
                } else {
                    console.log("Error al registrar en bitácora");
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error al registrar en la bitácora',
                    });
                }
            });
            intentos=0;

        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Usuario y/o Contraseña incorrectos',
            });
            registrarEnBitacora(email, "Inicio de sesión incorrecto", function(success) {
                if (success) {
                    console.log("Registro en bitácora correcto");
                } else {
                    console.log("Error al registrar en bitácora");
                }
            });
            intentos+=1;
            $("#intentosRestantes").show();
                $("#intentosRestantes").text("Intentos restantes: "+(5-intentos));
            $.post("../ajax/Bitacora.php?op=RegistroIntento", {
                "Intentos": intentos
            }, function(data) {
                callback(data != "null");
            });
            if(intentos==5){
                intentos=0;
                $("#btnIngresar").hide();
                $("#intentosSuperados").show();
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    text: 'Has superado el número de intentos permitidos :(',
                });            }
        }
    });
});

function registrarEnBitacora(usuario, estatus, callback) {
    $.post("../ajax/Bitacora.php?op=RegistroMovimiento", {
        "Movimiento": "Inicio de sesión",
        "Usuario": usuario,
        "Estatus": estatus
    }, function(data) {
        callback(data != "null");
    });
}