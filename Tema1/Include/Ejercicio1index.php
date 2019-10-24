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
    echo "<form action='Ejercicio1.php' method='post'>
        <label for='texto'>Introuzca un numero</label>
        <input type='text' name='numeroIntroducido'>
        <input type='hidden' name='oportunidades' value=' $oportunidades '>
        <input type='submit' value='Continuar'>
    </form>
    <p>Te quedan $oportunidades oportunidades para adivinar el número.<br/> Introduce un número de 4 cifras</p>"; 
    ?>

    </body>
</html>