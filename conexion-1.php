<?php
$conexion = new mysqli("localhost", "root", "salon210", "antbase");
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
} else {
echo "Conectado exitosamente";
}
?>
