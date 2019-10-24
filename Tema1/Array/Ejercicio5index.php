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
    echo "<form action='Ejercicio5.php' method='post'>
        <label for='texto'>Escribe numeros para el array</label>
        <input type='text' name='num' id='num'>
        <input type='hidden' name='numintro' value='$numintro'>
        <input type='hidden' name='array' value='$array'>
        <input type='submit' value='Enviar'>
    </form>";
?>
</body>
</html>