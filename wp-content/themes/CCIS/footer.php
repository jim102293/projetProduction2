<footer>

<!-- FOOTER PARTENAIRES -->


    <!--********  FOOTER INFO ******** -->

<div class="container-fluid">
            <div class="footer-bloc">
                <div class="row">

                    <!-- NOUS JOINDRE -->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="bloc-info-footer">
                            <?php
                                if(is_active_sidebar('sidebar-footer-gauche')){
                                        dynamic_sidebar('sidebar-footer-gauche');
                                        }
                            ?>
                            
                        </div>    
                    </div>

                    <!-- infolettre -->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="bloc-infolettre-footer">
                            <h3> INFOLETTRE</h3>
                            <div class="form-group">
                                <label for="email">Courriel:</label>
                                <input type="email" class="form-control" id="courriel" placeholder=" Entrez votre courriel" >
                            </div>
                                <?php
                                    if(is_active_sidebar('sidebar-footer-milieu')){
                                            dynamic_sidebar('sidebar-footer-milieu');
                                            }
                                ?>
                        </div> <!-- fin bloc infolettre footer -->
                    </div> <!-- fin col 4 -->

                    <!-- Réseaux sociaux-->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="bloc-reseaux-footer">
                            <h2 class="h3-reseauxsociaux">Suivez-nous</h3>
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="" height="100" width="100"></a>
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png" alt="" height="100" width="100"></a>
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png" alt="" height="100" width="100"></a>
                        </div>
                    </div>
                

                          
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">     
                        <!-- barre noire -->
                        <div class="barre-footer">
                            <h3 class="h3-barre-noir">© 2017 | CHAMBRE DES COMMERCES ET INDUSTRIE SHAWINIGAN   </h3>
                        </div>
                    </div><!-- fin de la col 12 -->
                
            </div><!-- fin du row-->
        </div> <!-- fin footer bloc -->
    </div> <!-- fin container fluid -->
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

    <?php wp_footer();?>
    
    </body>
</html>