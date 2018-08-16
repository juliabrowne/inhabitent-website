<?php
/**
 * The main template file.
 *
 * @package inhabitent_Theme
 * Template Name: Front Page
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
    <header>
      <h1 class="page-title screen-reader-text">
        <?php single_post_title(); ?>
      </h1>
    </header>
    <?php endif; ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content' ); ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

    <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>





    <?php $terms = get_terms([
    'taxonomy' => 'product_type',
    'hide_empty' => false,
		]); ?>

    <div class="shop-stuff-container">
      <?php foreach ( $terms as $term ) : ?>
      <div class="shop-stuff">
        <h2>
          <?php echo $term->name; ?>
        </h2>
        <div class="shop-stuff-icon"><img src="<?php echo get_template_directory_uri()?>/images/product-type-icons/<?php echo $term->slug ?>.svg"></div>
        <p>
          <?php echo $term->description; ?>
        </p>
      </div>
      <?php endforeach; ?>
    </div>


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