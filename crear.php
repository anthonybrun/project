<?php
$conexion = new mysqli("localhost", "root", "salon210", "antbase");
$nombre = $_POST['nombre'];
$sql = "INSERT INTO usuario (name) VALUES ('$nombre')";
if ($conexion->query($sql)) {
echo "Usuario registrado";
} else {
echo "Error: " . $conexion->error;
}
?>