<?php
/*
Template name: Nyheter
*/
//Include header
get_header();
?>
<div class="wrapper">
<div class="content">
<!--Print posts-->
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <div class="news-container">
        <div class="news">
        <p class="date"><?php echo get_the_date();?></p>
        <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">Läs mer »</a></p></div>
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        </div>
        <br><hr class="news-divide">
<?php }
}
?>
</div>
<!--Include sidebar-->
<?php
get_sidebar();
?>
</div>
<!--Include footer-->
<?php
get_footer(); 
?>