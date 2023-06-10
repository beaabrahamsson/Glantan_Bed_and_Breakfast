<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/styles.css">
    <script src="https://kit.fontawesome.com/a4edee1373.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <title><?php bloginfo('name');?></title>
</head>
<body <?php if ( is_front_page() ) { body_class(); }?>>
    <div class="logo"> 
        <?php 
        //get logo
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
    }              ?>
    </div>
    <div class="topnav">
        <?php wp_nav_menu(); ?>
    </div>
    <div class="mobile-nav">
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
            <i class="fas fa-bars fa-2xl"></i>
        </a>
        <?php
            /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
        if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
            wp_nav_menu( array(
            'depth' => 6,
            'sort_column' => 'menu_order',
            'container' => 'ul',
            'menu_id' => 'main-nav',
            'menu_class' => 'nav mobile-menu',
            'theme_location' => 'mobile-menu'
            ) );
            } else {
            echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
        } ?>
    </div>