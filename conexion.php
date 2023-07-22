<?php

function conexion_dbstock(){


    $hostname ="localhost";
    $username ="root";
    $passwdd ="";
    $database = "stock_zapatillas";

    $conexion= new mysqli($hostname,$username,$passwdd, $database);

    return $conexion;

}


?>