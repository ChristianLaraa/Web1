<?php  
    include "conexion.php";

    $consult_sql = "SELECT * FROM alumnos";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);

    echo "
        <table>
            <tr>
                <th>Alumnos</th>
                <th>Fecha registro</th>
            </tr>
    
    ";

    if($count > 0){
        while( $row=mysqli_fetch_array($resultado) ){
            echo "
                <tr>
                    <td>".$row['nombre_usuario']."</td>
                    <td>".$row['fecha_registro']."</td>
                </tr>
            ";
        }
?>
