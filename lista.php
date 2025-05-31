<?php
$conexion = new mysqli("localhost", "root", "salon210", "antbase");

    $resultado = $conexion->query("SELECT * FROM usuario"); 
    while ($fila = $resultado->fetch_assoc()) { 
        echo $fila['name'] . " - " . $fila['email'] . 
        "<a href='./usuact.php?id=".$fila['id']."'>EDITAR</a>
         <a style='color:red' href='./UserDelete.php?id=".$fila['id']."'>BORRAR</a><br>"; 
    } 
?>