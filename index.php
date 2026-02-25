<?php get_header(); ?>

<div class="content-wrapper">
    <main class="site-main">
        <div class="container">

            <?php if (have_posts()) : ?>

                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <!-- Featured Image -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <!-- Konten Post -->
                            <div class="post-content">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="post-meta">
                                    <span>📅 <?php echo get_the_date(); ?></span>
                                    <span>✍️ <?php the_author(); ?></span>
                                </div>

                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>

                        </article>

                    <?php endwhile; ?>
                </div>

                <!-- Navigasi Halaman -->
                <div class="pagination">
                    <?php the_posts_pagination(array(
                        'prev_text' => '← Sebelumnya',
                        'next_text' => 'Berikutnya →',
                    )); ?>
                </div>

            <?php else : ?>
                <p>Belum ada konten yang tersedia.</p>
            <?php endif; ?>

        </div>
    </main>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>