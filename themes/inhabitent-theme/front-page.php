<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 * Template Name: Front Page
 */

get_header(); ?>

<div class="home-banner"> </div>

<!-- Shop Section -->
<h2 class="shop-stuff-title">Shop Stuff</h2>

    <?php $terms = get_terms([
    'taxonomy' => 'product_type',
    'hide_empty' => false,
    ]); ?>

    <div class="shop-stuff-container">
      <?php foreach ( $terms as $term ) : ?>
      <div class="shop-stuff">
          <img class="shop-stuff-icon" src="<?php echo get_template_directory_uri()?>/images/product-type-icons/<?php echo $term->slug ?>.svg">
        <p>
          <?php echo $term->description; ?>
        </p>
        <p>
          <a class="shop-stuff-button" href="<?php echo get_term_link( $term ); ?>"> <?php echo $term->name; ?> Stuff </a>
        </p>
      </div>
      <?php endforeach; ?>

    </div>

    </section>


<!-- Journal Posts --> 
<h2 class="inhabitent-journal-title">Inhabitent Journal</h2>

    <?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC', 'numberposts' => 3);
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
        <a class="read-entry-button" href='<?php the_permalink(); ?>'>Read Entry</a>
        </a>
    </section>  
      </div>

      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>