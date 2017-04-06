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

            <!-- MENU PRINCIPALE -->
            
            <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
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



Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a bibendum tellus. In convallis, nulla a rhoncus tincidunt, est sem convallis nunc, vulputate congue magna augue quis nulla. Phasellus fermentum odio euismod magna auctor eleifend. Praesent semper, felis id sodales ultricies, neque ligula sagittis nibh, interdum fermentum lectus odio a urna. Aliquam luctus felis ex, sit amet venenatis tortor vestibulum a. Cras blandit faucibus lectus, a mattis massa lacinia et. Praesent in nibh vel ante aliquet fringilla. Etiam sapien dui, malesuada sit amet maximus vitae, tincidunt sit amet lectus. Nunc eu commodo metus, eget pretium odio. Cras dapibus condimentum nibh eu ornare. Proin iaculis sit amet nunc vitae elementum. Donec volutpat arcu at orci volutpat, a posuere nisl pulvinar. Curabitur ullamcorper orci vitae velit cursus, a rhoncus elit rutrum. Pellentesque sollicitudin, ipsum placerat malesuada ultricies, diam ex fringilla massa, et venenatis urna sapien nec velit. Curabitur congue quam eget diam posuere, vitae tempor neque tincidunt.

Sed ullamcorper efficitur risus, vel aliquam est. Donec tincidunt vehicula laoreet. Curabitur gravida, lorem eu rhoncus ultricies, mauris ante gravida dui, id mollis tortor magna id urna. Praesent maximus aliquam est, at aliquet quam efficitur at. Sed rhoncus hendrerit mollis. Integer id sollicitudin lorem. Suspendisse ut maximus leo. Morbi sed dapibus est. Praesent in dignissim neque. Praesent faucibus leo in nisl gravida posuere. In hac habitasse platea dictumst. Maecenas non est finibus, tincidunt neque sed, hendrerit tellus. Fusce ornare sollicitudin libero id feugiat. Phasellus venenatis dui in nisl egestas blandit.

Suspendisse feugiat est non diam tempor, vel ullamcorper nunc rhoncus. Cras in posuere sapien. Curabitur eros enim, eleifend id dictum eu, volutpat id arcu. Aenean luctus ut mi eget rhoncus. Morbi sodales varius elit, ut efficitur purus viverra et. Fusce molestie enim nec consequat consectetur. Phasellus fringilla hendrerit nisl eu volutpat. Praesent pharetra, orci vitae euismod egestas, turpis diam auctor leo, non vehicula libero ante id dolor. Aenean efficitur felis vel ante suscipit viverra. Donec id leo diam. Curabitur eu varius sem, sit amet laoreet ex. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Mauris et facilisis mauris, laoreet eleifend dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi egestas consequat augue vitae scelerisque. Donec ullamcorper lacus vel leo commodo cursus. Cras rutrum, tortor a accumsan maximus, odio enim porttitor lorem, luctus dignissim diam sapien id risus. Quisque tincidunt nunc id nulla egestas, a tincidunt odio facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed maximus imperdiet diam a gravida. Phasellus vehicula erat non ex efficitur cursus.

Donec non lacus sem. Sed pulvinar varius mi, eget fringilla enim vulputate at. Quisque eget ligula ac sem rhoncus maximus. Nunc mollis nisi non augue malesuada posuere. Nunc pharetra neque vitae consectetur luctus. Proin quis ex id mi finibus sollicitudin. Nullam nec pharetra orci, at pulvinar nibh. Etiam lacinia tortor non mi condimentum, at lobortis leo fermentum. Sed velit dolor, tempus eu hendrerit vitae, fringilla sed velit. Praesent nulla nisi, vulputate et quam sed, feugiat convallis mi. Nullam mollis vel tortor non consectetur. Fusce vitae est sed ipsum pretium elementum. Sed vehicula hendrerit nibh eget efficitur. Donec cursus tempor aliquam. Integer facilisis aliquam risus, quis convallis magna facilisis a. Pellentesque eget felis pharetra, bibendum nisi eget, tincidunt lacus. 



Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a bibendum tellus. In convallis, nulla a rhoncus tincidunt, est sem convallis nunc, vulputate congue magna augue quis nulla. Phasellus fermentum odio euismod magna auctor eleifend. Praesent semper, felis id sodales ultricies, neque ligula sagittis nibh, interdum fermentum lectus odio a urna. Aliquam luctus felis ex, sit amet venenatis tortor vestibulum a. Cras blandit faucibus lectus, a mattis massa lacinia et. Praesent in nibh vel ante aliquet fringilla. Etiam sapien dui, malesuada sit amet maximus vitae, tincidunt sit amet lectus. Nunc eu commodo metus, eget pretium odio. Cras dapibus condimentum nibh eu ornare. Proin iaculis sit amet nunc vitae elementum. Donec volutpat arcu at orci volutpat, a posuere nisl pulvinar. Curabitur ullamcorper orci vitae velit cursus, a rhoncus elit rutrum. Pellentesque sollicitudin, ipsum placerat malesuada ultricies, diam ex fringilla massa, et venenatis urna sapien nec velit. Curabitur congue quam eget diam posuere, vitae tempor neque tincidunt.

