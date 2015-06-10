<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
<div class="top-fuller-image">

	<div id="map_canvas"></div>

</div>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Advocatenkantoor Mr. Honders</p>
								<p>Vasteland 78</p>
								<p>3011 BN Rotterdam</p>
								<p>Email:<a href="mailto:jmfhonders@gmail.com"> jmfhonders@gmail.com</a></p>
								<p>Tel: <a href="tel:020-7508800"> 020-7508800</a></p>
								<p>btw: NL136901621B01</p>
							</div>
	
						</div>				

					</div> <!-- /gridRow -->

					<div class="u-gridRow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devider.png"></div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

