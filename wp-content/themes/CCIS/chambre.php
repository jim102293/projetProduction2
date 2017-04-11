<?php
/*
Template Name: Chambre Page
*/
?>

<?php get_header();?>

 <?php while ( have_posts() ) : the_post(); ?>
    <div class="thumbnail">
                       <?php if ( has_post_thumbnail() ) {
	                        the_post_thumbnail();
                                        } 
    ?>
</div> 

 <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>