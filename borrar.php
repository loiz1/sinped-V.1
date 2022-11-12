<?php

include("db.php");
$con = connection();

$id=$_GET["cedula"];

$sql="DELETE FROM factura WHERE cedula='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: menufactura.php");
}else{

}

?>