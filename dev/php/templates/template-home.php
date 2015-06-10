<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="slider-wrapper">
	<div class="slider-grid">
		<div class="u-gridContainer">
			<div class="u-gridCol4">
				<div class="white-bg">
					<ul>
						<a href="/familierecht"><li class="blue-back">PERSONEN & FAMILIERECHT</li></a>
						<a href="/rechtsgebieden-2/"><li>SOCIALE ZEKERHEIDSRECHT</li></a>
						<a href="/rechtsgebieden-2/"><li>ARBEIDSRECHT</li></a>
						<a href="/rechtsgebieden-2/"><li>CIVIELRECHT</li></a>
						<a href="/rechtsgebieden-2/"><li>ERFRECHT</li></a>
					</ul>
				</div>
			</div>
		</div>
	</div>	
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
	 

	<div class="home-wrapper">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol8">
					<h2>Welkom bij Advocatenkantoor Mr. Honders</h2>
				</div>
				<div class="u-gridCol3">
					<button href="tel:0624844873" class="tel-button"><i class="fa fa-phone-square"></i> 06-24844873</button>
				</div>

			</div>
			<div class="u-gridRow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devider.png"></div>
			<div class="u-gridRow">
				
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
					<a href="/over">
						<div class="image-head image-head-home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hoofd.jpg">
							<p>MR. J.M.F. Honders</p>
						</div>	
					</a>
				</div>
			</div>
		</div>
	</div>

 
<?php get_footer(); ?>
