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
                   <!--nav selected-->
                    <li class="nav-selected col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center">
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
    
    <!--CONTENT-TITLE-->
    <section class="main-int">
        <div class="container-fluid">
            <div class="row col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 text-center">
                <h1 class="main-title">Login</h1>
            </div>
        </div>
    </section>
    
    <!--CONTENT-2 | FORMULARIO DE LOGIN-->
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
                            <button type="submit" class="btn btn-default col-lg-8 col-md-10 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" name="ingresar" title="Inicio sesión">Iniciar sesión</button>
                        </div>
                    </form>
                    <!--/formulario-->
                </div>
                <?php if($error){?>
                    <div class="row">
                        <div class="form-mensaje col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 text-center">
                            <?php echo $error ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <!--CONTENT-3 | REGISTRO-->
    <section class="content-3 call-register">
        <div class="container-fluid">
            <div class="row">
                <p class="par-dest-1 col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0 text-center">¿No posees una cuenta? <br> ¡No te preocupes!</p>
            </div>
            <div class="row">
                <div class="btn-box btn-call col-lg-4 col-md-6 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
                    <a href="registro.php">
                        <button class="btn btn-default col-lg-8 col-md-10 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" title="Ir a formulario de registro">Registrar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('php/footer.php');?>
</body>

</html>