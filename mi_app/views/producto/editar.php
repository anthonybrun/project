<?php $css_file = "edit.css"; include 'partials/header.php'; ?>
<h2>Editar Producto</h2>
<form method="post">
    <label>Nombre: <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required></label><br>
    <label>Precio: <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product['price']) ?>" required></label><br>
    <button type="submit">Actualizar</button>
    <a href="index.php">Cancelar</a>
</form>
<?php include 'partials/footer.php'; ?>