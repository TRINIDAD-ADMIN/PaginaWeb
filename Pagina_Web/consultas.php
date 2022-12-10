<html>
<head>
  <title>SebasUnlocker Consultas</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="estilos2.css">-->
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">



    <center><h1>SebasUnlocker</h1></center>

    <form method="POST" action="consultas.php" >

    <div class="form-group">
      <label for="imeiD">Consultar</label>
      <input type="text" name="imeiD" class="form-control" id="imeiD" placeholder="Ingrese su imei" aria-label="Ingrese su imei" aria-describedby="button-addon2">
  </div>

  <!--<div class="form-group">
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" class="form-control" id="nombre" >
  </div>

   <div class="form-group">
      <label for="dir">Direccion </label>
      <input type="text" name="dir" class="form-control" id="dir">
  </div>

  <div class="form-group">
      <label for="tel">Telefono </label>
      <input type="text" name="tel" class="form-control" id="tel">
  </div>
    -->
    <center>
      <!--<input type="submit" value="Enviar" class="btn btn-success" name="btn1">-->
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    </center>

  </form>



  <?php
  
    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

        $imeiD = $_POST['imeiD'];
        //$marca = $_POST['marca'];
        //$modelo = $_POST['modelo'];
        //$reparacion = $_POST['reparacion'];
        //$fechaR = $_POST['fechaR'];
        //$costoR = $_POST['costoR'];
        //$descripcion = $_POST['descripcion'];
        
        if($imeiD=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {
              echo 
              "<p>
              <br>
              <br>
              <center>Ingrese su imei en el campo de texto</center>
              </p>";
          }
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM dispositivos WHERE imeiD = '$imeiD'");
          while($consulta = mysqli_fetch_array($resultados))
          {
            /*echo 
            "
              <table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>imei</center></b></td>
                  <td><b><center>Marca</center></b></td>
                  <td><b><center>Modelo</center></b></td>
                  <td><b><center>Reparacion</center></b></td>
                  <td><b><center>Fecha</center></b></td>
                  <td><b><center>Costo</center></b></td>
                  <td><b><center>Descripcion</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['imeiD']."</td>
                  <td>".$consulta['marca']."</td>
                  <td>".$consulta['modelo']."</td>
                  <td>".$consulta['reparacion']."</td>
                  <td>".$consulta['fechaR']."</td>
                  <td>".$consulta['costoR']."</td>
                  <td>".$consulta['descripcion']."</td>
                </tr>
              </table>
            ";*/
            echo"
                <p>
        		    
                    <br>
        		    <b><center>IMEI: </b> ".$consulta['imeiD']." </center><br>
        		    <b><center>Marca: </b> ".$consulta['marca']." <center><br>
        		    <b><center>Modelo: </b> ".$consulta['modelo']." <center><br>
        		    <b><center>Reparacion: </b> ".$consulta['reparacion']." <center><br>
        		    <b><center>Responsable: </b> ".$consulta['responsable']." <center><br>
        		    <b><center>Telefono: </b> ".$consulta['telefono']." <center><br>
        		    <b><center>Fecha: </b> ".$consulta['fechaR']." <center><br>
        		    <b><center>Costo: </b> ".$consulta['costoR']." <center><br>
        		    <b><center>Descripcion: </b> ".$consulta['descripcion']." <center><br>
        		    
        		</p>
            ";
          }
        }

      include("cerrar_conexion.php");
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>