<!--Sidebar-->
<div class="sidebar">
    <!--Include searchform-->
    <?php get_search_form(); ?>
    <!--Widget-->
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php endif; ?>
        <?php
    ?>

    </div>