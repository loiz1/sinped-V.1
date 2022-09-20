
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu3.css "> 
    <title>Sistema de Facturas</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</head>
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
        <div class="container">
            <div class="cliente-items">
                <div class="cliente">
                    <h1>Crear Factura</h1>
                    <form class="form" name="Crear_Pedido" action="factura.php" method="post">
                    <input type="text" placeholder="Nombre" class="nombre" required/>
                    <input type="text" placeholder="Correo" class="correo" required/>
                    <input type="number" placeholder="Cedula" class="cedula" required/>
                    <input type="number" placeholder="Telefono" class="telefono" required/>
                    <input type="text" placeholder="Pedido" class="pedido" required/>
                    <input type="text" placeholder="Direccion" class="direccion" required/>
                    <input type="number" placeholder="Factura" class="factura1" required/>
                    <input type="date" placeholder="Entrega" class="entrega" required/>
                    <input type="submit" class="submit" value="Guardar">
                    </form>
                </div>
                <div class="factura">
                    <h1>Datos de Factura</h1>
                    <div class="col-md-84">
                    <table class="tabla" >
                        <thead>
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de Compra</th>
                                <th scope="col">Numero de Factura</th>
                                <th scope="col">Items</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['cod_estudiante']?></th>
                                    <th><?php  echo $row['dni']?></th>
                                    <th><?php  echo $row['nombres']?></th>
                                    <th><?php  echo $row['apellidos']?></th>                                         
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
</body>
</html>