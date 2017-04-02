<?php require_once('php/connection.php');
global $title;
$title = 'Planes y programas';
//Session started
if(!isset($_SESSION))session_start();

//select planes
$query = "select * from `energydb_planes` order by `id_planes` asc";
$resultado = $connection->query($query);

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
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="que-es.php" title="¿Qué es Justfit?">Qué es Justfit</a>
                    </li>
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="Conoce nuestros planes y programas">Planes y programas</a>
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
                    $queryexist = "select * from `energydb_relacion` where `energydb_relacion`.`usuario_id`='$_SESSION[user_id]'";
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
                                        <?php if($plan[sesiones_sem]>1){?>
                                            <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: <?php echo $plan[sesiones_sem];?> sesiones</li>
                                        <?}else{?>
                                            <li class="sesion-sem"><span class="fa fa-check-circle"></span> Sesiones semanales: <?php echo $plan[sesiones_sem];?> sesión</li>
                                        <?}?>
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
                            <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
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
                            <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
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
                                        <label for="nombre">Nombre:</label>                                        
                                        <input type="text" class="form-control" name="nombre" disabled value="<?php echo $_SESSION[user_name];?>">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="email">E-Mail:</label>
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
                                        <label for="mediopago">Seleccione medio de pago:</label>
                                        <select name="mediopago" class="form-control" required>
                                            <option value="null" disabled selected>Medio de pago</option>
                                            <option value="Paypal">Paypal</option>
                                            <option value="WebPay">WebPay</option>
                                            <option value="Red Compra">Red Compra</option>
                                        </select>
                                        <input type="hidden" name="idplan" value="<?php echo $plan[id_planes];?>">
                                    </div>
                                </div>
                      </div>
                      <div class="modal-footer text-center">
                            <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar ventana</button>
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
    $queryinsert.$y = "INSERT INTO `energydb_relacion` (`usuario_id`, `planes_id`, `medio_pago`) VALUES ('$_SESSION[user_id]', '$_POST[idplan]', '$_POST[mediopago]')";
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
    
    <?php include('php/sucurslider.php');?>

    <?php include('php/footer.php');?>

<!--JQUery-->
</body>
</html>