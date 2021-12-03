<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$at=$_POST['Area_trabajo'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$correo=$_POST['Correo'];
$telefono=$_POST['Telefono'];
$direccion=$_POST['Direccion'];

$sql="UPDATE empleado SET  Area_trabajo='$ar',Nombre='$nombre',Apellido='$apellido',Correo='$correo',telefono='$telefono',Direccion='$direccion' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>