<?php get_header(); ?>

<main class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Judul Halaman -->
                <h1 class="page-title"><?php the_title(); ?></h1>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <!-- Konten Halaman -->
                <div class="page-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>