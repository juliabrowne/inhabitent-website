<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header();

$args = array('post_type' => 'product', 'order' => 'ASC');
$products = new WP_Query($args);

?>

<div class="main-content-container">

<div class="shop-stuff-all">
    <h2 class="shop-stuff-header">Shop Stuff</h2>

    <?php
    $terms = array('taxonomy' => 'product_type');
    $shop_stuff = get_terms($terms); ?>

    <div class="shop-taxonomy">

        <?php foreach ($shop_stuff as $term): ?>
            <a href="<?php echo get_term_link($term); ?>">
                <p><?php echo $term->name; ?></p>
            </a>

        <?php endforeach; ?></div>
</div>


<section class="shop-products">

    <?php if ($products->have_posts()) : ?>
        <?php while ($products->have_posts()) : $products->the_post(); ?>

            <div class="shop-product">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>

                <p>
                    <?php the_title(); ?>
                <p class="dots"></p>
                <?php echo CFS()->get('price'); ?>
                </p>

            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <h2 class="error">Nothing Found!</h2>
    <?php endif; ?>

</section>


<?php get_footer(); ?>
