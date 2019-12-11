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

        $Contrasenia="Select id,password From usuarios Where email='$email'";
        $Pass=mysqli_query($conexion,$Contrasenia);
        $fila=mysqli_fetch_assoc($Pass);
        $verifyPassword = password_verify($passwd, $fila['password']);
        $_SESSION['usuario']=$email;
        $_SESSION['identificador']=$fila['id'];
        header("location:index.php");

    }else {
        $_SESSION["errores"]=$errores;
        header("location:index.php");
    }

    mysqli_close($conexion);
?>