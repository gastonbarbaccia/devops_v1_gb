<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--fornulario para ingreso de datos -->
    <div>
        <form method ="POST" action="ingresodb.php">
            <div>
                <br/>
                <br/>
                <label> Producto </label>
                <input type="text"placeholder ="ingrese el codigo de articulo" name="Producto"/>
                <br/>
                <br/>
            </div>
            <div>
                <label> Cantidad </label>
                <input type="text"placeholder ="ingrese la cantidad "name = "Cantidad"/>
                <br/>
                <br/>
            </div>
            <div>
                <label> Preciounit </label>
                <input type="float"placeholder ="ingrese el precio unitario"name="Preciounit"/>
                <br/>
                <br/>
            </div>
            <div>
                <label> Imagen </label>
                <input type="text"placeholder ="ingrese una imagen del producto"name ="Imagen"/>
                <br/>
                <br/>
            </div>
            <div>
                <label> Fecha </label>
                <input type="date"placeholder ="ingrese la fecha de ingreso"name ="Fecha"/>
                <br/>
                <br/>
            </div>
            <button type ="submit" > Guardar datos </button>
        </form>
    </div>     


    
</body>
</html>

