<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="slider-wrapper">
	<div class="Slider">

		<?php

			$args = array(
				'post_type' => 'slides',
				'posts_per_page'=>999
			);
			$slides = new WP_Query( $args );
			$num = count($slides);
			$counter = 0;
			if( $slides->have_posts() ) {
				while( $slides->have_posts() ) {
					$slides->the_post();
					$counter++;
					?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						  $image_url = $image[0];
					?>
					<div class="slide" style="">
						<div class="slider-box">
							<div class="slider-text"><h1><?php the_title(); ?></h1></div>
							<a href="#"><?php the_content(); ?></a>
						</div>
						<img src="<?php echo $image_url; ?>" />
					</div>
					<?php
				}
			}
		?>
	</div>
	
</div>	
	<div class="u-gridContainer slider-grid">
		<div class="u-gridCol4">
			<div class="white-bg">
				<ul>
					<li><a href="#">PERSONEN & FAMILIERECHT</a></li>
					<li><a href="#">SOCIALE ZEKERHEIDSRECHT</a></li>
					<li><a href="#">ARBEIDSRECHT</a></li>
					<li><a href="#">CIVIELRECHT</a></li>
					<li><a href="#">ERFRECHT</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="home-wrapper">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol8">
					<h2>Welkom bij Advokatenkantoor Honders</h2>
				</div>
				<div class="u-gridCol4">
					<button class="tel-button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel-round.png"> 06-24844873</button> 
				</div>

			</div>
			<div class="u-gridRow">
				<div class="shadow-border"></div>
				<div class="u-gridCol8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--home" id="post-<?php the_ID(); ?>">
							<h4>Eigentijdse benadering</h4>
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
				</div>
				<div class="u-gridCol4">
					<div class="image-head">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hoofd.jpg">
						<p>MR. J.M.F. Honders</p>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="u-gridContainer">
	
	</div>

<?php get_footer(); ?>
