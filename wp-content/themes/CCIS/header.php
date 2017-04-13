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
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="logo">
                            <a href="<?php bloginfo('url')?>"><img id="img-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" height="150" width="150"></a>
                        </div> <!--fermeture du logo-->
                    </div><!--fermture de la colonne-->
      
                <!--MENU SECONDAIRE-->
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                       <?php
          wp_nav_menu(array(
					'theme_location' => 'toptop',
					//'menu_id 	'    =>  'menu',
					 'container'     =>  '',
					 'items_wrap'    =>    '<ul class="nav nav-pills pull-right">%3$s</ul>',
					 ) );
           ?>
                            <ul class="nav nav-pills pull-right">
                                <form id="search-form" action="" method="get" >
                                     <input class="recherche" type="text" name="search" placeholder="Recherche..">
                                </form>
                                <li role="presentation"><a href="#"><img id="ico-panier" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico_panier.png" alt="" height="15" width="15">Panier</a></li>
                            </ul>
                        </nav>
                    </div> <!-- fin col 9 -->
                
                </div><!--fermture du ROW-->
            </div><!--fermeture du container -->



            <!-- MENU PRINCIPALE -->
    <div class="container-fluid">
        
    <nav class="navbar navbar-default">

          <!-- menu hanburger quand responsive-->
          <?php 
				wp_nav_menu(array(
					'theme_location' => 'top',
					//'menu_id 	'    =>  'menu',
					 'container'     =>  '',
					 'items_wrap'    =>    '<ul class="nav navbar-nav">%3$s</ul>',
					 ) );
           ?>

    </nav>
    </div>  

</header>
