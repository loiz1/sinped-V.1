<?php
include("db.php");
$con = connection();

$conexion = mysqli_connect('localhost','root','','sinped') or die(mysql_error($mysqli));

$sql = "SELECT * FROM factura";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/menufac.css "> 
    <title>Sistema de Facturas</title>
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
    <form action="menufactura.php" method="post">
        <div class="container">
            <div class="cliente-items">
                <div class="cliente">
                <h1>Crear Factura</h1>
                    <form class="form" name="Crear_Factura" action="" method="post">
                    <input class="control" type="number" name="cedulafac" placeholder="Cedula Cliente" required/>
                    <input class="control" type="text" name="nombrecli" placeholder="Nombre Cliente" required/>
                    <input class="control" type="number" name="items" placeholder="Cantidad de Items" required/>
                    <input class="submit "type="submit" name="guardar" value="Guardar"> 
                </div>
                <?php
                if (isset ($_POST["guardar"])){
                $cedula=$_POST['cedulafac'];
                $nombre=$_POST['nombrecli'];
                $items=$_POST['items'];
                $insertar = "INSERT INTO factura (cedula, nombre, items) 
                VALUES ('$cedula','$nombre','$items')";
                $ejecutar = mysqli_query($conexion,$insertar);
                if($query){
                    Header("Location: menufactura.php");
                }else{
                
                }
                }
            ?>
            <div class="users-table">
                <h2>Facturas Creadas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Factura</th>
                        <th>Items</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>

                        <th><?= $row['cedula'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['fechacom'] ?></th>
                        <th><?= $row['numerofact'] ?></th>
                        <th><?= $row['items'] ?></th>
                        <th><a href="borrar.php? cedula=<?= $row['cedula'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>