<?php
/*
Template Name: Missions & Valeurs
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

        <div class="thumbnail">
                    <?php while ( have_posts() ) : the_post(); ?>
   
                       <?php if ( has_post_thumbnail() ) {
	                        the_post_thumbnail();
                                        } 
                        ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-responsive" id="image1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mission.png" alt="">
                        </div>
                    </div><!-- fin row -->
        </div><!-- fin thumbnail -->

<div class="container-fluid">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <p><?php the_content()?></p>
                </div>
        </div>
        
</div> <!-- fin container-fluid-->

 <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>