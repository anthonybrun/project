<?php $css_file = "create.css"; include 'partials/header.php'; ?>
<h2>Crear Producto</h2>
<form method="post">
    <label>Nombre: <input type="text" name="name" required></label><br>
    <label>Precio: <input type="number" step="0.01" name="price" required></label><br>
    <button type="submit">Guardar</button>
    <a href="index.php">Cancelar</a>
</form>
<?php include 'partials/footer.php'; ?>