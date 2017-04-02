<div class="container-fluid">
    <!--header-desktop-->
    <div class="header-cont col-lg-12 col-md-12 hidden-sm hidden-xs">
        <div class="row">
            <!--logo-->
            <figure class="logo col-lg-4 col-md-4 col-sm-4">
                <a href="index.php" title="Volver a Home"> <img src="img/energy-logo.png" alt="Logo Energy Body"> </a>
            </figure>
            <!--nav-->
            <nav class="col-lg-8 col-md-8">
                <ul class="col-lg-2 col-md-3 col-lg-offset-10 col-md-offset-9 list-inline">
                    <li class="col-lg-4 col-md-4 text-center">
                        <?php if(!$_SESSION['user_id']){?> <span class="login-btn fa fa-user" title="Inicia sesión"></span>
                            <?php }else{?> <span class="logged-btn fa fa-universal-access" "Sesión iniciada"></span>
                                <?php }?>
                    </li>
                    <li class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 text-center"> <span class="menu-btn fa fa-navicon" title="Menú de navegación"></span> </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--header-mobile-->
    <div class="header-cont hidden-lg hidden-md col-sm-12 col-xs-12">
        <div class="row">
            <!--login/logged-->
            <div class="col-sm-1 col-xs-2 text-left">
                <?php if(!$_SESSION[user_id]){?> <span class="login-btn fa fa-user text-left" title="Inicia sesión"></span>
                    <?php }else{?> <span class="logged-btn fa fa-universal-access text-left" title="Sesión iniciada"></span>
                        <?php }?>
            </div>
            <!--logo-->
            <figure class="logo col-sm-4 col-sm-offset-3 col-xs-8 col-xs-offset-0 text-center">
                <a href="index.php" title="Volver a Home"> <img src="img/energy-logo.png" class="text-center" alt="Logo Energy Body"> </a>
            </figure>
            <!--nav-->
            <div class="col-sm-1 col-xs-2 col-xs-offset-0 col-sm-offset-3 text-right"> <span class="menu-btn fa fa-navicon text-right" title="Menú"></span> </div>
        </div>
    </div>
</div>