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

        <!-- Kolom Kanan: Form dari Plugin -->
        <div class="contact-form">
            <?php echo do_shortcode('[iki_contact_form]'); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>