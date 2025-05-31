<?php 
    $id = $_GET['id']; 
  
    $conexion = new mysqli("localhost", "root", "salon210", "antbase");

    $resultado = $conexion->query("SELECT id , name, email FROM usuario WHERE id=".$id); 
    $usuario = $resultado->fetch_assoc();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="actualizar.php">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $usuario['name']; ?>"> 
        Correo: <input type="text" name="correo" value="<?php echo $usuario['email']; ?>"> 
        <input type="submit" value="Actualizar"> 
    </form>
</body>
</html>