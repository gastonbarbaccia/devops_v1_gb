<?php
include "conexion.php";

$conexion4=conexion_dbstock();

$id = $_POST['id'];
$Producto = $_POST['Producto'];
$Cantidad = $_POST['Cantidad'];
$Preciounit = $_POST['Preciounit'];
$Imagen = $_POST['Imagen'];
$Fecha = $_POST['Fecha'];


$conexion4->query ("UPDATE integrador SET Producto='$Producto',Cantidad='$Cantidad',Preciounit='$Preciounit',Imagen='$Imagen',Fecha='$Fecha' WHERE id= '$id'");


header ('Location: index.php');





?>