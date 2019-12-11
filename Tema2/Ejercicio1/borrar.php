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
    ?>
        <form action="borra.php" method="get">
            <label for="id">Identificador</label>
            <input type="number" name="id" id="id"><br>
            <input type="submit" value="Enviar datos">
        </form>

    <?php
        require_once "footer.html";
    ?>
</body>
</html>