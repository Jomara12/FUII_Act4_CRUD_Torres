<?php
include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$edad=$_POST['edad'];
$curp=$_POST['curp'];

$sql="INSERT INTO paciente VALUES('$idpaciente', '$nombre', '$paterno', '$materno', '$edad', '$curp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: paciente.php");
}else {
    echo "hay un problema";
}
?>

