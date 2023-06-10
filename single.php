    <!--Include header-->
    <?php
    get_header();
    ?>
    <!--Article/news-->
    <div class="article-container">
    <div class="article">
    <!--Print posts-->
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            <?php
            //Only show date for category "nyheter"
            if(in_category('Nyheter')) { ?>
                <p class="date"><?php the_date(); ?></p>
            <?php }
            ?><h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <?php the_post_thumbnail(); ?>
        </div>
        <?php }
    }
    ?>
    <!--Include footer-->
    <?php
    get_footer(); 
    ?>
</body>
</html>