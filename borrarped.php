<?php

include("db.php");
$con = connection();

$id=$_GET["cedulaped"];

$sql="DELETE FROM pedido WHERE cedulaped='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: menupedido.php");
}else{

}

?>