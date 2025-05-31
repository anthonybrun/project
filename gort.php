<?php
$conn = mysqli_connect("localhost", "root", "salon210", "antbase");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria_id = $_POST['categoria_id'];

$sql = "INSERT INTO categorias (id, nombre, ) VALUES ('$nombre', '$precio', '$categoria_id')";
mysqli_query($conn, $sql);

header("Location: l.php");
?>