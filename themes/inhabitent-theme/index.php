<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<section id="journal-section">
<div class="journal-post-container">

 <?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC');
	 $blog_posts = get_posts( $args ); // returns an array of posts ?>
		
    
    <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>


      <div class="featured-single-post">

			<?php the_post_thumbnail(); ?>

			<h5 class="post-meta-info">
        <?php inhabitent_posted_on(); ?> / 
				<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			</h5>

				<a href='<?php the_permalink(); ?>'>
				
        <h4 class="featured-post-title">
						<?php the_title(); ?>
				</h4>
				</a>	
				<?php the_excerpt(); ?>
        <a class="read-entry-button" href='<?php the_permalink(); ?>'>Read More</a>
				</a>
				
				
 
			</div>

      <?php endforeach; wp_reset_postdata(); ?>
			
			</div>

		<?php get_sidebar(); ?>
		
</section>

<?php get_footer(); ?>
