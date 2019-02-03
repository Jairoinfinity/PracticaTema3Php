<?php
        $conexion = mysqli_connect("localhost","root","","tema3");

        if(!$conexion){
            echo "No se ha realizado la conexión.";
        }else{
            echo "<h1>Base de datos de los reyes Magos</h1>";
        }
    ?>