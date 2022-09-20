<?php


$conexion = mysqli_connect('localhost','root','','sinped') or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $cedula=$_POST['cedula_fac'];
    $nombre=$_POST['nombre_cliente'];
    $items=$_POST['can_items'];

    $consulta = "INSERT INTO factura (cedula, nombre, items) 
    VALUES ('$cedula','$nombre','$items')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    

    header("location: menu3.php");
    
} 
?>