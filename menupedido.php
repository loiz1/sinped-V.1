<?php
include("db.php");
$con = connection();

$conexion = mysqli_connect('localhost','root','','sinped') or die(mysql_error($mysqli));

$sql = "SELECT * FROM pedido";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/menupedido.css "> 
    <title>Sistema de Pedidos</title>
<body>
    <header>
        <a href="inicio.html" class="logo">
        <img src="images/sinped.png" alt="Sinped">
        </a>
        <div class="tit">
            <h1>SINPED</h1>
        </div>
        <nav>
            <a href="principal.html" class="nav-link">Cerrar Sesion</a>
        </nav>
    </header>
    <form action="menupedido.php" method="post">
        <div class="container">
            <div class="cliente-items">
                <div class="cliente">
                <h1>Crear Pedido</h1>
                <form class="form" name="Crear_Pedido" action="" method="post">
                    <input class="control" type="number" name="cedulaped" placeholder="Cedula Cliente" required/>
                    <input class="control" type="text" name="correo" placeholder="Correo" required/>
                    <input class="control" type="number" name="telefono" placeholder="Telefono" required/>
                    <input class="control" type="text" name="direccion" placeholder="Direccion" required/>
                    <input class="control" type="date" name="fecha" placeholder="Dia de Entrega" required/>
                    <input class="submit "type="submit" name="guardar" value="Guardar"> 
                </div>
                <?php
                if (isset ($_POST["guardar"])){
                $cedulaped=$_POST['cedulaped'];
                $correo=$_POST['correo'];
                $telefono=$_POST['telefono'];
                $direccion=$_POST['direccion'];
                $fecha=$_POST['fecha'];

                $insertar = "INSERT INTO pedido (cedulaped, correo, telefono, direccion, fecha) 
                VALUES ('$cedulaped','$correo','$telefono','$direccion','$fecha')";
                $ejecutar = mysqli_query($conexion,$insertar);
                if($query){
                    Header("Location: menupedido.php");
                }else{
                
                }
                }
            ?>
            <div class="users-table">
                <h2>Pedidos Creados</h2>
                <br></br>
            <table>
                <thead>
                    <tr>
                        <th>Cedula </th>
                        <th>Correo </th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Entregar</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>

                        
                        <th><?= $row['cedulaped'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['fecha'] ?></th>
                        <th><a href="borrarped.php? cedulaped=<?= $row['cedulaped'] ?>" class="users-table--delete" >Eliminar</a></th>
                

                    </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>