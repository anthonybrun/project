
<?php
$conn = mysqli_connect("localhost", "root", "salon210", "antbase");

$sql = "SELECT producto.name AS producto, producto.money,categorias.name AS categoria
        FROM producto
        JOIN categorias ON producto.categoria_id = categorias.id";

$resultado = mysqli_query($conn, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Producto: " . $fila['producto'] . " - Precio: $" . $fila['money'] . " - Categoría: " . $fila['categoria'] . "<br>";
}
?>
