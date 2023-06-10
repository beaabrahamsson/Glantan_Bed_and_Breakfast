<footer>
        <!-- footer widgets-->
        <div class="footer-container">
        <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-7' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer-container">
            <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-8' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer-container">
        <?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-9' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer-container">
        <?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-10' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </footer>
    <script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>