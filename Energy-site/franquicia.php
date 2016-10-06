<?php require_once('php/connection.php');

//Session started
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
    <title>Franquicia | Energy Body</title>
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
                                <?php
                                    if(!$_SESSION[user_id]){?>
                                        <a href="login.php"><span class="login-btn fa fa-user" title="Login"></span></a>
                                    <?php }else{?>
                                        <a href="perfil.php?id_user=<?php echo $_SESSION[user_id]?>"><span class="login-btn fa fa-universal-access" title="Mi perfil"></span></a>
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
                        <?php
                         if(!$_SESSION[user_id]){?>
                                <a href="login.php"><span class="login-btn fa fa-user" title="Login"></span></a>
                            <?php }else{?>
                                <a href="perfil.php?id_user=<?php echo $_SESSION[user_id]?>"><span class="login-btn fa fa-universal-access" title="Mi perfil"></span></a>
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
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="#">Franquicia</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="quienes-somos.php">Quiénes somos</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="contacto.php">Contacto</a></li>
                </ul>
                <div class="close-btn col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"> <span class="fa fa-close"></span> </div>
            </div>
        </div>
    </header>
    
    <section class="main-int">
        <div class="container-fluid">
            <div class="row col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 text-center">
                <h1 class="main-title">Franquicia</h1>
            </div>
        </div>
    </section>
    
    <section class="content-dest">
        <div class="container-fluid">
            <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                <div class="row">
                    <p class="par-dest-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">La empresa entrega al Franquiciado, el mejor EMS del mercado, apoyado con equipamiento y un personal certificado para la correcta operación del Estudio.</p>
                </div>
                <div class="row">
                    <hr class="divider col-lg-10 col-md-10 col-sm-10 col-xs-10"></hr>
                </div>
                <div class="row">
                    <p class="par-dest-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">El negocio consiste en instalar un Estudio de Electro Estimulación Muscular (EMS) apoyando al franquiciado de manera integral en los parámetros y operación establecidos por la marca.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content-2">
        <div class="container-fluid">
                <div class="row">
                    <h1 class="content-title text-center">Apoyo al franquiciado</h1>
                </div>
                <div class="row">
                    <div class="iconteractive col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                        <!--apoyo1-->
                        <div class="apoyo col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-herram.png" alt="Icono herramientas">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Búsqueda y equipamiento de estudio.</p>
                        </div>
                        <!--apoyo2-->
                        <div class="apoyo col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-buscar.png" alt="Icono buscar">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Apoyo en la selección del personal.</p>
                        </div>
                        <!--apoyo3-->
                        <div class="apoyo col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-call.png" alt="Icono pizarra">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Capacitación y soporte técnico permanente.</p>
                        </div>
                        <!--apoyo4-->
                        <div class="apoyo col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-pizarra.png" alt="Icono call center">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Entrenamiento inicial al Franquiciado y a todo su personal.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <section class="content-3">
        <div class="container-fluid">
            <div class="row">
                <h1 class="content-title text-center">Testimonios</h1>
            </div>
            <div class="row">
                <div class="slider-testimonial slider-testimonio text-center col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                    <!--slider 1-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores odio consequuntur, provident ex qui totam deserunt voluptatem sapiente perspiciatis alias culpa minus, assumenda soluta minima, voluptatum optio esse. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-right">
                            Mike Wheeler, <span>Demogorgon</span>
                        </p>
                    </div>
                    <!--slider 2-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione laborum aliquam, est soluta natus incidunt officia nulla earum tempore porro accusamus consequuntur vero quibusdam neque esse, totam, labore quaerat optio. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-right">
                             Eleven, <span>The Upside Down</span>
                        </p>
                    </div>
                    <!--slider 3-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque beatae esse laboriosam, placeat facilis est non quod accusantium repellat itaque. Ullam beatae consequatur saepe et natus, tenetur, aut aliquam modi. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-right">
                            Dustin Henderson, <span>Nice Guy Co.</span>
                        </p>
                    </div>
                    <!--slider 4-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis rem ducimus, sit, doloremque harum quasi voluptates! Nesciunt, ipsam! Odio delectus ipsa maiores officia mollitia quam incidunt voluptas, reprehenderit laborum ratione! <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-right">
                            Lucas Sinclair, <span>Bandana</span>
                        </p>
                    </div>
                    <!--slider 5-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, repellendus, officia iure quas reprehenderit numquam culpa ea. Odio dignissimos suscipit ducimus nihil beatae aliquid eveniet tempora ab quae. Voluptatem, esse. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-right">
                            Will Byers, <span>Stranger Things</span>
                        </p>
                    </div>
               </div>
            </div>
        </div>
    </section>
    
    <section id="fullback" class="franquicia-back text-center">
        <div class="container">
            <div class="row">
                <h1 class="back-title col-lg-12 col-md-12 col-sm-12 col-xs-12">Te ayudamos a alcanzar las metas que te propongas</h1>
            </div>
            <div class="row">
                <a href="contacto.php?asunto=Franquicia">
                    <p class="back-contact col-lg-6 col-md-6 col-sm-8 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">franquicias@energybody.cl</p>
                </a>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php') ?>
<!--JQUery-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/sss.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>