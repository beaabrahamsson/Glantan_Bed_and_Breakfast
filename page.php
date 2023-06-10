<?php
    //Include header
    get_header();
    ?>
    </div>
    <div class="wrapper">
    <div class="content">
    <!--Print posts-->
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_title();
            the_content();
        endwhile;
    endif;
    ?>
    </div>
    </div>
    <!--Include footer-->
    <?php
    get_footer(); 
    ?>