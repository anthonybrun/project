<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$id = $_POST['id'];
$conexion = new mysqli("localhost", "root", "salon210", "antbase"); 
$sql = "UPDATE usuario set name'$nombre', email='$correo' WHERE id = $id";

if ($conexion->query($sql)) { 
    echo "Usuario Actualizado"; 
} else { 
    echo "Error: " . $conexion->error; 
} 
?>