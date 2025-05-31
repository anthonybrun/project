<?php
$conn = mysqli_connect("localhost", "root", "salon210", "tiendas");

// Obtener categorías
$categorias = mysqli_query($conn, "SELECT * FROM antbase.categorias");
?>
<form action="go.php" method="POST">
  Nombre: <input type="text" name="nombre"><br>
 
 
  <input type="submit" value="Guardar">
</form>