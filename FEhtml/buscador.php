<?php
include_once('./php/conexion-db.php');
session_start();
$referencia=$_SESSION['telefono'];

if (($referencia == null || $referencia ='')and($referencia11 == null || $referencia11 ='')){
    echo "Usted no tiene acceso. Inicie sesión para ingresar.";
    die();
}
else{
    $referencia=$_SESSION['telefono'];
    $conectar=conexion();
    $sql="SELECT * FROM vacantes";
    $result=mysqli_query($conectar,$sql);
    $sql2="SELECT * FROM cuentas WHERE telefono = '$referencia'";
    $result2=mysqli_query($conectar,$sql2);
    $datosUser=mysqli_fetch_array($result2);
    $resultado = mysqli_query($conectar,$sql2);
    $fila=mysqli_fetch_array($resultado);
    $ubica=$fila['ubicacion'];
    $buscarpuesto=$_POST['buscarpuesto'];

    $sqlbuscar="SELECT * FROM vacantes where puesto LIKE '%".$buscarpuesto."%' ";
   $busqueda=mysqli_query($conectar,$sqlbuscar);
     
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>El Último Jale</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Quicksand:wght@300;500;700&family=Righteous&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="./img/work.png">
    <link rel="stylesheet" href="./css/buscador.css"/>
</head>
<body>
    
<input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span><img src="./img/work.png" alt=""></span> 
                <span>El Último Jale</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="./home.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="./perfil.php">
                        <span class="ti-face-smile"></span>
                        <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="./empresas.html">
                        <span class="ti-agenda"></span>
                        <span>Empresas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-clipboard"></span>
                        <span>Curriculum</span>
                    </a>
                </li>
                <li>
                    <a href="./buscador.php">
                        <span class="ti-search"></span>
                        <span>Buscar</span>
                    </a>
                </li>
                
                <li>
                    <a href="./php/cerrrar-sesion.php">
                        <span class="ti-settings"></span>
                        <span>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <form action="./buscador.php" method="POST">
                <span class="ti-search"></span>
                <input type="search" name="buscarpuesto" placeholder="¿A que te dedicas?">
                <input type="submit" value="Buscar">
                </form>
                
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>
    <main>
    <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
    <h3>Vacantes que tenemos para ti:</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Puesto</th>
                                        <th>Sueldo</th>
                                        <th>Empresa</th>
                                        <th>Ubicación</th>
                                        <th>Status</th>
                                        <th>Mas detalles</th>
                                        <th>Postúlate</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        while($resbusq=mysqli_fetch_array($busqueda)){
                                    ?>
                                    <tr>
                                        <td><?php echo $resbusq['puesto'] ?></td>
                                        <td><?php echo $resbusq['sueldo'] ?></td>
                                        <td><?php echo $resbusq['empresa'] ?></td>
                                        <td><?php echo $resbusq['ubicacion'] ?></td>
                                        <td><?php echo $resbusq['status'] ?></td>
                                        <td>
                                        <div id="ventanaa" class="vent-detalles" >
                                        <div id="cerrarr"><a href="javascript:cerrar()"><img src="./img/cross.png" alt=""></a></div>    
                                        <h2><?php echo $resbusq['detalles'] ?></h2></div>     
                                        <a href="javascript:abrir()">Ver detalles</a></td>
                                        <td>
                                        <div id="ventanaa2" class="vent-detalles" >
                                        <div id="cerrarr2"><a href="javascript:cerrar2()"><img src="./img/cross.png" alt=""></a></div>    
                                        <form action="./php/postular.php" method="POST" enctype="multipart/form-data">
                                            <h2>Sube tu cv o selecciona el que te ofrecemos Y Envialo</h2>
                                            <input type="file" name="curriculum">
                                            <input type="submit" value="Enviar CV">
                                        </form>
                                    </div>
                                        <a href="javascript:abrir2()">Postularme</a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>
    </main>
    </div>
    <script>
        function abrir(){
            document.getElementById("ventanaa").style.display="block";
        }
        function cerrar(){
            document.getElementById("ventanaa").style.display="none";
        }
        function abrir2(){
            document.getElementById("ventanaa2").style.display="block";
        }
        function cerrar2(){
            document.getElementById("ventanaa2").style.display="none";
        }
    </script>
</body>
</html>