<?php
$host_db = "localhost"; 
$user_name = "root"; 
$user_pass = "Lunapug09."; 
$db_name = "fes_aragon"; 

$conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión realizada";
}
?>
