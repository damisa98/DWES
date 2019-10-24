<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
<?php 
    $numSecreto = 1234;

    if (isset($_POST['oportunidades']) && isset($_POST['numeroIntroducido'])){
        $oportunidades = (int)$_POST['oportunidades'];
        $numeroIntroducido = (int)$_POST['numeroIntroducido'];
    }else {
        $oportunidades =4;
        $numeroIntroducido=0;
    }

    if ($numeroIntroducido == $numSecreto) {
        echo "<h1>Enhorabuena, has acertado el número.</h1>";
    } elseif ($oportunidades == 0) {
        echo "<h1>Lo siento, has agotado todas tus oportunidades. Has perdido</h1>";
    } elseif ($numeroIntroducido==0){
        echo"<h1> Bienvenido a la caja fuerte Tienes $oportunidades oportunidades para acertar un número de cuatro cifras</h1>";
        require_once ('Ejercicio1index.php');
    }else {
        $oportunidades--;

        if ($numSecreto > $numeroIntroducido){
            echo "<h1>El número que estoy pensando es mayor que el número que has introducido.</h1>";
        }else {
            echo "<h1>El número que estoy pensando es menor que el número que has introducido</h1>";
        }
        require_once ('Ejercicio1index.php');
    }

?>

    </body>
</html>