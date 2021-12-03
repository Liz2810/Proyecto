<?php
include("conexion.php");
$con=conectar();

$at=$_POST['Area_trabajo'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$correo=$_POST['Correo'];
$telefono=$_POST['Telefono'];
$direccion=$_POST['Direccion'];


$sql="INSERT INTO empleado(`Area_trabajo`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Direccion`) VALUES('$at','$nombre','$apellido','$correo','$telefono', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>