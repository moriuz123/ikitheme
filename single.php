<?php get_header(); ?>

<main class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Judul Post -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- Meta Post -->
                <div class="post-meta">
                    <span>📅 <?php echo get_the_date(); ?></span>
                    <span>✍️ <?php the_author(); ?></span>
                    <span>📁 <?php the_category(', '); ?></span>
                </div>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <!-- Konten Post -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <!-- Navigasi Post -->
                <div class="post-navigation">
                    <?php
                    the_post_navigation(array(
                        'prev_text' => '← %title',
                        'next_text' => '%title →',
                    ));
                    ?>
                </div>

            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>