Sed ullamcorper efficitur risus, vel aliquam est. Donec tincidunt vehicula laoreet. Curabitur gravida, lorem eu rhoncus ultricies, mauris ante gravida dui, id mollis tortor magna id urna. Praesent maximus aliquam est, at aliquet quam efficitur at. Sed rhoncus hendrerit mollis. Integer id sollicitudin lorem. Suspendisse ut maximus leo. Morbi sed dapibus est. Praesent in dignissim neque. Praesent faucibus leo in nisl gravida posuere. In hac habitasse platea dictumst. Maecenas non est finibus, tincidunt neque sed, hendrerit tellus. Fusce ornare sollicitudin libero id feugiat. Phasellus venenatis dui in nisl egestas blandit.

Suspendisse feugiat est non diam tempor, vel ullamcorper nunc rhoncus. Cras in posuere sapien. Curabitur eros enim, eleifend id dictum eu, volutpat id arcu. Aenean luctus ut mi eget rhoncus. Morbi sodales varius elit, ut efficitur purus viverra et. Fusce molestie enim nec consequat consectetur. Phasellus fringilla hendrerit nisl eu volutpat. Praesent pharetra, orci vitae euismod egestas, turpis diam auctor leo, non vehicula libero ante id dolor. Aenean efficitur felis vel ante suscipit viverra. Donec id leo diam. Curabitur eu varius sem, sit amet laoreet ex. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Mauris et facilisis mauris, laoreet eleifend dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi egestas consequat augue vitae scelerisque. Donec ullamcorper lacus vel leo commodo cursus. Cras rutrum, tortor a accumsan maximus, odio enim porttitor lorem, luctus dignissim diam sapien id risus. Quisque tincidunt nunc id nulla egestas, a tincidunt odio facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed maximus imperdiet diam a gravida. Phasellus vehicula erat non ex efficitur cursus.

Donec non lacus sem. Sed pulvinar varius mi, eget fringilla enim vulputate at. Quisque eget ligula ac sem rhoncus maximus. Nunc mollis nisi non augue malesuada posuere. Nunc pharetra neque vitae consectetur luctus. Proin quis ex id mi finibus sollicitudin. Nullam nec pharetra orci, at pulvinar nibh. Etiam lacinia tortor non mi condimentum, at lobortis leo fermentum. Sed velit dolor, tempus eu hendrerit vitae, fringilla sed velit. Praesent nulla nisi, vulputate et quam sed, feugiat convallis mi. Nullam mollis vel tortor non consectetur. Fusce vitae est sed ipsum pretium elementum. Sed vehicula hendrerit nibh eget efficitur. Donec cursus tempor aliquam. Integer facilisis aliquam risus, quis convallis magna facilisis a. Pellentesque eget felis pharetra, bibendum nisi eget, tincidunt lacus. 
ante gravida dui, id mollis tortor magna id urna. Praesent maximus aliquam est, at aliquet quam efficitur at. Sed rhoncus hendrerit mollis. Integer id sollicitudin lorem. Suspendisse ut maximus leo. Morbi sed dapibus est. Praesent in dignissim neque. Praesent faucibus leo in nisl gravida posuere. In hac habitasse platea dictumst. Maecenas non est finibus, tincidunt neque sed, hendrerit tellus. Fusce ornare sollicitudin libero id feugiat. Phasellus venenatis dui in nisl egestas blandit.

Suspendisse feugiat est non diam tempor, vel ullamcorper nunc rhoncus. Cras in posuere sapien. Curabitur eros enim, eleifend id dictum eu, volutpat id arcu. Aenean luctus ut mi eget rhoncus. Morbi sodales varius elit, ut efficitur purus viverra et. Fusce molestie enim nec consequat consectetur. Phasellus fringilla hendrerit nisl eu volutpat. Praesent pharetra, orci vitae euismod egestas, turpis diam auctor leo, non vehicula libero ante id dolor. Aenean efficitur felis vel ante suscipit viverra. Donec id leo diam. Curabitur eu varius sem, sit amet laoreet ex. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Mauris et facilisis mauris, laoreet eleifend dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi egestas consequat augue vitae scelerisque. Donec ullamcorper lacus vel leo commodo cursus. Cras rutrum, tortor a accumsan maximus, odio enim porttitor lorem, luctus dignissim diam sapien id risus. Quisque tincidunt nunc id nulla egestas, a tincidunt odio facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed maximus imperdiet diam a gravida. Phasellus vehicula erat non ex efficitur cursus.

