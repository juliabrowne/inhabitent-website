<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

<section class="single-product">
	
	<div class="single-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>

	<div class="product-content">
		<h2 class="product-title">
			<?php the_title(); ?>
		</h2>
		<h3 class="product-price"> 
			<?php echo CFS()->get( 'price' ); ?>
		</h3>

	<?php the_content(); ?>
</div><!-- .entry-content -->


	<a id="social-media" href="#"><i class="fab-fa-facebook-f"></i>Like</a>
	<a id="social-media" href="#"><i class="fab-fa-twitter"></i>Tweet</a>
	<a id="social-media" href="#"><i class="fab-fa-pinterest"></i>Pin</a>

</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		</section>
		
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>