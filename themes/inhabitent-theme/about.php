<?php
/**
 * Template Name: About Page
 * 
 * The template for displaying the About page.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section class="about-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<!-- </article> -->
			<?php endwhile; // End of the loop. ?>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
