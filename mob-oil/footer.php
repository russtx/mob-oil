			<!-- footer -->
			<footer class="footer" role="contentinfo">
                            <div class="upperFooter">
                                
                            </div>
                            
                            <div class="lowerFooter">
				<!-- copyright -->
                                <p>
                                    <span class="leftFooter">
                                        MOB-OIL LLC&nbsp;<a href="tel:5555555555">555.555.5555</a>
                                    </span>
                                    <span class="rightFooter">
                                        &nbsp;<a href="mailto:contact@mob-oil.com">CONTACT@MOB-OIL.COM</a>
                                    </span>
                                    
                                <div class="socialContainer">
                                        <span class="footerSocials"><a href="https://twitter.com/home?status= <?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i></a></span>

                                        <span class="footerSocials"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>

                                        <span class="footerSocials"><a href="https://api.instagram.com/oembed?url=http://instagr.am/p/fA9uwTtkSN/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                                            <i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                                </div>
                                </p>
                                
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
				</p>
				<!-- /copyright -->
                                
                               
                            </div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
