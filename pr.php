<?php
$conn = mysqli_connect("localhost", "root", "salon210", "tiendas");

// Obtener categorías
$categorias = mysqli_query($conn, "SELECT * FROM antbase.categorias");
?>
<form action="lis.php" method="POST">
  Nombre: <input type="text" name="nombre"><br>
  Precio: <input type="number" step="0.01" name="precio"><br>
  Categoría:
  <select name="categoria_id">
    <?php while($cat = mysqli_fetch_assoc($categorias)) { ?>
      <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
    <?php } ?>
  </select><br>
  <input type="submit" value="Guardar">
</form>