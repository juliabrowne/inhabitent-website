<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div class="main-content-container">

    <section class="find-us-container">

        <?php while (have_posts()) : the_post(); ?>

            <div class="find-us">
                <h1>Find Us</h1>
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>


        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>