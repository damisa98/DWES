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
        $errores=array();
        
        if (empty($id)) {
            $errores['id']="El campo id esta vacio";
        }
          
        if (count($errores)==0) {
        
            $sql="DELETE FROM coche WHERE coche.id=$id";
            $delete=mysqli_query($conexion,$sql);
            if ($delete) {
                header("location:listado.php");
                echo "Datos eliminados correctamente";

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