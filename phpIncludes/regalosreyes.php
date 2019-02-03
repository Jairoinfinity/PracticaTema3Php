<?php
    $queryRegalos = mysqli_query($conexion, "SELECT count(*) AS co FROM regalos re WHERE re.idRegalos IN (SELECT idRegalos FROM pedidos)");
    echo "<tr>";
    echo "<td> ffff</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> ffff</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> ffff</td>";
    echo "<td>".$dato["co"]."</td>";
    echo "</tr>";
?>