<?php require_once('php/connection.php');


//consulta si sesión ya está iniciada
if(!isset($_SESSION))session_start();
    
$querysel = "select * from `usuarios` where `id_usuarios`='$_GET[id_user]'";
$resultadosel = $connection->query($querysel);
$user = $resultadosel->fetch_assoc();

$selectrel = "select * from `relacion` where `usuario_id`='$_GET[id_user]'";
$resrel = $connection->query($selectrel);
$rel = $resrel->fetch_assoc();

$selecplan = "select * from `planes` where `id_planes`='$rel[planes_id]'";
$relplan = $connection->query($selecplan);
$plan = $relplan->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Sitio oficial de Energy Body Chile">
    <meta name="keywords" content="energy, ems, justfit, gym, vida sana, wellness, salud, energía">
    <meta name="robots" content="all">
    <!--TITLE-->
    <title>Mi perfil | Energy Body</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--site stylesheet-->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/mobile-stylesheet.css">
    <!--fuentes-->
    <link rel="stylesheet" href="fonts/anton-poppins/stylesheet.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> </head>

<body>
    <header>
        <!--Header call-->
       <?php include('php/header.php') ?>
       <!--/Header call-->
        
        <!--menú de navegación-->
        <div class="menu col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="index.php" title="Home">Home</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="que-es.php" title="¿Qué es Justfit?">Qué es Justfit</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="planes-programas.php" title="Conoce nuestros planes y programas">Planes y programas</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="franquicia.php" title="Se parte de nuestra franquicia">Franquicia</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="quienes-somos.php" title="Quiénes somos">Quiénes somos</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="contacto.php" title="Contacto">Contacto</a>
                    </li>
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"> <span class="fa fa-close" title="Cerrar"></span> </div>
            </div>
        </div>
        <!--login logout menú-->
        <div class="menu-login col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="login.php" title="Inicia sesión">Iniciar sesión</a>
                    </li>
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="registro.php" title="Registro de usuario">Registro</a>
                    </li>
                    <input type="hidden" class="col-lg-10">
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">
                    <span class="fa fa-close" title="Cerrar"></span>
                </div>
            </div>
        </div>
        <!--logged menú-->
        <div class="menu-logged col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="perfil.php?id_user=<?php echo $_SESSION[user_id]?>" title="Visita tu perfil">Mi perfil</a>
                    </li>
                    <li class="nav-option col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <a href="logout.php" title="Cerrar sesión">Cerrar sesión</a>
                    </li>
                    <input type="hidden" class="col-lg-10">
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center">
                    <span class="fa fa-close" title="Cerrar"></span>
                </div>
            </div>
        </div>
        <!--/login logout-->
        <!--/menu de navegación-->
    </header>
    
    <!--CONTENT-TITLE-->
    <section class="main-int">
        <div class="container-fluid">
            <div class="row col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 text-center">
                <h1 class="main-title">Mi perfil</h1>
            </div>
        </div>
    </section>
    
    <!--CONTENT-2 | DATOS DE PERFIL-->
    <section class="content-2 form-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <form action="#" class="form-login col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" disabled id="nombre" value="<?php echo $user[nombre]; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="username">Nombre de usuario:</label>
                                <input type="text" class="form-control" name="username" disabled id="username" value="<?php echo $user[username]; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="rut">RUT:</label>
                                <input type="text" class="form-control" name="rut" disabled oninput="checkRut(this)" id="rut" value="<?php echo $user[rut]; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email">E-Mail:</label>
                                <input type="email" class="form-control" name="email" disabled id="email" value="<?php echo $user[email]; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="edad">Edad:</label>
                                <input type="text" class="form-control" name="edad" disabled id="edad" value="<?php echo $user[edad]; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="sexo">Sexo:</label>
                                <input type="text" class="form-control" name="sexo" disabled id="sexo" value="<?php echo $user[sexo]; ?>">
                            </div>
                        </div>
                        <div class="dato-plan col-lg-12">                            
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="plan">Plan inscrito:</label>
                                    <input type="text" class="form-control" name="plan" id="nombreplan" disabled value="<?php echo $plan[nombre]; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="valor">Valor plan:</label>
                                    <input type="text" class="form-control" name="valor" disabled id="valorplan" value="$<?php echo number_format($plan[valor], 0, ",", ".");?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="plan">Medio de pago:</label>
                                    <input type="text" class="form-control" name="mediopago" id="mediopago" disabled value="<?php echo $rel[medio_pago]; ?>">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                            <div class="form-group btn-box col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <a href="logout.php">
                                    <button class="btn btn-default col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1" name="ingresar" title="Cerrar sesión">Cerrar sesión</button>
                                </a>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <!--<div class="form-mensaje col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 text-center"> Mensaje </div>-->
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>
    
    <!--scripts-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/rutValidator.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>