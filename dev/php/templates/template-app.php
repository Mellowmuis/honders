<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>
<div class="top-full-image">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app.jpg">

</div>
	
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h2><?php the_title(); ?></h2>
				<div class="u-gridRow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devider.png"></div>
				<aside class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ihpone.png" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol6" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
				<div class="u-gridCol3">
					<a href="#">Download de app hier:</a><br>
					<div class="app-box">
						<a href="#"><img class="first-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/play_store.png" /> </a><br>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
						
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?> 


