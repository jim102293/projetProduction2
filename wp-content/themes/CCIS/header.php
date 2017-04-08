<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CCIS</title>

        <!-- style -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
        <!-- CDN Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        <!-- CDN font awesome-->
        <script src="https://use.fontawesome.com/07c6e0fc40.js"></script>

        <?php wp_head(); ?>
    </head>


    <body>
        <header>
            <!--LOGO-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="logo">
                            <a href=""><img id="img-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" height="150" width="150"></a>
                        </div> <!--fermeture du logo-->
                    </div><!--fermture de la colonne-->
                    
                <!--MENU SECONDAIRE-->
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <nav class="menusecondaire">
                            <ul class="nav nav-pills pull-right">
                                <form id="search-form" action="" method="get" >
                                     <input class="recherche" type="text" name="search" placeholder="Recherche..">
                                </form>
                                <li role="presentation"><a href="#">Connexion</a></li>
                                <li role="presentation"><a href="#"><img id="ico-panier" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico_panier.png" alt="" height="15" width="15">Panier</a></li>
                                <li role="presentation"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div> <!-- fin col 9 -->
                
                </div><!--fermture du ROW-->
            </div><!--fermeture du container -->



            <!-- MENU PRINCIPALE -->
    <nav class="navbar navbar-default">

          <!-- menu hanburger quand responsive-->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- accueil-->
            <li class="active"><a href="index.php">Accueil</a></li>
            <!-- dropdown La chambre-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La chambre <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">blabla</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <!-- dropdown services-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <!-- dropdown evenement et formation-->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evenements & Formation <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <!-- blogue et publications-->
            <li><a href="#chambre">Blogue</a></li>
            <li><a href="#contact">Publications</a></li>
           <!-- dropdown zone membre-->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zone membre <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
            
</header>
