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
    <title>Document</title>
</head>
<body>
<?php if ($productos) : ?>
        <ul>
            <?php foreach ($productos as $producto) : ?>
                <li>
                    Nombre: <?php echo $producto['Nombre']; ?><br>
                    Precio: <?php echo $producto['Imagen']; ?><br>
                    Descripción: <?php echo $producto['Categoria']; ?><br>
                    <!-- Agrega aquí más detalles de los productos según tu base de datos -->
                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No se encontraron productos.</p>
    <?php endif; ?>
</body>
</html>
