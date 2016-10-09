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
    <title>Quiénes somos | Energy Body</title>
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
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="que-es.php">Qué es Justfit</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="planes-programas.php">Planes y programas</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="franquicia.php">Franquicia</a></li>
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="#">Quiénes somos</a></li>
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
                <h1 class="main-title">Quiénes somos</h1>
            </div>
        </div>
    </section>
    
    <section class="content-dest">
        <div class="container-fluid">
            <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                <div class="row">
                    <hr class="divider">
                </div>
                <div class="row">
                    <p class="par-dest-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">Energy Body es la única Franquicia de Electro Estimulación Muscular (EMS) con Sistema Inalámbrico en Chile. Este sistema de entrenamiento inalámbrico permite dar mayor dinámica a los entrenamientos de nuestros usuarios, saliendo de los espacios confinados del EMS tradicional.</p>
                </div>
                <div class="row">
                    <hr class="divider">
                </div>
            </div>
        </div>
    </section>
    
    <section class="content-2">
        <div class="container-fluid">
                <div class="row">
                    <h1 class="content-title text-center">Nuestra Visión</h1>
                </div>
                <div class="row">
                    <p class="mision-vision col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                        Consolidarnos como empresa líder mundial en los mercados del fitness y cuidado de la alimentacion y la salud de las personas, los esfuerzos de la empresa estaran orientados siempre a la vanguardia de la industria del fitness.
                    </p>
                </div>
        </div>
    </section>
    
    <section class="content-3">
        <div class="container-fluid">
            <div class="row">
                <h1 class="content-title text-center">Nuestra Misión</h1>
            </div>
            <div class="row">
                <p class="mision-vision col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                    Entregar a los clientes un servicio de calidad de forma rápida, profesional, entretenida y confiable, con un alto valor para nuestros clientes que buscan satisfacer sus necesidades de salud, belleza y deporte en cada etapa de su vida.
                </p>
            </div>
        </div>
    </section>
    
    <section id="fullback" class="quienessomos-back text-center">
        <div class="container">
            <div class="row">
                <h1 class="back-title col-lg-12 col-md-12 col-sm-12 col-xs-12">Trabaja con nosotros</h1>
            </div>
            <div class="row">
                <a href="contacto.php?asunto=Reclutamiento">
                    <p class="back-contact col-lg-6 col-md-6 col-sm-8 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">reclutamiento@energybody.cl</p>
                </a>
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