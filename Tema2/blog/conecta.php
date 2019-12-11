<?php 

    $servidor="localhost";
    $usuario="usuario";
    $clave= "usuario";
    $bd="blog";
    //Realizamos la conexión al servidor y guarda los parametros en la variable conexion
    $conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
    if (mysqli_connect_errno()) {
    echo "Dio un error al intentar conectar con la base de datos.<br/>";
    die ("Error: " . mysqli_connect_error());
    }
    //consulta para configurar la codificación de caractéres
    mysqli_query($conexion, "SET NAMES 'utf8'");

?>