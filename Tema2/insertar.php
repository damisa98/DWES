<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Coches</title>
</head>
<body>
    <?php
        require_once("header.html");
        require_once("conecta.php");
    ?>
        <form action="insertar.php" method="post">
            <label for="Marca">Marca</label>
            <label for="Modelo">Modelo</label>
            <label for="Precio">Precio</label>
            <label for="Stock">Stock</label>

        </form>

    <?php

        $sql="INSERT INTO `coche`(`modelo`, `marca`, `precio`, `stock`) VALUES ("A3","audi",50000,85)";
        $insert=mysqli_query($conexion,$sql);
        if ($insert) {
            
            echo "Datos insertados correctamente";

        }else {
            echo "Error : " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
        require_once("footer.html");
    ?>
</body>
</html>