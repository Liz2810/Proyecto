<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$pp=$_POST['Pagos_pendientes'];
$dc=$_POST['Dinero_cuenta'];


$sql="INSERT INTO cuenta_bancaria(`Nombre`, `Apellido`, `Direccion`, `Telefono`, `Pagos_pendientes`, `Dinero_cuenta`) VALUES('$nombre','$apellido','$direccion','$telefono','$pp', '$dc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>