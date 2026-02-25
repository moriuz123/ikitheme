<?php get_header(); ?>

<div class="content-wrapper">
    <main class="site-main">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single'); ?>>

                <h1 class="post-title"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-navigation">
                    <?php the_post_navigation(array(
                        'prev_text' => '← %title',
                        'next_text' => '%title →',
                    )); ?>
                </div>

            </article>

        <?php endwhile; ?>

    </main>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>