<?php
/* Template Name: Schedule Page */
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
                    
                    <div class="scheduleContent">
                        <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
                    </div>
                    
                    <div class="lowerSchedule">
                        <h4>YOU WILL RECEIVE AN EMAIL CONFIRMATION UPON COMPLETION</h4>
                    </div>
                    
                    
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
