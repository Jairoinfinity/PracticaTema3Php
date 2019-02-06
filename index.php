<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 3 php - Reyes magos</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">    
</head>
<body>
    <?php include "phpIncludes/conexion.php"; ?>

        <h1>Lista de niños</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Fecha Nac</th>
                    <th>Bueno</th>
                </tr>
            </thead>
            <tbody>
                <?php include "phpIncludes/ninios.php"; ?>
            </tbody>
        </table>
     
            <h1>Carta de regalos</h1>
            <form action="index.php" method="POST">
                <label>Niño:</label>
                <select name="id">
                    <option value="1">Alberto Alcántara</option>
                    <option value="2">Beatriz Bueno</option>
                    <option value="3">Carlos Crepo</option>
                    <option value="4">Diana Domínguez</option>
                    <option value="5">Emilio Enamorado</option>
                    <option value="6">Francisca Fernández</option>
                </select>                
                <input type="submit">
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Regalo</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "phpIncludes/regalosninios.php"; ?>
                </tbody>
            </table>


     <h1>Cantidad de regalos asociados a los reyes</h1>
      <table class="table table-hover">
            <thead>
                <tr>
                    <th>Rey</th>
                    <th>Cantidad de Regalos</th>
                </tr>
            </thead>
            <tbody>
                <?php include "phpIncludes/regalosreyes.php"; ?>
            </tbody>
        </table>


        <h1>Cantidad gastada por Rey</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php include "phpIncludes/gatosreyes.php"; ?>
            </tbody>
        </table>
    
    



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>