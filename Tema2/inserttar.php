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
        require_once "header.html";
    ?>
        <form action="insertar.php" method="post">
            <label for="Marca">Marca</label>
            <input type="text" name="marca" id="marca"><br>
            <label for="Modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo"><br>
            <label for="Precio">Precio</label>
            <input type="number" name="precio" id="precio"><br>
            <label for="Stock">Stock</label>
            <input type="number" name="stock" id="stock"><br>
            <input type="submit" value="Enviar datos">
        </form>

    <?php
        require_once "footer.html";
    ?>
</body>
</html>