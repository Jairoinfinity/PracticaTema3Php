<?php
    if(isset($_POST["id"])){
        $id = $_POST["id"];
    }else{
        $id = 1;
    }

    $queryRegalos = mysqli_query($conexion, "SELECT r.idRegalo, r.Nombre, r.Precio FROM regalo r, pedido p WHERE r.idRegalo = p.idRegalo AND p.idNiño = $id");

    //echo var_dump($queryRegalos);
    while($regalo = mysqli_fetch_assoc($queryRegalos)){
        echo "<tr>";
        echo "<td>".$regalo["idRegalo"]."</td>";
        echo "<td>".$regalo["Nombre"]."</td>";
        echo "<td>".$regalo["Precio"]."</td>";
        echo "</tr>";
    }
    
?>