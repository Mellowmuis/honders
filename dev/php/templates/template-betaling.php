<?php
/*
Template Name: Betaling
*/
?>

<?php get_header(); ?>
<div class="top-full-image">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/justice.png">

</div>
	

	<div class="home-wrapper">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol8">
					<h2 style="margin-bottom:0px;"><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="u-gridRow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devider.png"></div>
			<div class="u-gridRow">
				
				<div class="u-gridCol8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--home" id="post-<?php the_ID(); ?>">
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
				</div>
				<div class="u-gridCol4">
					<a href="/over">
						<div class="image-head">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hoofd.jpg">
							<p>MR. J.M.F. Honders</p>
						</div>	
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="u-gridContainer">
	
	</div>

<?php get_footer(); ?>
