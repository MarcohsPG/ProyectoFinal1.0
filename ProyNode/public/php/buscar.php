<?php
session_start();
$referencia=$_SESSION['telefono'];
$referencia11=$_SESSION['email'];
if (($referencia == null || $referencia ='')and($referencia11 == null || $referencia11 ='')){
    echo "Usted no tiene acceso. Inicie sesión para ingresar.";
    die();
}else{
    include_once('./php/conexion-db.php');
    $referencia=$_SESSION['telefono'];
    $referencia11=$_SESSION['email'];
    $conectar=conexion();
    $sql="SELECT * FROM cuentas where telefono = '$referencia'";
    $sql11="SELECT * FROM cuentas where email = '$referencia11'";
    $resultado = mysqli_query($conectar,$sql);
    $resultado11 = mysqli_query($conectar,$sql11);
    $fila=mysqli_fetch_array($resultado);
    $fila11=mysqli_fetch_array($resultado11);
    $ubica=$fila['ubicacion'];
    $buscarpuesto=$_POST['buscarpuesto'];

    $sqlbuscar="SELECT * FROM vacantes where puesto LIKE '%".$buscarpuesto."%' AND  '%".$ubica."%' ";

}
?>