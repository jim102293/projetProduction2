<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();?>
<?php putRevSlider("article1", "homepage") ?>
<main>
         
    <!--TITRE DE LA PAGE + FILS D'ARIANE' -->
    <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
                        <!-- Fils d'ariane-->
                        <div class="breadcrumbs">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="#"><?php the_title(); ?></a></li>
                            </ul>
                        </div> <!-- fin div breadcrumbs -->

                        <h2 class="h2-titre-page">
                             <?php the_title(); ?>
                        </h2>
                    </div> <!-- fin div col -->
                </div> <!-- fin div row -->
    </div> <!-- fin container -->

    <!-- IMAGE DE LA PAGE SECTION -->
    <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
                        <?php add_theme_support( 'post-thumbnails' );?>

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
				 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                       <?php if ( has_post_thumbnail() ) {
	                        the_post_thumbnail();
                                        } 
                        
                                         ?>
                            <div class="caption">
                                <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                </h4>
                                <h3><?php the_excerpt();?></h3>
                                <a href="<?php the_permalink() ?>">Lire +</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                       <?php if ( has_post_thumbnail() ) {
	                        the_post_thumbnail();
                                        } 
                        
                                         ?>
                            <div class="caption">
                                <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                </h4>
                                <h3><?php the_excerpt();?></h3>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                      <?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => -1 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                                        } 
                        
                                         ?>

                            <div class="caption">
                                <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                </h4>
                                <h3><?php the_excerpt();?></h3>
                            </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                 
    </div> <!-- FIN DU ROW -->
    <?php endwhile; // end of the loop. ?>
    <?php putRevSlider("instagram", "homepage") ?>
</main>
  
  <?php get_footer(); ?>