<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$correo=$_POST['Correo'];
$cantidadPrestamo=$_POST['Cantidad_prestamo'];
$fechaPrestamo=$_POST['Fecha_prestamo'];
$cantidadFaltante=$_POST['Cantidad_faltante'];

$sql="UPDATE creditos SET  Nombre='$nombre',Apellido='$apellido',Correo='$correo',Cantidad_prestamo='$cantidadPrestamo',Fecha_prestamo='$fechaPrestamo',Cantidad_faltante='$cantidadFaltante' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>