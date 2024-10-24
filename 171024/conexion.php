<?php
$host_Db = "localhost"; // Dirección del servidor
$user_name = "root"; // Usuario por defecto de MySQL
$user_pass= "Lunapug09."; // La contraseña es vacía por defecto en XAMPP
$db_name = "fes_aragon"; // Nombre de tu base de datos

$conexion = new mysqli($host_db,$user_name,$user_pass,$db_name);

if($conexion->connect_error){
}
else{
    echo "Conexión realizada";
}
?>