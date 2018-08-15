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


    <?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC' );
   $product_posts = get_posts( $args ); // returns an array of posts ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
    <?php endforeach; wp_reset_postdata(); ?>


  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>