<?php
    for($i = 1; $i<4; $i++){
        $queryRegalos = mysqli_query($conexion, "SELECT r.Nombre, count(e.idRey) AS co FROM rey r, regalos re, entregas e WHERE r.idRey = e.idRey AND re.idRegalos = e.idRegalos AND r.idRey = $i");
        $dato = mysqli_fetch_assoc($queryRegalos);
        echo "<tr>";
        echo "<td>".$dato["Nombre"]."</td>";
        echo "<td>".$dato["co"]."</td>";
        echo "</tr>";
    }
    /*echo "<tr>";
    echo "<td>".$dato["Nombre"]."</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$dato["Nombre"]."</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$dato["Nombre"]."</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";*/
?>