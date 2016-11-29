<?php 
/* Template Name: Demo Page Template */
get_header(); ?>

  <canvas id='canvaser' ></canvas>
        <div class="oilDrop-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>
        <div class="oilDrop-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>
        <div class="oilDrop-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>
        <div class="oilDrop-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>  <div class="oilDrop-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>  
            <div class="oilDrop-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="oildrop" >
        </div>

	<main role="main">
		<!-- section -->
                <section class="mainSection">

                    <div class="subHeader">
			<h2><?php the_title(); ?></h2>
                    </div>  
                    
                    <div class="clearfix"></div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
