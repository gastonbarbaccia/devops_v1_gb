<?php

function conexion_dbstock(){


    $hostname ="localhost";
    $username ="root";
    $password ="nasdf123123";
    $database = "stock_zapatillas";

    $conexion= new mysqli($hostname,$username,$password, $database);

    return $conexion;

}


?>