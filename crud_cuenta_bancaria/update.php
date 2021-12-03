<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$pp=$_POST['Pagos_pendientes'];
$dc=$_POST['Dinero_cuenta'];

$sql="UPDATE cuenta_bancaria SET  Nombre='$nombre',Apellido='$apellido',Direccion='$direccion',Telefono='$telefono',Pagos_pendientes='$pp',Dinero_cuenta='$dc' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>