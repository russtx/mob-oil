<?php 
/* Template Name: Contact Page */
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

		
                    <div class="contactContent">
                        
                        <div class="contactLeft">
                            <span class="guy"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-guy.png" alt="Contact guy" ></span>
                            <span class="contactPhone">
                                <a href="tel:5555555555"><h3>CALL<br />555.555.5555</h3></a>
                            </span>
                            <span class="contactSocials">
                                
                                <ul>
                                    <li><a href="https://twitter.com/home?status= <?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                            <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                                                    <li><a href="https://api.instagram.com/oembed?url=http://instagr.am/p/fA9uwTtkSN/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                                                            <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>

                            </span>
                        </div>
                        
                        <div class="contactForm">
                            
                            <?php echo do_shortcode('[gravityform id="2" title="true" description="true"]'); ?>
                        </div>
                        
                    </div>
                    <div class="triangle"></div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
