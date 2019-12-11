    <?php
        session_start();

        if(isset($_SESSION['usuario'])){
            session_destroy();
        }
        require_once("conecta.php");

        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim ($_POST['email'])) : false;
        $passwd = isset($_POST['password1']) ? mysqli_real_escape_string($conexion, trim ($_POST['password1'])) : false;
        $passwd2 = isset($_POST['password2']) ? mysqli_real_escape_string($conexion, trim ($_POST['password2'])) : false;
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim ($_POST['nombre'])) : false;
        $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion, trim ($_POST['apellido'])) : false;
        $fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($conexion, trim ($_POST['fecha'])) : false;
        $edad= (int) $_POST['edad'];
        $erroresReg=array();
        
        if (empty($email)) {
            $erroresReg['email']="El campo email esta vacio";
        }
        if (empty($passwd)) {
            $erroresReg['passwd']="El campo passwd esta vacio";
        }
        if (empty($passwd2)) {
            $erroresReg['passwd2']="El campo passwd2 esta vacio";
        }
        if (empty($nombre)) {
            $erroresReg['nombre']="El campo nombre esta vacio";
        }
        if (empty($apellido)) {
            $erroresReg['apellido']="El campo apellido esta vacio";
        }
        if (empty($fecha)) {
            $erroresReg['fecha']="El campo fecha esta vacio";
        }
        if (empty($edad)) {
            $erroresReg['edad']="El campo edad esta vacio";
        }
        if ($passwd!=$passwd2) {
            $erroresReg['diferentes']="Las contraseñas no son iguales";
        }else{
            $password_segura = password_hash($passwd, PASSWORD_BCRYPT, ['cost'=>4]);
        }
          
        if (count($erroresReg)==0) {
        
            $sql="INSERT INTO `usuarios`(`nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES ('$nombre','$apellido','$email','$password_segura','$fecha')";
            
            $insert=mysqli_query($conexion,$sql);
            if ($insert) {
                echo "Usuario registrado correctamente";
                header("location:index.php");

            }
        }else {
            $_SESSION["errores"]=$erroresReg;    
            header("location:index.php");
        }
        mysqli_close($conexion);
    ?>
