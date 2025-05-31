<?php 
   $conexion = new mysqli("localhost", "root", "salon210", "antbase"); 
    $id = $_GET['id']; 
    $sql = "DELETE FROM usuarios WHERE id = $id"; 
    $conexion->query($sql); 

    if ($conexion->query($sql)) { 
        echo "Usuario Eliminado"; 
    } else { 
        echo "Error: " . $conexion->error; 
    } 
    
?>
