<?php

include("db.php");
$con = connection();

$cedula=$_POST['cedulafac'];
$name = $_POST['nombrecli'];
$fechacom = $_POST['fechacom'];
$numerofact = $_POST['numerofact'];
$items = $_POST['items'];

$sql="UPDATE factura SET name='$nombre', cedulafac='$cedula', items='$items' WHERE cedulafac='$cedula'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: menufactura.php");
}else{

}

?>