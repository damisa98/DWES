<?php
        session_start();   
        require_once("conecta.php"); 
 
        $buscar = isset($_POST['buscar']) ? mysqli_real_escape_string($conexion, trim ($_POST['buscar'])) : false;        
        $errores = array();

        
        if (empty($buscar)) {
            $errores['buscar']="El campo buscar esta vacio";
        }

        if (count($errores)==0) {
            $sql="SELECT * FROM entradas WHERE titulo like '%$buscar%'";
            $consulta=mysqli_query($conexion,$sql);
            
            $fila=mysqli_fetch_assoc($consulta); 
            $num=0;
            
        }else {
            $_SESSION["errores"]=$errores;
            header("location:index.php");
        }
            mysqli_close($conexion);
            require_once "footer.php";
        ?>