<?php
/*
Template Name: Conseil admin Page
*/
?>

<?php get_header();?>

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

<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img class="img-responsive" id="image1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/conseil-admin.png" alt="">
                </div>
        </div>

                                <?php $loop = new WP_Query( array( 'post_type' => 'membre', 'posts_per_page' => -1 ) ); ?>
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="container-fluid"> 
                                 <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="thumbnail">
                                 
                                <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                                        } 
                        
                                         ?>
                                
                                <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                </h4>
                                <h3><?php the_excerpt();?></h3>
                                <h4><?php the_field('Adresse'); ?></h4>
                                <h4><?php the_field('Entreprise'); ?></h4>
                                <h4><?php the_field('Courriel'); ?></h4>
                                
                                </div>
                            </div>
                     
                           <?php endwhile; wp_reset_query(); ?>
                           </div>   
 




<?php get_footer(); ?>