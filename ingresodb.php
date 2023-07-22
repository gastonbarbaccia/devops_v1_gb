<?php

include "conexion.php";

$Producto = $_POST["Producto"];

$Cantidad = $_POST["Cantidad"];

$Preciounit = $_POST["Preciounit"];

$Imagen = $_POST["Imagen"];

$Fecha = $_POST["Fecha"];


$conexion1 = conexion_dbstock();

$conexion1->query("INSERT INTO `integrador` (`Producto`, `Cantidad`, `Preciounit`, `Imagen`, `Fecha`) VALUES ('$Producto', '$Cantidad', '$Preciounit', '$Imagen', '$Fecha')");


header ('Location: index.php');








?>