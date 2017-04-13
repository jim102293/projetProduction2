<?php
/*
Template Name: Blogue
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
                    <img class="img-responsive" id="image1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogue.png" alt="">
                </div>
        </div>
</div> 

<!-- CONTENU DE LA PAGE -->
<div class="container-fluid">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
        
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            
                        <div class="article-recent">
                            <p><?php the_content()?></p>
                            <h2 class="h2-article-accueil text-center"> Articles récents</h2>
                                <div class="thumbnail">
                                        <?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => -1 ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                        <?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail();
                                                                        } 
                                        
                                        ?>
                                </div><!-- fin thubnails -->
                                <div class="caption">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a></h4>
                                    <h3><?php the_excerpt();?></h3>
                                    <a href="<?php the_permalink() ?>">Lire +</a>
                                </div><!-- fin caption -->
                        </div> <!-- fin article recent -->
                           
                </div><!-- fin col 9-->
            
                    
            <?php endwhile; wp_reset_query(); ?> 
    </div> <!-- fin row -->
        <?php endwhile; // end of the loop. ?>
</div><!-- fin container fluid -->




<?php get_footer(); ?>

