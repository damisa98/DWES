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
        if(isset($_SESSION['usuario'])){
            session_destroy();
        }
        if(isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $valor ) {
                echo "<p>*: $valor </p><br>";
                $_SESSION['errores'] = null;
            }
            
        }
        require_once("header2.html");
        require_once("conecta.php");
        
    ?>
        <div class="conte">
        <div class="form-group">
            <form action="logeo.php" method="post" >
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" required><br>
                <label for="Contraseña">Contraseña</label>
                <input type="password" name="password" id="password" required><br>
                <input type="submit" value="Entrar">
            </form>
        </div>

        <div class="form-group">
            <form action="registrarte.php" method="post" >
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" required><br>
                <label for="Contraseña1">Contraseña</label>
                <input type="password" name="password1" id="password1" required><br>
                <label for="Contraseña2">Repite la Contraseña</label>
                <input type="password" name="password2" id="password2" required><br>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required><br>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" required><br>
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad" required><br>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" required><br>
                <input type="submit" value="Registrarte">
            </form>
        </div>
        </div>
    <?php
        mysqli_close($conexion);
        require_once("footer2.html");
    ?>
</body>
</html>