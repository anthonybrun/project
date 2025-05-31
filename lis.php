<?php
$conn = mysqli_connect("localhost", "root", "ant1234", "antbase");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria_id = $_POST['categoria_id'];

$sql = "INSERT INTO producto (name, money, categoria_id) VALUES ('$nombre', '$precio', '$categoria_id')";
mysqli_query($conn, $sql);

header("Location: ab.php");
?>