<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$correo=$_POST['Correo'];
$cantidadPrestamo=$_POST['Cantidad_prestamo'];
$fechaPrestamo=$_POST['Fecha_prestamo'];
$cantidadFaltante=$_POST['Cantidad_faltante'];

$sql="INSERT INTO creditos(`Nombre`, `Apellido`, `Correo`, `Cantidad_prestamo`, `Fecha_prestamo`, `Cantidad_faltante`) VALUES('$nombre','$apellido','$correo','$cantidadPrestamo','$fechaPrestamo', '$cantidadFaltante')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>