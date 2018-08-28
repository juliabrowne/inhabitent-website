<?php
/**
 * The template for displaying custom taxonomy.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div class="main-content-container">

    <div class="shop-stuff-all">
        <div class="taxonomy-content">
            <h2 class="shop-stuff-header"><?php single_term_title(); ?></h2>
            <?php echo the_archive_description($term_id, $taxonomy) ?>
        </div>
    </div>
    <section class="shop-products">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div class='shop-product'>
                    <a href='<?php the_permalink(); ?>'>
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <p><?php the_title(); ?>
                    <p class="dots"></p>
                    <?php echo CFS()->get('price'); ?></p>
                </div>
            <?php endwhile; // End of the loop. ?>
        <?php else : ?>
        <?php endif; ?>
        </div>
        </div>
    </section>


<?php get_footer(); ?>