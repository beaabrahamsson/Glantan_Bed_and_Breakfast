<?php
/*
Template name: Medarbetare
*/
//Include header
get_header(); ?>
<div class="wrapper">
<div class="activity-content">
<!--Print posts-->
<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            <div class="activity-container">
                <div class="activity">
                    <div class="activity-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="activity-text">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?></div>
                    </div>
            </div>
    <?php }
    }
    ?>
    </div>
    </div>
    <!--Include footer-->
    <?php
    get_footer(); 
    ?>