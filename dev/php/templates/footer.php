	<div class="Footer"> 
		<div class="u-gridContainer">
			<div class="u-gridCol4 footer-keur">
				<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whitefooter1.svg" style="width:100%; height:100%; margin-bottom:-6px;">-->
				<div class="u-gridContainer">
					<div class="u-gridRow">
						<div class="u-gridCol6">
							<a href="http://www.degeschillencommissie.nl/over-ons/de-commissies/2713/advocatuur"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/geschil.png"></a>
						</div>
						<div class="u-gridCol6">
							<a href="http://debesteadvocaat.nl/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kwali.png"></a>
						</div>

					
					
					</div>
					<div class="u-gridRow">
						<a href="http://mediatorsearch.prod.rvr.org/nl/subhome_rbv/high_trust"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/high.png"></a>
					</div>

				</div>

				
			</div>
			<div class="u-gridCol2" style="margin-top:20px;">
				<b>Adresgegevens</b>
				<ul>
					<li>Vasteland 78</li>
					<li>3011 BN</li>
					<li>Rotterdam</li>
				</ul>
			</div>
			<div class="u-gridCol3" style="margin-top:20px;">
				<b>Contact</b>
				<ul>
					<li><a style="color:white;" href="tel:0624844873"><i class="fa fa-phone"></i>&nbsp;06-24844873</a></li>
					<li><i class="fa fa-print"></i>&nbsp;020-7508800</li>
					<li><a style="color:white;" href="mailto:jmfhonders@gmail.com"><i class="fa fa-envelope"></i>&nbsp;jmfhonders@gmail.com</a></li>
				</ul>
			</div>

			<div class="u-gridCol3" style="margin-top:20px;">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			
			<?php endif; ?>
			</div>

			
		</div>
	</div> 

	<div class="Socket">
		<div class="u-gridContainer" style="text-align:center; margin-top:20px;">
			<div class="u-gridRow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bot.png">
			</div>
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
