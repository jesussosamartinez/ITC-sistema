<?php
ob_start();
if (strlen(session_id()) < 1) {
    session_start();//Validamos si existe o no la sesión

    require_once "../modelos/ModeloBitacora.php";

    // Verifica si la solicitud es válida
    if (isset($_GET["op"]) && $_GET["op"] == "RegistroMovimiento") {
        // Verifica que los datos necesarios estén presentes en la solicitud POST
        if (isset($_POST["Movimiento"], $_POST["Usuario"], $_POST["Estatus"])) {
            // Obtiene los datos de la solicitud POST
            $movimiento = limpiarCadena($_POST["Movimiento"]);
            $descripcion = "El usuario: " . $_POST["Usuario"] . " intentó iniciar sesión en la plataforma";
            $mensajeDevuelto = limpiarCadena($_POST["Estatus"]);
            $fechaHora = date("Y-m-d H:i:s");
            $usuario = limpiarCadena($_POST["Usuario"]);

            // Crea una instancia del objeto ModeloBitacora
            $bitacora = new ModeloBitacora();

            // Llama directamente a la función insertarRegistro() y devuelve la respuesta
            $rspta = $bitacora->insertarRegistro($movimiento, $descripcion, $mensajeDevuelto, $fechaHora, $usuario);

            // Devuelve la respuesta adecuada
            echo $rspta ? "Bitacora registrada" : "Bitacora no registrada";
        } else {
            echo "Error: Faltan datos en la solicitud";
        }
    }else if (isset($_GET["op"]) && $_GET["op"] == "RegistroIntento") {
        // Verifica que los datos necesarios estén presentes en la solicitud POST
        if (isset($_POST["Intentos"])) {
            // Obtiene los datos de la solicitud POST
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $fechaHora = date("Y-m-d H:i:s");
            $Intentos=limpiarCadena($_POST["Intentos"]);

            // Crea una instancia del objeto ModeloBitacora
            $bitacora = new ModeloBitacora();

            // Llama directamente a la función insertarRegistro() y devuelve la respuesta
            $rspta = $bitacora->insertarRegistroIntentos($ip_address, $Intentos, $fechaHora);

            // Devuelve la respuesta adecuada
            echo $rspta ? "Intento registrada" : "Intento no registrada";
        } else {
            echo "Error: Faltan datos en la solicitud";
        }
    }else if (isset($_GET["op"]) && $_GET["op"] == "RegistroUsuario") {
        // Verifica que los datos necesarios estén presentes en la solicitud POST
        if (isset($_POST["Movimiento"], $_POST["Usuario"], $_POST["Estatus"])) {
            // Obtiene los datos de la solicitud POST
            $movimiento = limpiarCadena($_POST["Movimiento"]);
            $descripcion = "El usuario: " . $_SESSION['email']. " registró al alumno: ". limpiarCadena($_POST["Usuario"]);
            $mensajeDevuelto = limpiarCadena($_POST["Estatus"]);
            $fechaHora = date("Y-m-d H:i:s");
            $usuario = $_SESSION['email'];

            // Crea una instancia del objeto ModeloBitacora
            $bitacora = new ModeloBitacora();

            // Llama directamente a la función insertarRegistro() y devuelve la respuesta
            $rspta = $bitacora->insertarRegistro($movimiento, $descripcion, $mensajeDevuelto, $fechaHora, $usuario);

            // Devuelve la respuesta adecuada
            echo $rspta ? "Bitacora registrada" : "Bitacora no registrada";
        } else {
            echo "Error: Faltan datos en la solicitud";
        }
    }else if (isset($_GET["op"]) && $_GET["op"] == "RegistroActividad") {
        // Verifica que los datos necesarios estén presentes en la solicitud POST
        if (isset($_POST["Movimiento"], $_POST["Estatus"], $_POST["Actividad"])) {
            // Obtiene los datos de la solicitud POST
            $movimiento = limpiarCadena($_POST["Movimiento"]);
            $descripcion = "El usuario: " . $_SESSION['email']. " registró una actividad: ". limpiarCadena($_POST["Actividad"]);
            $mensajeDevuelto = limpiarCadena($_POST["Estatus"]);
            $fechaHora = date("Y-m-d H:i:s");
            $usuario = $_SESSION['email'];

            // Crea una instancia del objeto ModeloBitacora
            $bitacora = new ModeloBitacora();

            // Llama directamente a la función insertarRegistro() y devuelve la respuesta
            $rspta = $bitacora->insertarRegistro($movimiento, $descripcion, $mensajeDevuelto, $fechaHora, $usuario);

            // Devuelve la respuesta adecuada
            echo $rspta ? "Bitacora registrada" : "Bitacora no registrada";
        } else {
            echo "Error: Faltan datos en la solicitud";
        }
    }  else if (isset($_GET["op"]) && $_GET["op"] == "RegistroEvaluacion") {
        // Verifica que los datos necesarios estén presentes en la solicitud POST
        if (isset($_POST["Movimiento"], $_POST["Estatus"])) {
            // Obtiene los datos de la solicitud POST
            $movimiento = limpiarCadena($_POST["Movimiento"]);
            $descripcion = "El usuario: " . $_SESSION['email']. " registró una Evaluacion: ";
            $mensajeDevuelto = limpiarCadena($_POST["Estatus"]);
            $fechaHora = date("Y-m-d H:i:s");
            $usuario = $_SESSION['email'];

            // Crea una instancia del objeto ModeloBitacora
            $bitacora = new ModeloBitacora();

            // Llama directamente a la función insertarRegistro() y devuelve la respuesta
            $rspta = $bitacora->insertarRegistro($movimiento, $descripcion, $mensajeDevuelto, $fechaHora, $usuario);

            // Devuelve la respuesta adecuada
            echo $rspta ? "Bitacora registrada" : "Bitacora no registrada";
        } else {
            echo "Error: Faltan datos en la solicitud";
        }
    }  
    
    
    else {
        echo "Error: Operación no válida";
    }
} 