<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$numtarjeta=$_POST['Numero_de_tarjeta'];
$correo=$_POST['Correo'];
$telefono=$_POST['Telefono'];
$direccion=$_POST['Direccion'];

$sql="UPDATE cliente SET  Nombre='$nombre',Apellido='$apellido',Numero_de_tarjeta='$numtarjeta',Correo='$correo',telefono='$telefono',Direccion='$direccion' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>