<?php

/**
 * Template Name: Full Width
 * 
 * @package ikitheme
 */

get_header(); ?>

<main class="site-main" style="max-width:1100px; margin: 40px auto; padding: 0 20px;">

    <?php while (have_posts()) : the_post(); ?>

        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h1 class="page-title"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>