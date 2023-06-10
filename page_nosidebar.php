<?php
/*
Template name: Standard utan sidebar
*/
    get_header();
    ?>
    <!--Print posts-->
    <div class="content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
    </div>
    <!--Include footer-->
    <?php
    get_footer(); 
    ?>