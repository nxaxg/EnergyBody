<?php require_once('php/connection.php');

if(!isset($_SESSION))session_start();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Sitio oficial de Energy Body Chile">
    <meta name="keywords" content="energy, ems, justfit, gym">
    <meta name="robots" content="all">
    <!--TITLE-->
    <title>¿Qué es Justfit? | Energy Body</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="css/sss.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--site stylesheet-->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/mobile-stylesheet.css">
    <!--fuentes-->
    <link rel="stylesheet" href="fonts/anton-poppins/stylesheet.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
    <header>
        <div class="container-fluid">
            <!--header-desktop-->
            <div class="header-cont col-lg-12 col-md-12 hidden-sm hidden-xs">
                <div class="row">
                    <!--logo-->
                    <figure class="logo col-lg-4 col-md-4 col-sm-4">
                        <a href="index.php"> <img src="img/energy-logo.png" alt="Logo Energy Body"> </a>
                    </figure>
                    <!--nav-->
                    <nav class="col-lg-8 col-md-8">
                        <ul class="col-lg-2 col-md-3 col-lg-offset-10 col-md-offset-9 list-inline">
                            <li class="col-lg-4 col-md-4 text-center">
                                 <?php if(!$_SESSION[user_id]){?>
                                        <span class="login-btn fa fa-user" title="Login"></span>
                                    <?php }else{?>
                                        <span class="logged-btn fa fa-universal-access" title="Logged"></span>
                                <?php }?>
                            </li>
                            <li class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 text-center"><span class="menu-btn fa fa-navicon" title="Menú"></span></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--header-mobile-->
            <div class="header-cont hidden-lg hidden-md col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-sm-1 col-xs-2 text-center">
                         <?php if(!$_SESSION[user_id]){?>
                                <span class="login-btn fa fa-user" title="Login"></span>
                            <?php }else{?>
                                <span class="logged-btn fa fa-universal-access" title="Logged"></span>
                        <?php }?>
                    </div>
                    <!--logo-->
                    <figure class="logo col-sm-4 col-sm-offset-3 col-xs-8 col-xs-offset-0 text-center">
                        <a href="index.php"> <img src="img/energy-logo.png" class="text-center" alt="Logo Energy Body"> </a>
                    </figure>
                    <!--nav-->
                    <div class="col-sm-1 col-xs-2 col-xs-offset-0 col-sm-offset-3 text-center"><span class="menu-btn fa fa-navicon" title="Menú"></span></div>
                </div>
            </div>
        </div>
        <div class="menu col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="index.php" title="Home">Home</a></li>
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="#">Qué es Justfit</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="planes-programas.php">Planes y programas</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="franquicia.php">Franquicia</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="quienes-somos.php">Quiénes somos</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="contacto.php">Contacto</a></li>
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"> <span class="fa fa-close"></span> </div>
            </div>
        </div>
        <!--login logout-->
        <div class="menu-login col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="login.php">Login</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="registro.php">Registro</a></li>
                    <input type="hidden" class="col-lg-10">
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"> <span class="fa fa-close"></span> </div>
            </div>
        </div>
        <div class="menu-logged col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="perfil.php?id_user=<?php echo $_SESSION[user_id]?>">Mi perfil</a></li>
                    <li class="nav-option col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center"><a href="logout.php">Cerrar sesión</a></li>
                    <input type="hidden" class="col-lg-10">
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"> <span class="fa fa-close"></span> </div>
            </div>
        </div>
        <!--/login logout-->
    </header>
    
    <section class="main-int">
        <div class="container-fluid">
            <div class="row col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 text-center">
                <h1 class="main-title">¿Qué es justfit?</h1>
            </div>
        </div>
    </section>
    
    <section class="content-2">
        <div class="container-fluid">
            <div class="row">
               <h1 class="content-title text-center">Entrenamiento EMS</h1>
            </div>
              <div class="row">
               <div class="slider-group text-center col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                    <!--slider 1-->
                    <div class="slider">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <img src="img/draw-traje.png" alt="Traje Energy Body" class="text-center">
                            <figcaption class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-ofset-0">
                                <h3 class="qn-title">El traje</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Es un traje tecnológico, duradero y transpirable que integra unos electrodos textiles fácilmente intercambiables y lavables. No es sólo una manera flexible de llevar una innovadora tecnología en nuestro cuerpo, es también poderosa.</p>
                        </figure>
                    </div>
                    <!--slider 2-->
                    <div class="slider">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <img src="img/draw-base.png" alt="Traje Energy Body">
                            <figcaption>
                                <h3 class="qn-title">La base</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Una gran pieza de mobiliario de diseño, encargada de crear la red de comunicación del sistema: todo esto está integrado en nuestra base.</p>
                        </figure>
                    </div>
                    <!--slider 3-->
                    <div class="slider">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <img src="img/draw-ipad.png" alt="Traje Energy Body">
                            <figcaption>
                                <h3 class="qn-title">Tablet</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Queremos ser todo lo ágiles que sea posible para proveer a nuestros consumidores de una completa libertad de movimientos, eso es por lo que hemos desarrollado y lanzado nuestra propia aplicación de Android y iOS para tablet desde las cuales funciona todo el sistema online.</p>
                        </figure>
                    </div>
                    <!--slider 4-->
                    <div class="slider">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <img src="img/draw-cerebro.png" alt="Traje Energy Body">
                            <figcaption>
                                <h3 class="qn-title">Cerebro</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Multiplayer es un sistema de entrenamiento donde cinco personas pueden ser entrenadas al mismo tiempo independientemente de sus características tales como edad, fisionomía o forma física. Esto solo es posible con la tecnología Justfit.</p>
                        </figure>
                    </div>
               </div>
            </div>
        </div>
    </section>
    
    <section class="content-3">
        <div class="container-fluid">
            <div class="row">
                <h1 class="content-title text-center">Beneficios de EMS</h1>
            </div>
            <div class="row">
                <div class="iconteractive col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                    <!--benef1-->
                    <div class="benef col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                            <img src="img/ico-reloj.png" alt="Icono reloj">
                        </figure>
                        <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Entrenamiento en tan solo 20 minutos.</p>
                    </div>
                    <!--benef2-->
                    <div class="benef col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                            <img src="img/ico-pesa.png" alt="Icono reloj">
                        </figure>
                        <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Reduce peso y la grasa corporal.</p>
                    </div>
                    <!--benef3-->
                    <div class="benef col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                            <img src="img/ico-peso.png" alt="Icono reloj">
                        </figure>
                        <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Aumenta la resistencia y rendimiento físico.</p>
                    </div>
                    <!--benef4-->
                    <div class="benef col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                            <img src="img/ico-salud.png" alt="Icono reloj">
                        </figure>
                        <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Estimula la circulación, el metabolismo, y ayuda a prevenir enfermedades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>
    
    <!--JQUery-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/sss.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/menu.js"></script>
</body>
</html>