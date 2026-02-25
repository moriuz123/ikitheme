<?php

/**
 * Template Name: Contact Page
 * 
 * @package ikitheme
 */

get_header(); ?>

<main class="site-main">
    <div class="contact-wrapper">

        <!-- Kolom Kiri: Info Kontak -->
        <div class="contact-info">

            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

            <ul class="contact-details">
                <li>📍 Jl. Contoh No. 123, Jakarta</li>
                <li>📞 +62 812 3456 7890</li>
                <li>✉️ hello@ikitheme.com</li>
                <li>🕐 Senin - Jumat, 09.00 - 17.00</li>
            </ul>

        </div>

        <!-- Kolom Kanan: Form Kontak -->
        <div class="contact-form">
            <h2>Kirim Pesan</h2>

            <form class="form-kontak" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama kamu" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="email@kamu.com" required>
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" id="subjek" name="subjek" placeholder="Subjek pesan">
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="6" placeholder="Tulis pesanmu di sini..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan →</button>
            </form>
        </div>

    </div>
</main>

<?php get_footer(); ?>