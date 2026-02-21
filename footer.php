<footer class="site-footer">
    <div class="container">

        <!-- Menu Footer -->
        <nav class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-footer',
                'menu_class'     => 'footer-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <!-- Copyright -->
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>.
                All Rights Reserved.
            </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>