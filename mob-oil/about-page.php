<?php 
/* Template Name: About Page  */ 
get_header(); ?>

    <div class="oilDripLeft">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-1.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-2.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-3.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-4b.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-5.png" alt="oildrip" >
    </div>

    <div class="oilDripRight">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-5.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-4b.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-3.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-2.png" alt="oildrip" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drip-1.png" alt="oildrip" >
    </div>


	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                    
                <div class="subHeader aboutSubHeader">
                    <h2><?php the_title(); ?></h2>
                </div>
                    
                 <div class="aboutOilDrop-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>

                <div class="aboutOilDrop-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>   
                    
                <div class="topLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-4-new.png" alt="rectangle-4" >
                </div>   

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('aboutYellowBox'); ?>>

                            <?php the_content(); ?>
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="Car-2" >

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                <div class="clearfix"></div> 
                
                <div class="aboutOilDrop-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div> 
                
                <div class="aboutOilDrop-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div> 
                
                <div class="aboutSecondLine">        
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-6.png" alt="rectangle-6" >        
                </div>
                
                <div class="aboutYellowBox-2">
                    <p><?php echo get_post_meta($post->ID, 'second-about-box', true); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mechanic" alt="mechanic" >
                </div>  
                
                <div class="aboutOilDrop-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div> 
                
                <div class="aboutThirdLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-8-new.png" alt="rectangle-8" >
                </div>
                
                <div class="aboutOilDrop-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div> 
                    
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
