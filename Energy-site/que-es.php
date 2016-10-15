<?php require_once('php/connection.php');

if(!isset($_SESSION))session_start();

?>


<!--Head call-->
<?php include('php/header.php') ?>
<!--/Head call-->

<body>
    <header>
        <!--Nav call-->
       <?php include('php/nav.php') ?>
       <!--/Nav call-->
        
       <!--menú de navegación-->
        <div class="menu col-lg-12">
            <div class="container-fluid">
                <ul class="list-inline col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="index.php" title="Home">Home</a>
                    </li>
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="¿Qué es Justfit?">Qué es Justfit</a>
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
                            <p class="par-icon col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">Es un traje tecnológico, duradero y transpirable que integra unos electrodos textiles fácilmente intercambiables y lavables. No es sólo una manera flexible de llevar una innovadora tecnología en nuestro cuerpo, es también poderosa.</p>
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
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Queremos ser todo lo ágiles que sea posible para proveer a nuestros consumidores de una completa libertad de movimientos, es por eso que hemos desarrollado y lanzado nuestra propia aplicación de Android y iOS para tablet desde las cuales funciona todo el sistema online.</p>
                        </figure>
                    </div>
                    <!--slider 4-->
                    <div class="slider">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <img src="img/draw-cerebro.png" alt="Traje Energy Body">
                            <figcaption>
                                <h3 class="qn-title">Cerebro</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Multiplayer es un sistema de entrenamiento donde cinco personas pueden ser entrenadas al mismo tiempo, independientemente de sus características tales como edad, fisionomía o forma física. Esto solo es posible con la tecnología Justfit.</p>
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
                    <div class="row">
                        <!--benef1-->
                        <div class="benef qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-reloj.png" alt="Icono reloj">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Entrenamiento en tan solo 20 minutos.</p>
                        </div>
                        <!--benef2-->
                        <div class="benef qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-pesa.png" alt="Icono peso">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Reduce peso y la grasa corporal.</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--benef3-->
                        <div class="benef qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-peso.png" alt="Icono pesa">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Aumenta la resistencia y rendimiento físico.</p>
                        </div>
                        <!--benef4-->
                        <div class="benef qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                <img src="img/ico-salud.png" alt="Icono salud">
                            </figure>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Estimula la circulación, el metabolismo, y ayuda a prevenir enfermedades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>
</body>
</html>