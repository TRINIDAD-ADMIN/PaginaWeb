<?php
    $imeiD= $_POST['imeiD'];
    $marca= $_POST['marca'];
    $modelo= $_POST['modelo'];
    $reparacion= $_POST['reparacion'];
    $responsable= $_POST['responsable'];
    $telefono= $_POST['telefono'];
    $fechaR= $_POST['fechaR'];
    $costoR= $_POST['costoR'];
    $descripcion= $_POST['descripcion'];

    $conexion = mysqli_connect('localhost','id19008492_sebasunlocker','10ALf@ROse660120','id19008492_web');
    echo"<h1>Dispositivos Registro</h1>";
    if($conexion){
        $sql = "INSERT INTO dispositivos VALUES(NULL,'".$imeiD."','".$marca."','".$modelo."','".$reparacion."','".$responsable."','".$telefono."','".$fechaR."','".$costoR."','".$descripcion."')";
        $inserta = mysqli_query($conexion, $sql);
    }    
        /*
        //echo "Registro exitoso";
        $sql = "SELECT * FROM dispositivos";
        $resultado = mysqli_query($conexion,$sql);
 
        echo "<table>";
        echo "\n<tr>
        <td><strong>ID</strong></td>
        <td><strong>IMEI(s)</strong></td>
        <td><strong>Marca</strong></td>
        <td><strong>Modelo</strong></td>
        <td><strong>Reparación</strong></td>
        <td><strong>Responsable</strong></td>
        <td><strong>Telefono</strong></td>
        <td><strong>Fecha en recepcion</strong></td>
        <td><strong>Cost de la reparacion</strong></td>
        <td><strong>Descripción</strong></td>
        </tr>";
        while ($fila=mysqli_fetch_array($resultado)){
        
        echo "<tr><td>".$fila['id']."</td>
        <td>".$fila['imeiD']."</td>
        <td>".$fila['marca']."</td>
        <td>".$fila['modelo']." </td>
        <td>".$fila['reparacion']."</td>
        <td>".$fila['responsable']." </td>
        <td>".$fila['telefono']."</td>
        <td>".$fila['fechaR']."</td>
        <td>".$fila['costoR']."</td>
        <td>".$fila['descripcion']."</td></tr>";
     }
    
    echo "</table>";
    echo "<a href='dispositivos.html'>Regresar</a>";
    }
    else{
        echo "conexion fallida";
    }*/