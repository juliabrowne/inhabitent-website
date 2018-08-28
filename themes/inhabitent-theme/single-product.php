<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="main-content-container">

<section class="single-product-section">

    <?php while (have_posts()) :
    the_post(); ?>


    <div class="shop-entry">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
    </div><!-- .entry-header -->

    <div class="entry-content">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <p class="price"><?php echo CFS()->get('price'); ?></p>
        <div class="product-blurb">
            <?php the_content(); ?>
        </div>


        <a class="button-border facebook social-media" href="#"><i class="fab-fa-facebook-f"></i>Like</a>
        <a class="button-border twitter social-media" href="#"><i class="fab-fa-twitter"></i>Tweet</a>
        <a class="button-border pinterest social-media" href="#"><i class="fab-fa-pinterest"></i>Pin</a>

    </div>

</section>

<?php endwhile; ?>


<?php get_footer(); ?>
