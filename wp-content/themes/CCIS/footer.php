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

    <?php wp_footer();?>
    
    </body>
</html>