<?php require_once('php/connection.php');
global $title;
$title = 'Franquicia';
//Session started
if(!isset($_SESSION))session_start();

?>

<!--Header call-->
<?php include('php/header.php') ?>
<!--/Header call-->

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
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="que-es.php" title="¿Qué es Justfit?">Qué es Justfit</a>
                    </li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="planes-programas.php" title="Conoce nuestros planes y programas">Planes y programas</a>
                    </li>
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="Se parte de nuestra franquicia">Franquicia</a>
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
    </header>
    
    <!--CONTENT TITLE-->
    <section class="main-int">
        <div class="container-fluid">
            <div class="row col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 text-center">
                <h1 class="main-title">Franquicia</h1>
            </div>
        </div>
    </section>
    
    <!--CONTENT DESTACADO-->
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
    
    <!--CONTENT-2 | APOYO-->
    <section class="content-2">
        <div class="container-fluid">
                <div class="row">
                    <h1 class="content-title text-center">Apoyo al franquiciado</h1>
                </div>
                <div class="row">
                    <div class="iconteractive col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                        <div class="row">
                            <!--apoyo1-->
                            <div class="apoyo qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                    <img src="img/ico-herram.png" alt="Icono herramientas">
                                </figure>
                                <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Búsqueda y equipamiento de estudio.</p>
                            </div>
                            <!--apoyo2-->
                            <div class="apoyo qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                    <img src="img/ico-buscar.png" alt="Icono busqueda">
                                </figure>
                                <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Apoyo en la selección del personal.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--apoyo3-->
                            <div class="apoyo qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                    <img src="img/ico-call.png" alt="Icono capacitación">
                                </figure>
                                <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Capacitación y soporte técnico permanente.</p>
                            </div>
                            <!--apoyo4-->
                            <div class="apoyo qn-icon col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <figure class="col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center">
                                    <img src="img/ico-pizarra.png" alt="Icono soporte">
                                </figure>
                                <p class="par-icon col-lg-8 col-md-8 col-sm-9 col-xs-9">Entrenamiento inicial al Franquiciado y a todo su personal.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <!--CONTENT-3 | TESTIMONIOS-->
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
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center">
                            Mike Wheeler, <span>Demogorgon</span>
                        </p>
                    </div>
                    <!--slider 2-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione laborum aliquam, est soluta natus incidunt officia nulla earum tempore porro accusamus consequuntur vero quibusdam neque esse, totam, labore quaerat optio. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center">
                             Eleven, <span>The Upside Down</span>
                        </p>
                    </div>
                    <!--slider 3-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque beatae esse laboriosam, placeat facilis est non quod accusantium repellat itaque. Ullam beatae consequatur saepe et natus, tenetur, aut aliquam modi. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center">
                            Dustin Henderson, <span>Nice Guy Co.</span>
                        </p>
                    </div>
                    <!--slider 4-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis rem ducimus, sit, doloremque harum quasi voluptates! Nesciunt, ipsam! Odio delectus ipsa maiores officia mollitia quam incidunt voluptas, reprehenderit laborum ratione! <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center">
                            Lucas Sinclair, <span>Bandana</span>
                        </p>
                    </div>
                    <!--slider 5-->
                    <div class="slider">
                        <par class="par-testimonio col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <span class="ico-test fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, repellendus, officia iure quas reprehenderit numquam culpa ea. Odio dignissimos suscipit ducimus nihil beatae aliquid eveniet tempora ab quae. Voluptatem, esse. <span class="ico-test fa fa-quote-right"></span>
                        </par>
                        <p class="par-autor col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center">
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
                    <p class="back-contact col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0" title="Contacto con Franquicias">franquicias@energybody.cl</p>
                </a>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php') ?>
</body>
</html>