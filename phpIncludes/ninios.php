<?php
    mysqli_query($conexion, "SET NAMES 'utf8'");
    $queryDatosNinios = "SELECT idNiño, Nombre, Apellido, TIMESTAMPDIFF(YEAR,Fecha,CURDATE()) AS edad, Fecha, Bueno FROM niño ORDER BY Nombre ASC";


    $queryNinios = mysqli_query($conexion, $queryDatosNinios);
    while($ninio = mysqli_fetch_assoc($queryNinios)){
        echo "<tr>";
        echo "<td>".$ninio["idNiño"]."</td>";
        echo "<td>".$ninio["Nombre"]."</td>";
        echo "<td>".$ninio["Apellido"]."</td>";
        echo "<td>".$ninio["edad"]."</td>";
        echo "<td>".$ninio["Fecha"]."</td>";
        echo "<td>".$ninio["Bueno"]."</td>";
        echo "</tr>";
    }
?>