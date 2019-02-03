<?php
include "conexion.php";
$idNinio = $_POST["id"];
$idRegalos = [];

    if(isset($_POST["reg1"])){
        $idRegalos[] = $_POST["reg1"];
    }

    if(isset($_POST["reg2"])){
        $idRegalos[] = $_POST["reg2"];
    }

    if(isset($_POST["reg3"])){
        $idRegalos[] = $_POST["reg3"];
    }

    if(isset($_POST["reg4"])){
        $idRegalos[] = $_POST["reg4"];
    }
    
    if(isset($_POST["reg5"])){
        $idRegalos[] = $_POST["reg5"];
    }

    if(isset($_POST["reg6"])){
        $idRegalos[] = $_POST["reg6"];
    }

    if(isset($_POST["reg7"])){
        $idRegalos[] = $_POST["reg7"];
    }

    if(isset($_POST["reg8"])){
        $idRegalos[] = $_POST["reg8"];
    }

    if(isset($_POST["reg9"])){
        $idRegalos[] = $_POST["reg9"];
    }

    if(isset($_POST["reg10"])){
        $idRegalos[] = $_POST["reg10"];
    }

    if(isset($_POST["reg11"])){
        $idRegalos[] = $_POST["reg11"];
    }

    if(isset($_POST["reg12"])){
        $idRegalos[] = $_POST["reg12"];
    }

    if(isset($_POST["reg13"])){
        $idRegalos[] = $_POST["reg13"];
    }

    

    foreach($idRegalos as &$i){
        $queryInsert = mysqli_query($conexion,"INSERT INTO pedidos VALUES($idNinio,$i)");
    }

    if($queryInsert){
        echo "<h2>Datos Insertados</h2>";
        echo "<a href='../index.php'>Volver</a>";
    }else{
        echo mysqli_error();
    }
    


?>