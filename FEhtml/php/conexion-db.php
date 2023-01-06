<?php
function conexion(){
    $hostname="localhost:3307";
    $usuariodb = "root";
    $pass="";
    $dbname="usuarios";

    $conectar = mysqli_connect($hostname,$usuariodb,$pass,$dbname);
    return $conectar;
}
?>