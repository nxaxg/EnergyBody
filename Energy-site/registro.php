<?php require_once('php/connection.php');

if(!isset($_SESSION))session_start();

if(isset($_POST[registrar]) && $_POST[registrar]=="registrar"){
    $queryask = "select `rut`,`email`,`username` from `usuarios` where `rut`='$_POST[rut]' or `email`='$_POST[email]' or `username`='$_POST[username]'";
    $relask = $connection->query($queryask);
    $usexist = $relask->fetch_assoc();
    if($usexist){
        $error = true;
    }else{
        $queryinsert = "INSERT INTO `usuarios` (`nombre`, `rut`, `email`, `edad`, `sexo`, `username`, `password`) VALUES ('$_POST[nombre]', '$_POST[rut]', '$_POST[email]', '$_POST[edad]', '$_POST[sexo]', '$_POST[username]', '$_POST[password]')";
        $connection->query($queryinsert);
         $ID = $connection->insert_id;
        if($ID)header("Location: login.php?reg=".$_POST[username]);
    }
}
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
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
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
                <h1 class="main-title">Registro</h1> </div>
        </div>
    </section>
    
    
    <section class="content-2 form-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <form method="post" class="form-login col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" id="rut" placeholder="RUT" name="rut" oninput="checkRut(this)" maxlength="10" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="18" max="99" class="form-control" placeholder="Edad" name="edad" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select name="sexo" class="form-control" required>
                                    <option value="null" disabled selected>Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group btn-box col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <input type="submit" class="btn btn-default col-lg-6 col-md-8 col-sm-8 col-xs-10 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 col-xs-offset-1" name="registrar" value="registrar">
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    if($error==true){?>
                        <div class="row">
                    <div class="form-mensaje col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 text-center"> Este usuario ya existe <span class="fa fa-thumbs-o-down"></span></div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php')?>
</body>

</html>