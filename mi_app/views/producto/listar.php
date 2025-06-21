<?php $css_file = "list.css"; include 'partials/header.php'; ?>
<a href="index.php?action=create">Crear Producto</a>
<table>
    <tr>
        <th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= htmlspecialchars($product['id']) ?></td>
        <td><?= htmlspecialchars($product['name']) ?></td>
        <td><?= htmlspecialchars($product['precio']) ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $product['id'] ?>">Editar</a>
            <a href="index.php?action=delete&id=<?= $product['id'] ?>" onclick="return confirm('¿Borrar producto?');">Borrar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include 'partials/footer.php'; ?>