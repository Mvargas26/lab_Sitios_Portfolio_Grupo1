<?php
include_once('App/Db.php');
include_once('App/Producto.php');

$db = new Db();
$producto = new Producto($db);

$productos = $producto->mostrarProductos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="main">

        <h1>LAB SITIOS PORTFOLIO GRUPO 1</h1>
        <hr>

        <h2>PORTFOLIO</h2>

        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('nature')"> Nature</button>
            <button class="btn" onclick="filterSelection('cars')"> Cars</button>
            <button class="btn" onclick="filterSelection('people')"> People</button>
            <button class="btn" onclick="filterSelection('dogs')"> Dogs</button>
        </div>

        <div class="row">
            <?php if ($productos) : ?>
                <?php foreach ($productos as $producto) : ?>
                    <div class="column <?php echo $producto['Categoria']; ?>">
                        <div class="content">
                            <img src="assets/images/<?php echo $producto['Imagen']; ?>" alt="Lights" style="width:100%">
                            <h4> <?php echo $producto['Nombre']; ?></h4>
                            <p> <?php echo $producto['Descripcion']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No se encontraron productos.</p>
            <?php endif; ?>

        </div>
        <!-- END MAIN -->
    </div>
    <script src="./assets/js/scripts.js"></script>
</body>

</html>