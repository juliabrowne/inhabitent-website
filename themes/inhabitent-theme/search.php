<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="results-main">

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <div class="results">
                <?php if (have_posts()) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf(esc_html('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>


                        <?php get_template_part('template-parts/content', 'search'); ?>
                        <a class="read-entry-button" href='<?php the_permalink(); ?>'>Read More</a>
                    <?php endwhile; ?>

                    <?php inhabitent_numbered_pagination(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>


                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </main><!-- #main -->

    </section><!-- #primary -->

</div>

<?php get_footer(); ?>
