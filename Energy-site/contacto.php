<?php require('php/connection.php');

//Session started
if(!isset($_SESSION))session_start();

$asunto = $_GET[asunto];
$error = false;

if(isset($_POST[enviar]) && $_POST[enviar]="enviar"){
    $user_contact = "nxayancanxg@gmail.com";
    $asunto_contact = "Contacto desde Energy Body";
    $mensaje_contact = "El usuario ". $_POST['nombre'] . " (" .$_POST['mail'] . ") desea contactarse:
    Asunto: " . $_POST['asunto']."
    Mensaje: " . $_POST['mensaje']."
    
    --Fin del mensaje-- ";
    $cabecera_contact = "From: <contacto@energybody.cl>\n\r";

    if(mail($user_contact, $asunto_contact, $mensaje_contact, $cabecera_contact)){
        $msj = "Mensaje enviado con éxito <span class='fa fa-thumbs-o-up'><span/>";
        $error = true;
    }else{
        $msj = "Error al intentar enviar mensaje <span class='fa fa-thumbs-o-down'><span/>";
        $error = true;
    }
}
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
    <title>Contacto | Energy Body Chile</title>
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
                    <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
                        <a href="#" title="Contacto">Contacto</a>
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
                <h1 class="main-title">Contacto</h1>
            </div>
        </div>
    </section>
    
    <section class="content-2">
        <div class="container-fluid">
                <div class="row">
                    <p class="par-icon-cont col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 text-center">¿Tienes alguna pegunta? <br> ¡No dudes en contactarte con nosotros!</p>
                </div>
                <div class="row">
                    <form method="post" class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                        <?php if(!$_SESSION[user_id]){?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="form-control" placeholder="E-Mail" name="mail" id="mail" required>
                            </div>
                        <?php }else{?>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre"  value="<?php echo $_SESSION[user_name]; ?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="form-control" placeholder="E-Mail" name="mail" id="mail" value="<?php echo $_SESSION[user_mail]; ?>" required>
                            </div>
                        <?php }?>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Asunto" name="asunto" id="asunto" value="<?php echo $asunto;?>">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea placeholder="Mensaje" class="form-control" rows="3" name="mensaje" id="mensaje" required></textarea>
                        </div>
                        <div class="form-group btn-box col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input type="submit" class="btn btn-default col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-12" title="Enviar formulario" name="enviar" value="enviar">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <?php if($error){?>
                            <div class="form-mensaje col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 text-center">
                             <?php echo $msj; ?>
                            </div>
                        <?php } ?>
                </div>
        </div>
    </section>
    
    <?php include('php/sucurslider.php'); ?>
    
    <?php include('php/footer.php')?>
    
<!--JQUery-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sss.min.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>