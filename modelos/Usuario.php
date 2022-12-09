<?php

//Incluimos la conexion a la base de datos
require "../config/Conexion.php";

Class Usuario {

    //Implementamos un constructor
    public function __construct(){

    }



    //funcion para verificar el acceso al sistema
    public function verificar($email,$Password){
        $sql = "SELECT * FROM usuarios WHERE email='$email' and Password='$Password' and condicion='1'";
        return ejecutarConsulta($sql);   
    }

}

?>