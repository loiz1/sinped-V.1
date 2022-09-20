<?php

$conexion=mysqli_connect("localhost","root","","sinped");

$usuario=$_POST['usuario'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","sinped");

$consulta="SELECT*FROM registro where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.html");

}else{
    ?>
    <?php
    include("principal.html");


}
mysqli_free_result($resultado);
mysqli_close($conexion);