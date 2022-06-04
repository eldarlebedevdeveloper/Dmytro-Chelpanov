<?php get_header('single') ?>


    <div class="page_decoration">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog_single_page/triangle.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog_single_page/suare.png" alt="">
    </div>
    <section class="post">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><span><?php the_title();  ?></span> </h2>
            <?php the_post_thumbnail(); ?>
            <div class='post_content'>
               <p class="bold post_data"><?php the_date('d.m.Y') ?></p>
               <?php the_content() ?>
            </div>
        <?php endwhile; else: ?>
            There are no entries.
        <?php endif; ?>
                
      


        
    </section>
    <section class="postForm">
        <div class="postForm_form">
            <h3>Hi! I hope you’ve enjoyed reading this article. Please, 
                send me a message so we can discuss how I can cover your 
                localization needs for the Ukrainian market. </h3>
            <?php echo do_shortcode('[contact-form-7 id="36 title="Post Form" html_class="form"]'); ?>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" id="postForm_form-ribbed" class="ribbed mob" alt="">
        </div>
        <div class="postForm_picture">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/frame.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/man.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog_single_page/suare.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog_single_page/suare_2.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
        </div>
    </section>
    <section class="navigation">
        <div class="navigation_content">
            <?php previous_post_link('<span class="strikethrough">%link</span>', 'previous article'); ?>
            <?php next_post_link('<span class="strikethrough">%link</span>', 'next article'); ?>
        </div>
        <div class="navigation_button">
            <div class="button"> 
                <a href="<?php echo home_url() ?>/my-blog">blog page</a>
            </div>
        </div>
        
    </section>

    <?php get_footer(); ?>
