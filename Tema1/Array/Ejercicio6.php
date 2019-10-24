<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
<?php 
    if (!isset($_POST['num'])) {
?>
    <form action='Ejercicio6.php' method='post'>
        <label for='texto'>Escribe una palabra</label>
        <input type='text' name='num' id='num'>
        <input type='submit' value='Enviar'>
    </form>
<?php 
    }else {
        $palabra=$_POST['num'];
        $array= array("hola" => "hellou" , "adios" => "bye" , "comer" => "eat" , "beber" => "beber" , "dormir" => "sleep" , "ordenador" => "computer" , "teclado" => "keyboard");

        foreach ($array as $espaniol => $ingles) {
            if ($palabra==$espaniol) {
                echo "La palabra en ingles es $ingles";
            }
        }
        
    }
?>
</body>
</html>