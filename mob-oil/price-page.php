<?php
/* Template Name: Price Page  */ 
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
                <section class="mainSection ">
                    
                    <div class="priceSection">
                                <div class="subHeader">
                                    <h2><?php the_title(); ?></h2>
                                </div>

                            <div class="clearfix"></div>

                        <?php         
                            $args = array( 'post_type' => 'pricing', 'posts_per_page' => 4, 'order' => 'ASC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="priceContent"> 

                                <div class="leftPrice">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                </div>

                                <div class="rightPrice">
                                    <span class="price">
                                        <?php echo get_post_meta($post->ID, 'price', true); ?>
                                        <span class="cents">99</span>
                                    </span>

                                    <span class="extra">
                                        <?php echo get_post_meta($post->ID, 'extra', true); ?>
                                    </span>
                                </div>
                            </div>    
                            <?php endwhile; ?> 

                            <div class="bottomContent">
                                <div class="leftBottom">
                                    <p>All vehicles include up to 5Qts</p>
                                    <p>Ask about our multicar dicount</p>
                                </div>
                                <div class="rightBottom">
                                    <a href="<?php echo home_url ?>/schedule"><button>
                                        MAKE APPOINTMENT NOW
                                    </button></a>
                                </div>
                            </div>
                    </div>        
                    
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
