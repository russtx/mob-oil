<?php 
/* Template Name: Home Page */ 
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

                    <span class="farLeft"><h1>MOB-OIL LLC</h1></span>
                    
                    <div class="subHeader">
                        <h2><?php echo get_post_meta($post->ID, 'sub-header', true); ?></h2>
                    </div>
                    
                    <div class="clearfix"></div> 
                    
                    <div class="oilDrop-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                    </div>
                    
                    <div class="oilDrop-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                    </div>
                    
                    <div class="topLine">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-4-new.png" alt="rectangle-4" >
                    </div>
                    
                    
                    
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('yellowBox'); ?>>
                            <div class="topImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topImage.png" alt="Car" >
                            </div>

                            <?php the_content(); ?>

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
                
                <div class="secondLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-5.png" alt="rectangle-5" >
                </div>
                
                <div class="oilDrop-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>
                
                <div class="yellowBox-2">
                    <p><?php echo get_post_meta($post->ID, 'second-home-box', true); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/computer" alt="computer" >
                </div>  
                
                <div class="oilDrop-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>
                
                <div class="oilDrop-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>
                
                <div class="clearfix"></div> 
                
                <div class="thirdLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-6.png" alt="rectangle-6" >
                </div>
                        
                <div class="yellowBox-3">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/relax" alt="relax" >
                     <p><?php echo get_post_meta($post->ID, 'third-home-box', true); ?></p>
                </div>
                
                        <div class="clearfix"></div>
                        
                <div class="oilDrop-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
                </div>        
                 
                <div class="fourthLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-7.png" alt="rectangle-7" >
                </div>
                        
                 <div class="yellowBox-4">       
                     <p><?php echo get_post_meta($post->ID, 'forth-home-box', true); ?></p>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar" alt="calendar" >
                 </div>
                        
                 <div class="fifthLine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle-8-new.png" alt="rectangle-8" >
                </div>       
                        
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
