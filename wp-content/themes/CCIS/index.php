<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CCIS</title>

        <!-- style -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/bootstrap-theme.css">
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
                    
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <nav>
                            <ul class="nav nav-pills pull-right">
                                 
                                <form id="search-form" action="" method="get" >
                                     <input type="text" name="search" placeholder="Recherche..">
                                </form>
                                <li role="presentation"><a href="#">Connexion</a></li>
                                <li role="presentation"><a href="#"><img id="ico-panier" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico_panier.png" alt="" height="15" width="15">Panier</a></li>
                                <li role="presentation"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div> <!-- fin col 9 -->
                
                </div><!--fermture du ROW-->
            </div><!--fermeture du container -->
        </header>





    <main>
        
    </main>
    <footer>
    
    </footer>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>


    </body>
</html>