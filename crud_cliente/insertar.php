<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$numtarjeta=$_POST['Numero_de_tarjeta'];
$correo=$_POST['Correo'];
$telefono=$_POST['Telefono'];
$direccion=$_POST['Direccion'];


$sql="INSERT INTO cliente(`Nombre`, `Apellido`, `Numero_de_tarjeta`, `Correo`, `Telefono`, `Direccion`) VALUES('$nombre','$apellido','$numtarjeta','$correo','$telefono', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>