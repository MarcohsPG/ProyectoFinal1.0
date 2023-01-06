<?php
include_once('./conexion-db.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$conectar=conexion();
$sql="INSERT INTO cuentas (nombres,apellidos,telefono,email,pass) VALUES ('$nombres','$apellidos','$telefono','$email','$pass') ";
$resultado = mysqli_query($conectar,$sql) or trigger_error("Error al conectar, vuel a intentarlo - Error:".mysqli_error($conectar));

echo'<h1>✅Registro Exitoso✅</h1>';

echo '<a href="../index.html">Volver</a>';
echo '<a href="../sesion.html">Iniciar Sesión</a>';

?>