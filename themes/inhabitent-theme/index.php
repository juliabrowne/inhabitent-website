<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

 <?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC');
	 $blog_posts = get_posts( $args ); // returns an array of posts ?>
		
	<section id="journal-section">

    <div class="journal-post-container">
    
    <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

      <div class="featured-single-post">

      <div class="featured-post-thumbnail">
			<?php the_post_thumbnail(); ?>
			<div class="date-and-comment">
        <?php inhabitent_posted_on(); ?> / 
        <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
        </div>
      </div>  

        <a href='<?php the_permalink(); ?>'>
        <h2 class="featured-post-title">
						<?php the_title(); ?>
				</h2>
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
