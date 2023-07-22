<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRAR INGRESO</title>
</head>
<body>
<?php
include "conexion.php";

$borrar_stock = conexion_dbstock();
 
          
$borrados_stock = $borrar_stock -> query("SELECT * FROM integrador");

?>
<?php

while ($borrado_stock = $borrados_stock->fetch_assoc()){
    echo "<br>";
    echo  $borrado_stock["ID"] ;
    echo  $borrado_stock["Producto"]  ;
    echo  $borrado_stock["Cantidad"]  ;
    echo  $borrado_stock["Preciounit"]  ;
    echo  $borrado_stock["Imagen"]  ;
    echo  $borrado_stock["Fecha"]  ;
    
?>

    <a href ="eliminar.php?id=<?php echo  $borrado_stock["ID"]?>">  Borrar </a>
    <a href ="modifico.php?id=<?php  echo  $borrado_stock["ID"]?>"> Modificar </a>
    
<?php
    echo "<br>";
 
      
  
  
  
  }
  ?>




?>
    
</body>
</html>







