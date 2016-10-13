<?php require_once('php/connection.php');

if(!isset($_SESSION))session_start();

?>

<!--HEAD CALL-->
<?php include('php/header.php'); ?>
<!--/HEAD CALL-->

<body>
    <header>
        <!--Header call-->
       <?php include('php/nav.php'); ?>
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
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="Quiénes somos">Quiénes somos</a>
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
</body>
</html>