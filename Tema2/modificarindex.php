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
        require_once("conecta.php");
        $id= (int) $_GET['id'];
        $sql="Select * from coche where id=$id";
        $resul=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resul)
    ?>
        <form action="modificar.php" method="post">
            <label for="Marca">Marca</label>
            <input type="text" name="marca" id="marca" value="<?= $fila['marca'] ?>"><br>
            <label for="Modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" value="<?= $fila['modelo'] ?>"><br>
            <label for="Precio">Precio</label>
            <input type="number" name="precio" id="precio" value="<?= $fila['precio'] ?>"><br>
            <label for="Stock">Stock</label>
            <input type="number" name="stock" id="stock" value="<?= $fila['stock'] ?>"><br>
            <input type="hidden" name="id" value="<?= $fila['id'] ?>">
            <input type="submit" value="Enviar datos">
        </form>

    <?php
        mysqli_close($conexion);
        require_once "footer.html";
    ?>
</body>
</html>