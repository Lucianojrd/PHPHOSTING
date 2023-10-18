<?php
include('includes/conexion.php');
conectar();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>AA18</title>
</head>

<body>
    <h1>Tu guía de ejercicios</h1>
    <div class="orden">
        <div class="listado">
            <ul>
                <li><a href="index.php?pagina=1">Ejercicio 1</a></li>
                <li><a href="index.php?pagina=2">Ejercicio 2</a></li>
                <li><a href="index.php?pagina=3">Ejercicio 3</a></li>
            </ul>
        </div>
        <div class="desarrollo">
        <?php 
        if(!empty($_GET['pagina']))
        {
            include ('modulos/'.$_GET['pagina'].".php");
        }
    
    ?>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Posterior</a>
            </li>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>