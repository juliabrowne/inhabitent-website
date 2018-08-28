<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>
<div class="main-content-container">
<section class="journal-section">
    <div class="journal-post-container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php while (have_posts()) :
                the_post(); ?>

                <div class="featured-single-post">

                    <?php the_post_thumbnail(); ?>

                    <h5 class="post-meta-info">
                        <?php inhabitent_posted_on(); ?> /
                        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                    </h5>

                    <a href='<?php the_permalink(); ?>'>
                        <h4 class="featured-post-title">
                            <?php the_title(); ?>
                        </h4>
                    </a>

                    <?php the_content(); ?>



                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>

                    <?php endwhile; // End of the loop. ?>


            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>
