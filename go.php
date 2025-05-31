<?php
$conexion = new mysqli("localhost", "root", "salon210", "antbase");
$nombre = $_POST['nombre'];
$sql = "INSERT INTO categorias (name) VALUES ('$nombre')";
if ($conexion->query($sql)) {
echo "categoria creada";
} else {
echo "Error: " . $conexion->error;
}
?>