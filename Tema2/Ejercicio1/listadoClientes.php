<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Coches</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Course CSS -->
    <link rel="stylesheet" href="estilos.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        session_start();

        echo "Bienvenido ".$_SESSION['usuario'];
        require_once("header.html");
        require_once("conecta.php");
        $sql="SELECT cliente.nombre, cliente.id FROM cliente INNER JOIN encargos ON cliente.id=encargos.cliente_id INNER JOIN coche ON coche.id=encargos.coche_id";
        $resul=mysqli_query($conexion,$sql);
        if (mysqli_num_rows($resul)>0) {
    ?>
    <form action="listadoCoches.php" method="post">
        <select name="cliente" id="cliente">
<?php 
        while ($fila=mysqli_fetch_assoc($resul)) {?>
            <option value="<?= $fila['id'] ?>"><?= $fila['nombre'] ?></option>
            
<?php  }

    }else {
        echo "No se econtro ningun Registro";
    }
?>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
        mysqli_close($conexion);
        require_once("footer.html");
    ?>
</body>
</html>