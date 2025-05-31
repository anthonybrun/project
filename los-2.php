

<?php
$conn = mysqli_connect("localhost", "root", "salon210", "antbase");

$sql = "SELECT categorias.name AS categoria FROM categorias";

$resultado = mysqli_query($conn, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo  "- Categoría: " . $fila['categoria'] . "<br>";
}
?>
