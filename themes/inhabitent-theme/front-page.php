<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 * Template Name: Front Page
 */

get_header(); ?>

<div class="home-banner"> </div>

<h2>Shop Stuff</h2>

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
    <?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC' );
	 $blog_posts = get_posts( $args ); // returns an array of posts ?>
    <div class="featured-post-container">
      <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

      <div class="featured-post">
        <?php the_post_thumbnail(); ?>
        <?php inhabitent_posted_on(); ?>
        <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
        <a href='<?php the_permalink(); ?>'>
          <h2>
            <?php the_title(); ?>
          </h2>
          <a class="read-entry-button" href='<?php the_permalink(); ?>'>Read Entry</a>
        </a>
      </div>

      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>