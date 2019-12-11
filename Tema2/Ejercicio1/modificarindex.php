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
        require_once "header.html";
        require_once("conecta.php");
        $id= (int) $_GET['id'];
        $sql="Select * from coche where id=$id";
        $resul=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resul);
    ?>
        <div class="conte">
        <div class="form-group">
            <form action="modificar.php" method="post">
                <label for="Marca">Marca</label>
                <input type="text" name="marca" id="marca" value="<?= $fila['marca'] ?> "required><br>
                <label for="Modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" value="<?= $fila['modelo'] ?>"required><br>
                <label for="Precio">Precio</label>
                <input type="number" name="precio" id="precio" value="<?= $fila['precio'] ?>"required><br>
                <label for="Stock">Stock</label>
                <input type="number" name="stock" id="stock" value="<?= $fila['stock'] ?>"required><br>
                <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                <input type="submit" value="Enviar datos">
            </form>
        </div>
        </div>
    <?php
        mysqli_close($conexion);
        require_once "footer.html";
    ?>
</body>
</html>