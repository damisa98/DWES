<header>
    <h1>Blog VideoJuegos</h1>
</header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-link"><a href="index.php" class="nav-link">Inicio</a></li>
        <?php 
            require_once("conecta.php");
            $categorias="Select id,nombre from categorias";
            $anadir=mysqli_query($conexion,$categorias);
            if (mysqli_num_rows($anadir)>0) {
                while ($fila=mysqli_fetch_assoc($anadir)) {
        ?>
        <li class="nav-link"><a href="categorias.php?id=<?= $fila['id'] ?>" class="nav-link" ><?= $fila['nombre'] ?></a></li>


        <?php 
            }
        }

        ?>
        <li class="nav-link"><a href="sobremi.php" class="nav-link">Sobre Mi</a></li>
        <li class="nav-link"><a href="contacto.php" class="nav-link">Contacto</a></li>
    </ul>
</nav>