Donec non lacus sem. Sed pulvinar varius mi, eget fringilla enim vulputate at. Quisque eget ligula ac sem rhoncus maximus. Nunc mollis nisi non augue malesuada posuere. Nunc pharetra neque vitae consectetur luctus. Proin quis ex id mi finibus sollicitudin. Nullam nec pharetra orci, at pulvinar nibh. Etiam lacinia tortor non mi condimentum, at lobortis leo fermentum. Sed velit dolor, tempus eu hendrerit vitae, fringilla sed velit. Praesent nulla nisi, vulputate et quam sed, feugiat convallis mi. Nullam mollis vel tortor non consectetur. Fusce vitae est sed ipsum pretium elementum. Sed vehicula hendrerit nibh eget efficitur. Donec cursus tempor aliquam. Integer facilisis aliquam risus, quis convallis magna facilisis a. Pellentesque eget felis pharetra, bibendum nisi eget, tincidunt lacus. ante gravida dui, id mollis tortor magna id urna. Praesent maximus aliquam est, at aliquet quam efficitur at. Sed rhoncus hendrerit mollis. Integer id sollicitudin lorem. Suspendisse ut maximus leo. Morbi sed dapibus est. Praesent in dignissim neque. Praesent faucibus leo in nisl gravida posuere. In hac habitasse platea dictumst. Maecenas non est finibus, tincidunt neque sed, hendrerit tellus. Fusce ornare sollicitudin libero id feugiat. Phasellus venenatis dui in nisl egestas blandit.

Suspendisse feugiat est non diam tempor, vel ullamcorper nunc rhoncus. Cras in posuere sapien. Curabitur eros enim, eleifend id dictum eu, volutpat id arcu. Aenean luctus ut mi eget rhoncus. Morbi sodales varius elit, ut efficitur purus viverra et. Fusce molestie enim nec consequat consectetur. Phasellus fringilla hendrerit nisl eu volutpat. Praesent pharetra, orci vitae euismod egestas, turpis diam auctor leo, non vehicula libero ante id dolor. Aenean efficitur felis vel ante suscipit viverra. Donec id leo diam. Curabitur eu varius sem, sit amet laoreet ex. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Mauris et facilisis mauris, laoreet eleifend dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi egestas consequat augue vitae scelerisque. Donec ullamcorper lacus vel leo commodo cursus. Cras rutrum, tortor a accumsan maximus, odio enim porttitor lorem, luctus dignissim diam sapien id risus. Quisque tincidunt nunc id nulla egestas, a tincidunt odio facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed maximus imperdiet diam a gravida. Phasellus vehicula erat non ex efficitur cursus.

Donec non lacus sem. Sed pulvinar varius mi, eget fringilla enim vulputate at. Quisque eget ligula ac sem rhoncus maximus. Nunc mollis nisi non augue malesuada posuere. Nunc pharetra neque vitae consectetur luctus. Proin quis ex id mi finibus sollicitudin. Nullam nec pharetra orci, at pulvinar nibh. Etiam lacinia tortor non mi condimentum, at lobortis leo fermentum. Sed velit dolor, tempus eu hendrerit vitae, fringilla sed velit. Praesent nulla nisi, vulputate et quam sed, feugiat convallis mi. Nullam mollis vel tortor non consectetur. Fusce vitae est sed ipsum pretium elementum. Sed vehicula hendrerit nibh eget efficitur. Donec cursus tempor aliquam. Integer facilisis aliquam risus, quis convallis magna facilisis a. Pellentesque eget felis pharetra, bibendum nisi eget, tincidunt lacus. 
    <main>
        
    </main>
    <footer>
    
    </footer>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Jquery pour menu principale fixed en scroll-->
    <script>
            (function($){
            $(document).ready(function(){
                var offset = $(".navbar").offset().top;
                $(document).scroll(function(){
                    var scrollTop = $(document).scrollTop();
                    if(scrollTop > offset){
                        $(".navbar").css("position", "fixed");
                    }
                    else {
                        $(".navbar").css("position", "static");
                    }
                });
             });
             })(jQuery);
    </script>

    </body>
</html>