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
        require_once "header.html";
        require_once("conecta.php");
 
        $marca = isset($_POST['marca']) ? mysqli_real_escape_string($conexion, trim ($_POST['marca'])) : false;
        $modelo = isset($_POST['modelo']) ? mysqli_real_escape_string($conexion, trim ($_POST['modelo'])) : false;
        $precio= (int) $_POST['precio'];
        $stock= (int) $_POST['stock'];
        $id= (int) $_POST['id'];
        $errores=array();
        
        if (empty($marca)) {
            $errores['marca']="El campo marca esta vacio";
        }
        if (empty($modelo)) {
            $errores['modelo']="El campo modelo esta vacio";
        }
        if (empty($precio)) {
            $errores['precio']="El campo precio esta vacio";
        }
        if (empty($stock)) {
            $errores['stock']="El campo stock esta vacio";
        }
        if (empty($id)) {
            $errores['id']="El campo id esta vacio";
        }
          
        if (count($errores)==0) {
        
            $sql="UPDATE coche SET id=$id,modelo='$modelo',marca='$marca',precio=$precio,stock=$stock WHERE coche.id=$id";
            $insert=mysqli_query($conexion,$sql);
            if ($insert) {
                header("location:listado.php");
                echo "Datos insertados correctamente";

            }
        }else {
            $_SESSION["errore"]=$errores;
            header("location:listado.php");
        }
        mysqli_close($conexion);
        require_once "footer.html";
    ?>
</body>
</html>