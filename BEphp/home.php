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
     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Alza La Voz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Quicksand:wght@300;500;700&family=Righteous&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="icon" href="./img/work.png">
</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span><img src="./img/work.png" alt=""></span> 
                <span>Alza La Voz</span>
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
                    <a href="./php/cerrar-sesion.php">
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
                <input type="search" name="puesto" placeholder="¿A que te dedicas?">
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
            
            <h2 class="dash-title">Éste es el resumen de tu cuenta <?php echo $datosUser['nombres'];  ?></h2>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Vacantes Ofrecidas hoy</h5>
                            <h4>200</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver todas</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Solicitudes pendientes</h5>
                            <h4>💻 5</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver todas</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Recibidas</h5>
                            <h4>💻 4</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver todas</a>
                    </div>
                </div>
            </div>
            
            
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Vacantes publicadas recientemente</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Puesto</th>
                                        <th>Sueldo</th>
                                        <th>Empresa</th>
                                        <th>Ubicación</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        while($mostrar=mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar['puesto'] ?></td>
                                        <td><?php echo $mostrar['sueldo'] ?></td>
                                        <td><?php echo $mostrar['empresa'] ?></td>
                                        <td><?php echo $mostrar['ubicacion'] ?></td>
                                        <td><?php echo $mostrar['status'] ?></td>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>800</h5>
                                    <small>Usuarios Contratados</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>155</h5>
                                    <small>Citas concretadas hoy</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>5</h5>
                                    <small>Empresas que les gusta tu perfil</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img" ></div>
                                <div class="bday-info">
                                    <h5>BIMBO</h5>
                                    <small>Empresa de la semana</small>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button>
                                    <span class="ti-gift"></span>
                                    Enviar Felicitacion
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
    </div>
    
</body>
</html>