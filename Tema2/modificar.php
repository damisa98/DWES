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

            }else {
                echo "Error : " . mysqli_error($conexion);
            }
        }else {
            header("location:listado.php");
        }
        mysqli_close($conexion);
        require_once "footer.html";
    ?>
</body>
</html>