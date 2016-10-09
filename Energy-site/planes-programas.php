<?php require_once('php/connection.php');

//Session started
if(!isset($_SESSION))session_start();

//select planes
$query = "select * from `planes` order by `id_planes` asc";
$resultado = $connection->query($query);

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
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/sss.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
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
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="#">Planes y programas</a></li>
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
                  <?php   
                    $queryexist = "select * from `relacion` where `relacion`.`usuario_id`='$_SESSION[user_id]'";
                    $resulexist = $connection->query($queryexist);
                    $exist = $resulexist->fetch_assoc();
                    ?>
                   <!--php callback-->
                   <?php while($plan = $resultado->fetch_assoc()){?>
                   
                    <!--plan1-->
                    <div class="plan col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" data-id="<?php echo $plan[id_planes]?>">
                        <div class="row plan-content">
                            <div class="row">
                                <p class="plan-title"><?php echo $plan[nombre];?></p>
                            </div>
                            <div class="row">
                                <ul class="plan-desc list-inline">
                                    <div class="row">
                                        <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: <?php echo $plan[sesiones_sem];?> sesión</li>
                                    </div>
                                    <div class="row">
                                        <li class="sesion-tot"><span class="fa fa-check-circle"></span> Total de Sesiones: <?php echo $plan[sesiones_tot];?> sesiones</li>
                                    </div>
                                </ul>
                            </div>
                            <div class="row">
                                <p class="plan-valor">Valor: $<?php echo number_format($plan[valor], 0, ",", ".");?></p>
                            </div>
                        </div>
                        <!--overlay-->
                        <?php if($exist){ ?>
                            <div class="plan-overlay col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" data-toggle="modal" data-target="#modal-alert">
                                <div class="row">
                                    <span class="fa fa-thumbs-o-up"></span>
                                </div>
                                <div class="row">
                                    <p>Reservar plan</p>
                                </div>
                            </div>
                        <?php }else if(!$_SESSION[user_id]){ ?>
                            <div class="plan-overlay col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" data-toggle="modal" data-target="#modal-login">
                                <div class="row">
                                    <span class="fa fa-thumbs-o-up"></span>
                                </div>
                                <div class="row">
                                    <p>Reservar plan</p>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <div class="plan-overlay col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" data-toggle="modal" data-target="#planmodal<?php echo $plan[id_planes];?>">
                                <div class="row">
                                    <span class="fa fa-thumbs-o-up"></span>
                                </div>
                                <div class="row">
                                    <p>Reservar plan</p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <!--modal alert-->
                    <!-- Modal -->
                    <div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="btn-planmodal">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center" id="myModalLabel">Alerta</h4>
                          </div>
                          <div class="modal-body">
                            <p class="par-icon">Sólo puedes realizar una compra de plan por usuario <span class="fa fa-thumbs-o-down"></span></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
                              <a href="perfil.php?id_user=<?php echo $_SESSION[user_id]?>">
                                  <button class="btn btn-primary btn-comprar-modal">Ir a perfil</button>
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!--modal login-->
                    <!-- Modal -->
                    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="btn-planmodal">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center" id="myModalLabel">Alerta</h4>
                          </div>
                          <div class="modal-body">
                            <p class="par-icon">Necesitas estar registrado para poder realizar una compra. <span class="fa fa-smile-o"></span></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
                              <a href="login.php">
                                  <button class="btn btn-primary btn-comprar-modal">Iniciar sesión</button>
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                <!--modal-->
                <div class="modal fade" id="planmodal<?php echo $plan[id_planes];?>" tabindex="-1" role="dialog" aria-labelledby="btn-planmodal">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close close-modal-icon" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="planmodal-title">Confirmar Compra</h4>
                      </div>
                    <form method="post">
                      <div class="modal-body form-login">
                              <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="username">Nombre de usuario</label>                                        
                                        <input type="text" class="form-control" name="username" disabled value="<?php echo $_SESSION[user_username];?>">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="email">E-Mail de usuario:</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $_SESSION[user_mail];?>" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="divider divider-2" role="separator">
                                </div>
                                <div class="row">                            
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="plan">Nombre de plan:</label>
                                        <input type="text" class="form-control" name="plan" disabled value="<?php echo $plan[nombre];?>">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="valor">Valor de plan:</label>
                                        <input type="text" class="form-control" name="valor" disabled value="$<?php echo number_format($plan[valor], 0, ",", ".");?>">
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
                                            <option value="Paypal">Paypal</option>
                                            <option value="Webpay">Webpay</option>
                                            <option value="Redcompra">Red Compra</option>
                                        </select>
                                        <input type="text" name="idplan" value="<?php echo $plan[id_planes];?>">
                                    </div>
                                </div>
                      </div>
                      <div class="modal-footer text-center">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
                            <input type="submit" name="comprar" class="btn btn-primary btn-comprar-modal" value="comprar">
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                    
<?php 
}
//agregar compra
if(isset($_POST[comprar]) && $_POST[comprar]=="comprar"){
    $y = $y + 1;
    $queryinsert.$y = "INSERT INTO `relacion` (`usuario_id`, `planes_id`) VALUES ('$_SESSION[user_id]', '$_POST[idplan]')";
    $connection->query($queryinsert.$y);
    $ID = $connection->insert_id;
    if($ID)header("Location: perfil.php?id_user=".$_SESSION[user_id]);
                                                                  
}
 ?><!--php end-->
                    
                </div>
                <!--detalles-->
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
</body>
</html>