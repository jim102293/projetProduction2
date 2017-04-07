<footer>

<!-- FOOTER PARTENAIRES -->


    <!--********  FOOTER INFO ******** -->
    <div class="container-fluid">
        <div class="row">
            <!-- NOUS JOINDRE -->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="bloc-info-footer">
                    <h2 class="footer-contact-h2">NOUS JOINDRE</h2>
                    <p class="adresse-footer">1250, avenue de la Station,<br>bureau 1-116  <br>Shawinigan (Québec)<br>G9N 1W8<br>Téléphone : 819.536.0777<br>info@ccishawinigan.ca</p>
                </div>    
            </div>
            <!-- infolettre -->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="bloc-infolettre-footer">
                    INFOLETTRE
                </div>
            </div>
            <!-- Réseaux sociaux-->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                 <div class="bloc-reseaux-footer">
                    <h3 class="h3-reseauxsociaux">Suivez-nous</h3>
                 </div>
            </div>
        </div><!-- fin row -->


            <!-- barre noire -->
            <div class="barre-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 class="h3-barre-noir">© 2017 | CHAMBRE DES COMMERCES ET INDUSTRIE SHAWINIGAN</h3>
                </div>
            </div>
        
    </div><!-- fin container fluid -->
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