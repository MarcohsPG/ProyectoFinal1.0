<?php
session_start();
$referencia=$_SESSION['telefono'];
if (($referencia == null || $referencia ='')and($referencia11 == null || $referencia11 ='')){
    echo "Usted no tiene acceso. Inicie sesión para ingresar.";
    die();
}
else{
    include_once('../php/conexion-db.php');
    $referencia=$_SESSION['telefono'];
    $conectar=conexion();
    $sql="SELECT * FROM cuentas where telefono = '$referencia'";
    $resultado = mysqli_query($conectar,$sql);
    $fila=mysqli_fetch_array($resultado);

    $id_usuario=$fila['id_usuario'];
    $cv= addslashes(file_get_contents($_FILES['curriculum']['tmp_name']));
    $sqlcv="INSERT INTO cv (id_usuario,cv) VALUES ('$id_usuario','$cv')";
    $resulcv= $conectar->query($sqlcv);
    if($resulcv){
        header("Location:../buscador.php");
    }
    else{
        echo "no se cambió";
    }

}

?>