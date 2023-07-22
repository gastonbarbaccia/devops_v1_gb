<?php
include "conexion.php";

$id = $_GET['id'];

$conexion3=conexion_dbstock();

$registro1= $conexion3->query ("SELECT * FROM integrador WHERE  id='$id' ");


$dato_exist=$registro1 -> fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> MODIFICAR DATOS </h1>

<hr>
<br>

<form method=POST action="actualizar.php">
    <input hidden value="<?php echo $dato_exist['id'] ?>"readonly name ='id'>

    <div>
        <lebel> Producto </label>
        <input type="text" name="Producto" placeholder="ingrese producto " required value = "<?php echo $dato_exist['Producto'] ?>" >
    </div> 
    <div>
        <lebel> Cantidad </label>
        <input type="text" name="Cantidad" placeholder="ingrese cantidad " required value = "<?php echo $dato_exist['Cantidad'] ?>" >
    </div>
    <div>
        <lebel> Preciounit </label>
        <input type="text" name="Preciounit" placeholder="ingrese Precio Unitario " required value = "<?php echo $dato_exist['Preciounit'] ?>" >
    </div>
    <div>
        <lebel> Imagen </label>
        <input type="text" name="Imagen" placeholder="ingrese una imagen del producto " required value = "<?php echo $dato_exist['Imagen'] ?>" >
    </div>
    <div>
        <lebel> Fecha </label>
        <input type="date" name="Fecha" placeholder="ingrese fecha del producto  " required value = "<?php echo $dato_exist['Fecha'] ?>" >
    </div>
    <br>
    <button type ="submit"> Guardar </button>
</form>   
    
    




    
</body>
</html>