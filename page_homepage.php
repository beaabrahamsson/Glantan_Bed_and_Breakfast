<?php 
/*
Template name: Startsida
*/
//Include header
get_header(); ?>
      <main>
          <!--button widgets-->
        <div class="main-buttons">
            <div class="button">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <div class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
            <?php endif; ?>
            </div>
            <div class="button">
            <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                <div class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <!--widgets for news-->
        <div class="front-widgets">
            <div class="widget">
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="widget">
                <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-5' ); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="widget">
                <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-6' ); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
      </main>
<?php 
//Include footer
get_footer(); ?>