<?php

include "conexion.php";

$id =$_GET['id'];

echo $id;

$conexion2= conexion_dbstock();

$conexion2-> query ("DELETE FROM integrador WHERE ID = '$id'");

header ('Location: index.php');

$token = "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";


?>