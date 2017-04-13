<?php
get_header();
?>

<?php putRevSlider("article1", "homepage") ?>

<main>
         
    <section id="slider-accueil">
       <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 
                </div>
            </div>
        </div>
    </section>  

<div class="container-fluid">
     <?php while ( have_posts() ) : the_post(); ?>
        <div class="row">
                    <!-- ARTICLE -->
				 <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="article-recent">
                        <h2 class="h2-article-accueil text-center"> Articles récents</h2>
                            <div class="thumbnail">
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
                </div><!-- fin col 6-->
        


             <!-- evenement -->
                    
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">        
                        <div class="event-recent">
                            <h2 class="h2-event-accueil text-center"> Évènements à venir</h2>
                                 <div class="thumbnail">
                                <?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => -1 ) ); ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                        <?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail();
                                                                        } 
                                        
                                        ?>
                                </div> <!-- fin thubnails -->
                <div class="container-fluid">

                                <div class="caption2">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title();?></a></h4>
                                    <h3><?php the_excerpt();?></h3>
                                    <h4>Date : <?php the_field('date'); ?> </h4>
                                    <h4>Heure : <?php the_field('heure'); ?></h4>
                                    <h4>Emplacement: <?php the_field('emplacement'); ?></h4>
                                </div><!-- fin caption -->
                        </div> <!-- fin event recent -->   
                    </div><!-- fin col 6 -->
        </div><!-- fin row  d'en haut-->
</div> <!-- container fluid fin -->
            <?php endwhile; wp_reset_query(); ?> 


            <?php endwhile; // end of the loop. ?>
   
            <!-- CALL TO ACTION MEMBRE -->
            <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="cta-membre">
                                <h2 class="h2-devenirmembre">DEVENEZ MEMBRE CHEZ NOUS DÈS AUJOURD’HUI !</h2>
                                    <a href="#"><button type="button" class="btn btn-default cta-button">DEVENIR MEMBRE</button></a>
                            </div><!-- cta membre -->
                        </div><!-- fin col 12 -->
            </div><!-- fin row -->

        <!-- PARTENAIRE -->

        <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php echo do_shortcode("[owl-carousel category='Partenaires']"); ?>
                </div>
                
            </div> <!-- fin row -->         
                    
    </div> <!-- FIN DU ROW -->
    <?php endwhile; // end of the loop. ?>
</main>






<?php get_footer();?>