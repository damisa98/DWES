<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog VideoJuegos</title>
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
        require_once "header.php";
        require_once("conecta.php");
 
        $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion, trim ($_POST['titulo'])) : false;
        $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, trim ($_POST['descripcion'])) : false;
        $idCategoria=(int)$_POST['categoria'];
        $idUsu=$_SESSION['identificador'];
        $id= (int) $_POST['id'];
        $errores=array();
        
        if (empty($titulo)) {
            $errores['titulo']="El campo titulo esta vacio";
        }
        if (empty($descripcion)) {
            $errores['descripcion']="El campo descripcion esta vacio";
        }
        if (empty($idUsu)) {
            $errores['idUsuario']="El campo id Usuario esta vacio";
        }
        if (empty($idCategoria)) {
            $errores['idCategoria']="El campo id Categoria esta vacio";
        }
          
        if (count($errores)==0) {
        
            $sql="UPDATE entradas SET titulo='$titulo',descripcion='$descripcion', categoria_id=$idCategoria WHERE entradas.id=$id AND entradas.usuario_id=$idUsu";
            $insert=mysqli_query($conexion,$sql);
            if ($insert) {
                header("location:index.php");

            }
        }else {
            $_SESSION["errores"]=$errores;
            header("location:index.php");
        }
        mysqli_close($conexion);
        require_once "footer.php";
    ?>
</body>
</html>