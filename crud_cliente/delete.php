<?php

include("conexion.php");
$con=conectar();

$ClienteID=$_GET['id'];

$sql="DELETE FROM cliente  WHERE idCliente='$ClienteID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
