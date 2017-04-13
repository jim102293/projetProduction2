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
<div class="container-fluid"> 
                                <?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => -1 ) ); ?>
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                
                                 <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                 
                                <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                                        } 
                        
                                         ?>
                                
                                <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                </h4>
                                    <h3><?php the_excerpt();?></h3>
                                    <h4>Date : <?php the_field('date'); ?> </h4>
                                    <h4>Heure : <?php the_field('heure'); ?></h4>
                                    <h4>Emplacement: <?php the_field('emplacement'); ?></h4>
                                
                                </div>
                            </div>
                     
                           <?php endwhile; wp_reset_query(); ?>
                           </div>   
 




<?php get_footer(); ?>