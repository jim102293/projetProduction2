<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header();?>
<main>
    <section id="slider-accueil">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 
                </div>
            </div>
        </div>
    </section>  
     <?php while ( have_posts() ) : the_post(); ?>
     <div class="row">
         
         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float">
             <?php echo do_shortcode("[huge_it_maps id='2']"); ?>
         </div>
         
     </div>          
                 
    </div> <!-- FIN DU ROW -->
    <?php endwhile; // end of the loop. ?>
    </main>
  
  <?php get_footer(); ?>