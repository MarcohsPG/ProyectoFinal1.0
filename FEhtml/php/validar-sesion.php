<?php
include_once('./conexion-db.php');
session_start();
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$_SESSION['telefono']=$telefono;
$conectar=conexion();
$sql="SELECT * FROM cuentas WHERE telefono = '".$telefono."' and pass = '".$pass."'";
$res=mysqli_query($conectar,$sql);

$nr=mysqli_num_rows($res);

if($nr==1){
    session_start();
    header("Location:../home.php");
}
else{
    echo'<h1>ERROR DE AUTENTICACION</h1>';
    echo '<a href="../sesion.html">Volver</a>';
}
?>