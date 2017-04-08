<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();?>
<?php putRevSlider("article1", "homepage") ?>
<main>
    <section id="slider-accueil">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    ****** SLIDER DANS WORDPRESS ****
                </div>
            </div>
        </div>
    </section>  

<!-- *******  EVENEMENT BLOC ********** -->
            <div class="container-fluid">
                <div class="row">
                  
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                           
                                <h3 class="h3-event">Évènements</h3>
                                <p class="titre-evenement">Les boys blues band, un groupe qui rapporte, venez encouragez les artiste de chez vous</p>
                                <button type="button" class="btn">Basic</button>
                            </div> <!-- fin col 3 -->
                            
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-default-event.png" alt="" height="300" width="300">
                            </div><!-- fin col 4 -->
            
    <!-- *******  EVENEMENT À VENIR  BLOC ********** -->                 

                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="bloc-evenement-a-venir">
                             <h3 class="h3-event-a-venir">
                                Évènements à venir
                             </h3>
                             <h4 class="titre-event-a-venir">AGA 2017</h4>
                             <p class="desc-event-a-venir">L'Assemblée générale annuelle de la CCIS aura lieule jeudi 20 avril prochain,à 17h, au Café Filozen, 811 Avenue de Grand-Mère, Shawinigan. 17 h : Souper-conférence (conférencier à confirmer)Coût: 35 $ (plus taxes) </p>
                        </div>
                    </div><!-- fin col 2-->
                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-default-event.png" alt="" height="300" width="300">
                    </div>
                    
                    
                   
                </div><!-- fin row -->
            </div><!-- fin container fluid-->
 
</main>
  
  <?php get_footer(); ?>