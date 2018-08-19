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
    
    <div class="featured-post-container">
    
    <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

      <div class="featured-post">

      <div class="featured-post-thumbnail">
      <?php the_post_thumbnail(); ?>
      </div>  

      <section class="featured-post-info">
        <div class="date-and-comment">
        <?php inhabitent_posted_on(); ?> / 
        <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
        </div>

        <a href='<?php the_permalink(); ?>'>
        <h2 class="featured-post-title">
						<?php the_title(); ?>
				</h2>
				</a>	
				<?php the_content(); ?>
        <a class="read-entry-button" href='<?php the_permalink(); ?>'>Read Entry</a>
        </a>
    </section>  
      </div>

      <?php endforeach; wp_reset_postdata(); ?>
    </div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
