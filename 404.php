<?php get_header(); ?>

<main class="site-main">
    <div class="container">

        <div class="error-404">

            <h1 class="error-title">404</h1>

            <h2>Halaman Tidak Ditemukan</h2>

            <p>Maaf, halaman yang kamu cari tidak ada atau telah dipindahkan.</p>

            <!-- Search Form -->
            <div class="error-search">
                <p>Coba cari halaman yang kamu butuhkan:</p>
                <?php get_search_form(); ?>
            </div>

            <!-- Tombol Kembali -->
            <div class="error-action">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-home">
                    ← Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>