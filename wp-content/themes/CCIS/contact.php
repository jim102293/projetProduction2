<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header();?>
<main>
 

<!--TITRE DE LA PAGE + FILS D'ARIANE' -->
    <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- Fils d'ariane-->
                        <div class="breadcrumbs">
                            <ul class="breadcrumb">
                                <li><a href="<?php bloginfo('url') ?>">Accueil</a></li>
                                <li><a href="#"><?php the_title(); ?></a></li>
                            </ul>
                        </div> <!-- fin div breadcrumbs -->

                        <h2 class="h2-titre-page">
                             <?php the_title(); ?>
                        </h2>
                    </div> <!-- fin div col -->
                </div> <!-- fin div row -->
    </div> <!-- fin container -->

<div class="container-fluid">
     <?php while ( have_posts() ) : the_post(); ?>

     <div class="row">

         
         <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
              <?php the_content()?>   
         </div>
         
         
         <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 float">
             <?php echo do_shortcode("[huge_it_maps id='2']"); ?>
         </div>
         
          
                 
    </div> <!-- FIN DU ROW -->

  
</div>

    <?php endwhile; // end of the loop. ?>
    </main>
  
  <?php get_footer(); ?>