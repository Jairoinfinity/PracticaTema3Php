<?php
    $queryRegalos = mysqli_query($conexion, "SELECT r.Nombre ,count(re.idRegalo) AS co FROM regalo re, rey r WHERE re.idRey = r.idRey GROUP BY re.idRey");
        while($dato = mysqli_fetch_assoc($queryRegalos)){
            echo "<tr>";
            echo "<td>".$dato["Nombre"]."</td>";
            echo "<td>".$dato["co"]."</td>";
            echo "</tr>";
        }
        
?>