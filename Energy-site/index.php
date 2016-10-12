<?php require_once('php/connection.php');

if(!isset($_SESSION))session_start();

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
    <title>Energy Body Chile</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--site stylesheet-->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/mobile-stylesheet.css">
    <!--fuentes-->
    <link rel="stylesheet" href="fonts/anton-poppins/stylesheet.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
    <header>
       <!--Header call-->
       <?php include('php/header.php') ?>
       <!--/Header call-->
       
       <!--menú de navegación-->
        <div class="menu col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="Home">Home</a>
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
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
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
    
    <!--MAIN HEADER-->
    <section id="main">
        <figure class="full-main">
            <div class="wrap"></div>
            <figcaption>
                <div class="row">
                    <h1><span class="main-w">Energy</span> Body Chile</h1>
                </div>
                <div class="row">
                    <p class="main-bajada col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1">Ven y conoce el único estudio de Electro Estimulación Muscular en Chile.</p>
                </div>
                <div class="social col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 hidden-xs">
                    <ul class="list-inline">
                        <li>
                            <a href="http://facebook.com" target="_blank" class="fa fa-facebook" title="Facebook"></a>
                        </li>
                        <li>
                            <a href="http://twitter.com" target="_blank" class="fa fa-twitter" title="Twitter"></a>
                        </li>
                        <li>
                            <a href="http://instagram.com" target="_blank" class="fa fa-instagram" title="Instagram"></a>
                        </li>
                        <li>
                            <a href="http://instagram.com" target="_blank" class="fa fa-youtube-play" title="Youtube"></a>
                        </li>
                    </ul>
                </div>
            </figcaption>
        </figure>
    </section>
    
    <!--CONTENT-1 | QUÉ NECESITAS-->
    <section class="content-1">
        <div class="container-fluid">
            <div class="row">
                <h1 class="content-title col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">Qué necesitas</h1>
            </div>
            <div class="row">
                <div class="qn-icons col-lg-10 col-md-12 col-col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
                    <figure class="qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                        <img src="img/draw-traje.png" alt="Traje Just fit">
                        <figcaption>
                            <h3 class="qn-title">El traje</h3>
                        </figcaption>
                    </figure>
                    <figure class="qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                        <img src="img/draw-base.png" alt="Base para iPad Just fit">
                        <figcaption>
                            <h3 class="qn-title">La base</h3>
                    </figcaption>
                    </figure>
                    <figure class="qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                        <img src="img/draw-ipad.png" alt="Ipad incluido">
                        <figcaption>
                            <h3 class="qn-title">Tablet</h3>
                        </figcaption>
                    </figure>
                    <figure class="qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                        <img src="img/draw-cerebro.png" alt="Cerebro Just fit">
                        <figcaption>
                            <h3 class="qn-title">El cerebro</h3>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    
    <!--CONTENT-2 | VIDEOS-->
    <section class="content-2">
        <div class="container-fluid">
            <div class="row">
                <h1 class="content-title col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">Nuestros videos</h1>
            </div>
            <div class="row">
                <div class="video-grid col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                    
                    <div id="video-container-1" class="col-md-6 col-xs-12">
                    </div>
                    
                    <div id="video-container-2" class="col-md-6 col-xs-12">
                    </div>
                    
                    <script>
                      // Load the IFrame Player API code asynchronously.
                      var tag = document.createElement('script');
                      tag.src = "https://www.youtube.com/player_api";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                      // Replace the 'ytplayer' element with an <iframe> and
                      // YouTube player after the API code downloads.
                      var player1;
                      var player2;
                      function onYouTubePlayerAPIReady() {
                        //video1
                        player1 = new YT.Player('video-container-1', {
                        playerVars: {controls:1, color:'white', showinfo:0},
                        height: '350',
                        videoId: 'jLj7GjDh4Nw'
                        });
                        //video2
                        player2 = new YT.Player('video-container-2', {
                        playerVars: {controls:1, color:'white', showinfo:0},
                        height: '350',
                        videoId: 'RaZ0Y_4GQB0'
                        });
                      }
                    </script>
                </div>
            </div>
        </div>
    </section>
    
    <!--CONTENT-3 | CONNVENIOS-->
    <section class="content-3">
        <div class="container-fluid">
            <div class="row">
                <div class="convenios-grid col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                    <figure class="convenio qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <img src="img/logo-opel.png" alt="Convenio Open">
                    </figure>
                    <figure class="convenio qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <img src="img/logo-chev.png" alt="Convenio Chevrolet">
                    </figure>
                    <figure class="convenio qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <img src="img/logo-colmena.png" alt="Convenio Colmena seguros">
                    </figure>
                    <figure class="convenio qn-icon col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <img src="img/logo-mutual.png" alt="Convenio Mutual de seguridad">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>
    
    <!--JQUery-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>