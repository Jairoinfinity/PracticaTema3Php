<?php
    mysqli_query($conexion, "SET NAMES 'utf8'");
    $queryDatosNinios = "SELECT idNiños, Nombre, Apellidos, TIMESTAMPDIFF(YEAR,FechaNac,CURDATE()) AS edad, fechaNac, Bueno FROM niños ORDER BY Nombre ASC";


    $queryNinios = mysqli_query($conexion, $queryDatosNinios);
    while($ninio = mysqli_fetch_assoc($queryNinios)){
        echo "<tr>";
        echo "<td>".$ninio["idNiños"]."</td>";
        echo "<td>".$ninio["Nombre"]."</td>";
        echo "<td>".$ninio["Apellidos"]."</td>";
        echo "<td>".$ninio["edad"]."</td>";
        echo "<td>".$ninio["fechaNac"]."</td>";
        echo "<td>".$ninio["Bueno"]."</td>";
        echo "</tr>";
    }
?>