<?php get_header(); ?>
<section id="home" class="home">
    <div class="home_content">
        <h2 class="h2"><span>Dmytro has been translating:</span></h2>
        <ul>
            <li>
                <h3>Marketing, technical, and legal documentation</h3>
            </li>
            <li>
                <h3>From English into Ukrainian</h3>
            </li>
            <li>
                <h3>For 8+ years</h3>
            </li>
        </ul>
        <div class="button">
            <a href="#contact" class="scroll">contact me</a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/square_2.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/big_home_square.png" class="big_square" alt="">
    </div>
    <div class="home_pictures">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/man.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/letter_1.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/letter_2.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/letter_3.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/letter_4.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/home/square_1.png" alt="">
    </div>
</section>
<section id='information' class="information">
    <div class="information_content">
        <img class="ribbed" src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" alt="">
        <div>
            <h2 class="h2"><span>GOOD TRANSLATION <br>
                    IS NATURAL, NOT SIMPLE</span></h2>
            <div class="mob_flex">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information.jpg" alt="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/contact_square.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
            </div>
            <p>Think about handy contacts in your phone: it may be a plumber who timely came to rescue
                a leaking pipe or an air conditioning guy who answered your call in July.
                You still have their number, because they delivered what you needed and when you needed it,
                again and again. Unlike the others, who boasted years of experience, high quality,
                and big-name clients only to deliver substandard job or ghost you when they are busy.</p>
            <p> Being a client myself, I know how it hurts to get an incompetent service,
                to be put on hold by a busy contractor, or, worse of all, to see your project taken
                as a hostage with constant delays.</p>
        </div>
        <div class="desc_flex">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information.jpg" alt="">
        </div>
    </div>
    <div class="information_title">
        <p class="bold">That’s why I always make sure that:</p>
    </div>
    <div class="information_services">

        <div class="information_services-item">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information/services_1.jpg" alt="">
            <p>I’m competent to handle your project.</p>
        </div>
        <div class="information_services-item">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information/services_2.jpg" alt="">
            <p>I have enough capacity to support your release plan.</p>
        </div>
        <div class="information_services-item">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information/services_3.jpg" alt="">
            <p>I proactively communicate with all stakeholders.</p>
        </div>
        <div class="information_services-item">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information/services_4.jpg" alt="">
            <p>I act as your first customer in Ukrainian (advising on cultural and business issues in the source text).
            </p>
        </div>
        <div class="information_services-item">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/information/services_5.jpg" alt="">
            <p>I create engaging, easy-to-read translation that reads like a native copy.</p>
        </div>
        <div class="information_services-item">
            <p class="bold">It took me 8 years and 3 million words to develop these principles.
                Now I’m ready to hear about your translation project and see how I can help.</p>
        </div>
        <div class="information_services-decoration mob">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blogHome/big_square.png" alt="">
        </div>
    </div>
</section>
<section id="blogHome" class="blogHome">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blogHome/square.png" class="blogHome_figure square" alt="">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blogHome/big_square.png" class="blogHome_figure big_square" alt="">
    <div class="blogHome_header">
        <div class="blogHome_header-content">
            <h2 class="h2"> <span>TOP REASONS TO TRANSLATE INTO UKRAINIAN</span> </h2>
            <p>My blog covers everything related to doing business in Ukraine,
                including market reviews, e-commerce, taxation, and other localization
                specifics as a part of the overall go-to-market.</p>
        </div>
        <div class="blogHome_header-ribbed">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        </div>
    </div>
    <div id="blogHome_footer" class="blog">

        <?php
        global $post;
        $query = new WP_Query([
            'posts_per_page' => 5,
            'orderby'        => 'comment_count',
        ]);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
        ?>
                <div class="blog_item">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="h3"><?php the_title();  ?></h3>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <p><?php the_excerpt() ?></p>
                    </a>
                    <p class="blog_date bold"><?php the_time('d.m.Y'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="strikethrough blog_read"><span>read</span></a>
                </div>
        <?php
            }
        } else {
        }

        wp_reset_postdata();
        ?>
    </div>
    <div id="blogHome_hide" class="blog">
    </div>
    <div class="blogHome_button">
        <div class="button">
            <a>show more</a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
    </div>
</section>
<section id="contact" class="contact">
    <div class="contact_form">
        <h2 class="h2">
            <span>Tell Me About Your Project</span>
        </h2>
        <?php echo do_shortcode('[contact-form-7 id="35 title="Home Form" html_class="form"]'); ?>
    </div>
    <div class="contact_letters">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/contact_square.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/contact_latter_1.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact/contact_latter_2.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_big.png" class="ribbed" alt="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbed_min.png" class="ribbed_min" alt="">
    </div>
</section>
<?php get_footer(); ?>