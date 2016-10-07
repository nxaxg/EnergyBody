<?php require_once('php/connection.php');

$new_user = $_GET[reg];

//consulta si sesión ya está iniciada
if(!isset($_SESSION))session_start();

if((isset($_POST[username]) && $_POST[username]<>"") && (isset($_POST[password]) && $_POST[password]<>"")){
    $query="SELECT * FROM usuarios where username='$_POST[username]' AND password='$_POST[password]'";
    $resultado=$connection->query($query);
    
    if($total = $resultado->num_rows){
         $usuario = $resultado->fetch_assoc();
            
         $_SESSION[user_id]=$usuario[id_usuarios];
         $_SESSION[user_name]=$usuario[nombre];
         $_SESSION[user_mail]=$usuario[email];
         $_SESSION[user_edad]=$usuario[edad];
         $_SESSION[user_sexo]=$usuario[sexo];
         $_SESSION[user_username]=$usuario[username];
         $_SESSION[user_password]=$usuario[password];
         $volver=($_SESSION[volver])?$_SESSION[volver]:"perfil.php";
         header("Location: ".$volver."?id_user=".$_SESSION[user_id]);
    }else {
     $error="Usuario/Clave no registrados";
    }
}

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
    <title>Login | Energy Body</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--site stylesheet-->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/mobile-stylesheet.css">
    <!--fuentes-->
    <link rel="stylesheet" href="fonts/anton-poppins/stylesheet.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> </head>

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
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="index.php">Home</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="que-es.php">Qué es Justfit</a></li>
                    <li class="nav-option col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><a href="planes-programas.php">Planes y programas</a></li>
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
                <h1 class="main-title">Login</h1>
            </div>
        </div>
    </section>
    
    
    <section class="content-2 form-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                   <!--formulario-->
                    <form method="post" class="form-login col-lg-4 col-md-6 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username" value="<?php echo $new_user?>">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
                        </div>
                        <div class="form-group btn-box col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="btn btn-default col-lg-8 col-md-10 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" name="ingresar">Ingresar</button>
                        </div>
                    </form>
                    <!--/formulario-->
                </div>
                <?php
                if($error){?>
                <div class="row">
                    <div class="form-mensaje col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 text-center">
                        <?php echo $error ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <section class="content-3 call-register">
        <div class="container-fluid">
            <div class="row">
                <p class="par-dest-1 col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0 text-center">¿No posees una cuenta? <br> ¡No te preocupes!</p>
            </div>
            <div class="row">
                <div class="btn-box btn-call col-lg-4 col-md-6 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
                    <a href="registro.php">
                        <button class="btn btn-default col-lg-8 col-md-10 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">Registrar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php');?>
    
    <!--scripts-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>