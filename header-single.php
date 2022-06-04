<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PSDC9L9');</script>
    <!-- End Google Tag Manager -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/slyle.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/blog-single-page.css" />
  
     
    <?php wp_head(); ?>
    <title>Dmytro Chelpanov</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSDC9L9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <header class="header">
        <div class="header_logo">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="">
            </a>
        </div>
        <!-- <div> -->
        <ul class="header_menu desc_flex">
            <li><a href="<?php echo home_url() ?>#information" class="strikethrough"><span>Why me?</span></a></li>
            <!-- <li><a href="<?php // echo home_url() ?>#blogHome" class="strikethrough"><span>Why Ukrainian?</span></a></li> -->
            <li><a href="<?php echo home_url() ?>/my-blog" class="strikethrough"><span>Blog</span></a></li>
        </ul>
    
        <div class="button open_subscribe desc">
            <a href="#">subscribe</a>
        </div>
        <div class="header_mob_menu mob_flex">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/menu_icon.png" class="open_menu" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/menu_icon_close.png" class="close_menu none" alt="">
        </div>
    </header>
    <header id="mob_menu" class="mob_menu none">
        <ul class="mob_menu-menu ">
            <li><a href="<?php echo home_url() ?>#information" class=" strikethrough"><span>Why me?</span></a></li>
            <!-- <li><a href="<?php // echo home_url() ?>#blogHome" class=" strikethrough"><span>Why Ukrainian?</span></a></li> -->
            <li><a href="<?php echo home_url() ?>/my-blog" class="strikethrough"><span>Blog</span></a></li>
        </ul>
        <div class="mob_menu-button ">
            <div class="button open_subscribe">
                <a>subdcribe</a>
            </div>
        </div>
    </header>
