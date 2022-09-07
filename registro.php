<?php

$conexion = mysqli_connect('localhost','root','','sinped') or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['pass'];

    $consulta = "INSERT INTO registro (nombre, correo, usuario, contraseña) 
    VALUES ('$nombre','$correo','$usuario','$contraseña')"; 
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location:registrado.html");
    
} 
?>