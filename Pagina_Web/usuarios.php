<?php
    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $usuario= $_POST['usuario'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];

    $conexion = mysqli_connect('localhost','id19008492_sebasunlocker','10ALf@ROse660120','id19008492_web');
    //echo"<h1>Usuarios registrados</h1>";
    if($conexion){
        $sql = "INSERT INTO usuarios VALUES(NULL,'".$nombre."','".$apellidos."','".$usuario."','".$telefono."','".$correo."', '".$contrasena."')";
        $inserta = mysqli_query($conexion, $sql);
        echo "Registro exitoso";
    }    
        /*$sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion,$sql);
 
        echo "<table border='1'>";
        echo "<tr>
        <td><strong>ID</strong></td>
        <td><strong>Nombre(s)</strong></td>
        <td><strong>Apellidos</strong></td>
        <td><strong>Usuarios</strong></td>
        <td><strong>Telefonos</strong></td>
        <td><strong>Correo</strong></td>
        <td><strong>Contraseña</strong></td>
        </tr>";
        while ($fila=mysqli_fetch_array($resultado)){
        
        echo "<tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td><td>".$fila['apellidos']."</td><td>".$fila['usuario']." </td><td>".$fila['telefono']."</td> <td>".$fila['correo']."</td><td>".$fila['contrasena']."</td></tr>";
     }
    echo "</table>";
    
    echo "<a href='aportes.html'>Regresar</a>";
    }
    else{
        echo "conexion fallida";
    }*/