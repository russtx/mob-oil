<?php get_header(); ?>
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
		<section class="mainSection>

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
