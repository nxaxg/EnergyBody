<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Sitio oficial de Energy Body Chile">
    <meta name="keywords" content="energy, ems, justfit, gym">
    <meta name="robots" content="all">
    <!--TITLE-->
    <title>Planes y programas | Energy Body</title>
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
                                <a href="login.php"><span class="login-btn fa fa-user" title="Login"></span></a>
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
                        <a href="login.php"><span class="login-btn fa fa-user" title="Login"></span></a>
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
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="#">Planes y programas</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="franquicia.php">Franquicia</a></li>
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
                <h1 class="main-title">Planes y Programas</h1>
            </div>
        </div>
    </section>
    
    <section class="content-2">
        <div class="container-fluid">
            <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                <div class="row">
                    <h1 class="content-title text-center">Planes de entrenamiento</h1>
                </div>
                <div class="planes-cont">
                    <!--plan1-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                    <!--plan2-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                    <!--plan3-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                    <!--plan4-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                    <!--plan5-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                    <!--plan6-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="row">
                            <p class="plan-title">Plan mensual I</p>
                        </div>
                        <div class="row">
                            <ul class="plan-desc list-inline">
                                <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: 1 sesión</li>
                                <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: 4 sesiones</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="plan-valor">Valor: $99.000</p>
                        </div>
                        <!--overlay-->
                        <div class="row">
                            <div class="plan-overlay" data-toggle="modal" data-target="#planmodal">
                                <span class="fa fa-thumbs-o-up"></span>
                                <p>Reservar plan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="plan-detalles">
                        <ul class="list-styled col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <li>1 Sesión $30.000.</li>
                            <li>Primera capa: $28.000</li>
                            <li>Arriendo primera capa: $2.500 (por sesión)</li>
                        </ul>
                        <ul class="list-styled col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <li>Toalla de baño desechable $2.000</li>
                            <li>Sesión de evaluacion gratis.*</li>
                            <li>Contratando plan trimestral y semestral gratis primera capa.*</li>
                        </ul>
                    </div>
                </div>
                
                <!--modal-->
                <div class="modal fade" id="planmodal" tabindex="-1" role="dialog" aria-labelledby="btn-planmodal">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close close-modal-icon" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="planmodal-title">Confirmar Compra</h4>
                      </div>
                      <div class="modal-body form-login">
                          <form action="">
                              <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="username">Nombre de usuario:</label>
                                        <input type="text" class="form-control" name="username" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="email">E-Mail de usuario:</label>
                                        <input type="text" class="form-control" name="email" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="divider divider-2" role="separator">
                                </div>
                                <div class="row">                            
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="plan">Nombre de plan:</label>
                                        <input type="text" class="form-control" name="plan" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="valor">Valor de plan:</label>
                                        <input type="text" class="form-control" name="valor" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="divider divider-2" role="separator">
                                </div>
                                <div class="row">                            
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="plan">Seleccione medio de pago:</label>
                                        <select name="medio-pago" class="form-control" required>
                                            <option value="null" disabled selected>Medio de pago</option>
                                            <option value="Masculino">Paypal</option>
                                            <option value="Feminino">Webpay</option>
                                            <option value="Feminino">Redcompra</option>
                                        </select>
                                    </div>
                                </div>
                          </form>
                      </div>
                      <div class="modal-footer text-center">
                        <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close</button>
                        <a href="perfil.php">
                            <button type="button" class="btn btn-primary btn-comprar-modal">Save changes</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content-3">
        <div class="container-fluid">
            <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                <div class="row">
                    <h1 class="content-title text-center">Nuestras sucursales</h1>
                </div>
                <div class="slider-group-sucursal text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--slider 1-->
                    <div class="slider sucursal">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <figcaption class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-ofset-0">
                                <h3 class="qn-title">Estudio Central</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Embajador Doussinague #1828. <br>Vitacura, Santiago.</p>
                        </figure>
                    </div>
                    <!--slider 2-->
                    <div class="slider sucursal">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <figcaption class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-ofset-0">
                                <h3 class="qn-title">Estudio Las Condes</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Benjamin #2963. <br>Las Condes, Santiago.</p>
                        </figure>
                    </div>
                    <!--slider 3-->
                    <div class="slider sucursal">
                        <figure class="slider-ico col-xs-10 col-xs-offset-1">
                            <figcaption class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-ofset-0">
                                <h3 class="qn-title">Estudio Costanera</h3>
                            </figcaption>
                            <p class="par-icon col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">Avenida Nueva Costanera #4177 local 9. <br> Vitacura, Santiago.</p>
                        </figure>
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