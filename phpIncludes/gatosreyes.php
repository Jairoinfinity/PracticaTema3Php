<?php
    $queryGastos = mysqli_query($conexion,"SELECT re.Nombre, sum(r.Precio) AS cantidad FROM regalo r, pedido p, rey re WHERE r.idRegalo = p.idRegalo AND re.idRey = r.idRey GROUP BY r.idRey ORDER BY cantidad DESC");
    $queryGastoTotal = mysqli_query($conexion,"SELECT sum(r.Precio) AS total FROM regalo r, pedido p WHERE r.idRegalo = p.idRegalo");

    while($gasto = mysqli_fetch_assoc($queryGastos)){
        echo "<tr>";
        echo "<td>".$gasto["Nombre"]."</td>";
        echo "<td>".$gasto["cantidad"]."</td>";
        echo "</tr>";
    }

    $total = mysqli_fetch_assoc($queryGastoTotal);
    echo "<tr>";
    echo "<th>TOTAL</th>";
    echo "<th>".$total["total"]."</th>";
    echo "</tr>";
?>