<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/slyle.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/blog.css" />
    <?php wp_head(); ?>
    <title>Dmytro Chelpanov</title>
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <a href="index.html">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="">
            </a>
        </div>
        <ul class="header_menu desc_flex">
            <li><a href="index.html#information" class="strikethrough"><span>Why me?</span></a></li>
            <li><a href="index.html#blogHome" class="strikethrough"><span>Why Ukrainian?</span></a></li>
            <li><a href="blog.html" class="strikethrough"><span>Blog</span></a></li>
        </ul>
        <div class="header_mob_menu mob_flex">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/menu_icon.png" class="open_menu" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/menu_icon_close.png" class="close_menu none" alt="">
        </div>
    </header>
    <header id="mob_menu" class="mob_menu none">
        <ul class="mob_menu-menu ">
            <li><a href="index.html#information" class=" strikethrough"><span>Why me?</span></a></li>
            <li><a href="index.html#blogHome" class=" strikethrough"><span>Why Ukrainian?</span></a></li>
            <li><a href="blog.html" class="strikethrough"><span>Blog</span></a></li>
        </ul>
        <div class="mob_menu-button ">
            <div class="button open_subscribe">
                <a>subdcribe</a>
            </div>
        </div>
    </header>
    <section class="blogHeader">
        <div class="blog_header">
            <h2><span>blog</span></h2>
            <p>My blog covers everything related to doing business in Ukraine,
                including market reviews, e-commerce,<br> taxation, and other localization
                specifics as a part of the overall go-to-market.</p>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog/square.png" alt="">
        </div>
        <div id="blogHeader_posts" class="blog desc_grid">
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
        </div>
        <div id="blogHeader_posts_mob" class="blog mob">
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
        </div>
    </section>

    <section class="blogForm">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog/triangle.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog/triangle_2.png" alt="">
        <h2>Subscribe to our newsletter </h2>
        <p>I’m 100% committed to protecting your privacy and will use your <br class="desc">
            information only to provide you with the relevant content. You can <br class="desc"> unsubscribe at any
            time.</p>
        <form action="" class="form">
            <input type="text" name="mail" placeholder="E-mail">
            <div class="button">
                <button>subscribe</button>
            </div>
        </form>
    </section>
    <section class="blogFooter">
        <div id="blogFooter_posts" class="blog">
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
            <div class="blog_item">
                <a href="blog-single-page.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog.png" alt=""></a>
                <h3 class="h3">The Ukrainian e-commerce 101: an overview and the issue of currency</h3>
                <p>This is going to be a long-running series correcting some of the most common
                    misconceptions that I have encountered through my work, so if you enjoy this
                    part or are curious about other specifics of the Ukrainian e-commerce.....</p>
                <p class="blog_date bold">15.09.2021</p>
                <a href="blog-single-page.html" class="strikethrough"><span>read</span></a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>