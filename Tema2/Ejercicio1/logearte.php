   <?php
        session_start();
        require_once("conecta.php");
 
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim ($_POST['email'])) : false;
        $passwd = isset($_POST['password']) ? mysqli_real_escape_string($conexion, trim ($_POST['password'])) : false;        
        $errores=array();
        
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email'] = "El email no es válido";
        }
        if (empty($passwd)) {
            $errores['passwd']="El campo passwd esta vacio";
        }

        if (count($errores)==0) {
/* Otra forma de hacerlo */
            $Contrasenia="Select * From usuario Where email='$email'";
            $Pass=mysqli_query($conexion,$Contrasenia);

            $fila=mysqli_fetch_assoc($Pass);
            
            $verifyPassword = password_verify($passwd,$fila['password']);

            if ($verifyPassword==true) {
                header("location:listado.php");
            }else {
                $errores['notExict']="El correo no existe";
                $_SESSION["errores"]=$errores;
                header("location:index.php");
            }

        }else {
            $_SESSION["errores"]=$errores;
            header("location:index.php");
        }

        mysqli_close($conexion);
    ?>