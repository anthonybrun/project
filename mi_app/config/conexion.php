<?php
function conectar(){
    $host = 'localhost';
    $usuario = 'anthony';
    $clave = 'ant12345';
    $base_datos = 'binary';

    $conexion = new mysqli($host,$usuario,$clave,$base_datos);
    
    if ($conexion->connect_error){
        die('Error de conexión: ' . $conexion->connect_error);
    }
    return $conexion;
}
?>
