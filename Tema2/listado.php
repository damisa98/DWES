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
        $sql="Select * from coche";
        $resul=mysqli_query($conexion,$sql);
        if (mysqli_num_rows($resul)>0) {
    ?>
        <table>
            <tr>
                <th>Identificador</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Borrar</th>
                <th>Modificar</th>
            </tr>
<?php 
        while ($fila=mysqli_fetch_assoc($resul)) {?>
            <tr>
                <td>
                    <?= $fila['id'] ?>
                </td>
                <td>
                    <?= $fila['marca'] ?>
                </td>
                <td>
                    <?= $fila['modelo'] ?>
                </td>
                <td>
                    <?= $fila['precio'] ?>
                </td>
                <td>
                    <?= $fila['stock'] ?>
                </td>
                <td><a href="borra.php?id=<?= $fila['id'] ?> ">Borrar</a></td>
                <td><a href="modificarindex.php?id=<?= $fila['id'] ?>">Modificar</a></td>
            </tr>
<?php  }

    }else {
        echo "No se econtro ningun Registro";
    }
    mysqli_close($conexion);
?>
    </table>


    <?php
        require_once("footer.html");
    ?>
</body>
</html>