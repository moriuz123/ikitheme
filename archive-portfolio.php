<?php get_header(); ?>

<div class="content-wrapper">
    <main class="site-main">

        <h1 class="page-title">Portfolio</h1>

        <?php if (have_posts()) : ?>

            <div class="portfolio-grid">
                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="portfolio-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="portfolio-content">
                            <h2 class="portfolio-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="portfolio-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                    </article>

                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(array(
                    'prev_text' => '← Sebelumnya',
                    'next_text' => 'Berikutnya →',
                )); ?>
            </div>

        <?php else : ?>
            <p>Belum ada portfolio.</p>
        <?php endif; ?>

    </main>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>