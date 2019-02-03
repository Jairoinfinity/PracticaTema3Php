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
<div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Tabla Niños
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
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
      </div>
    </div>
  </div>
<!-- b.Los regalos que ha pedido el niño que se seleccione mediante un formulario-->
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Seleccionar regalos
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        
        <section>
            <h1>Carta de regalos</h1>
            <form action="phpIncludes/regalosform.php" method="POST">
                <label>Niño:</label>
                <select name="id">
                    <option value="1">Alberto Alcántara</option>
                    <option value="2">Beatriz Bueno</option>
                    <option value="3">Carlos Crepo</option>
                    <option value="4">Diana Domínguez</option>
                    <option value="5">Emilio Enamorado</option>
                    <option value="6">Francisca Fernández</option>
                </select>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Check</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aula de ciencia: Robot Mini ERP</td>
                            <td><input type="checkbox" name="reg1" value="1"></td>
                        </tr>
                        <tr>
                            <td>Carbón</td>
                            <td><input type="checkbox" name="reg2" value="2"></td>
                        </tr>
                        <tr>
                            <td>Cochecito Classic</td>
                            <td><input type="checkbox" name="reg3" value="3"></td>
                        </tr>
                        <tr>
                            <td>Consola PS4 1 TB</td>
                            <td><input type="checkbox" name="reg4" value="4"></td>
                        </tr>
                        <tr>
                            <td>Lego Villa familiar modular</td>
                            <td><input type="checkbox" name="reg5" value="5"></td>
                        </tr>
                        <tr>
                            <td>Magia Borrás Clásica 150 trucos con luz</td>
                            <td><input type="checkbox" name="reg6" value="6"></td>
                        </tr>
                        <tr>
                            <td>Meccano Excavadora construcción</td>
                            <td><input type="checkbox" name="reg7" value="7"></td>
                        </tr>
                        <tr>
                            <td>Nenuco Hace pompas</td>
                            <td><input type="checkbox" name="reg8" value="8"></td>
                        </tr>
                        <tr>
                            <td>Peluche delfín rosa</td>
                            <td><input type="checkbox" name="reg9" value="9"></td>
                        </tr>
                        <tr>
                            <td>Pequeordenador</td>
                            <td><input type="checkbox" name="reg10" value="10"></td>
                        </tr>
                        <tr>
                            <td>Robot Coji</td>
                            <td><input type="checkbox" name="reg11" value="11"></td>
                        </tr>
                        <tr>
                            <td>Telescopio astronómico terrestre</td>
                            <td><input type="checkbox" name="reg12" value="12"></td>
                        </tr>
                        <tr>
                            <td>Twister</td>
                            <td><input type="checkbox" name="reg13" value="13"></td>
                        </tr>
                    </tbody>
                </table>
                
                <input type="submit">
            </form>
        </section>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Cantidad de regalos por reyes
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
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
      </div>
    </div>
  </div>

</div>
    
    



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>