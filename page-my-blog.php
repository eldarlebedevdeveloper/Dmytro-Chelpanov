<?php get_header('page') ?>
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
    <div id="blogHeader_posts_mob" class="blog mob">
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
                    <h3 class="h3"><?php the_title();  ?></h3>
                    <p><?php the_excerpt() ?></p>
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
</section>
<section class="blogForm">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog/triangle.png" alt="">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog/triangle_2.png" alt="">
    <h2>Subscribe to our newsletter </h2>
    <p>I’m 100% committed to protecting your privacy and will use your <br class="desc">
        information only to provide you with the relevant content. You can <br class="desc"> unsubscribe at any time.
    </p>
    <?php echo do_shortcode('[contact-form-7 id="65" title="Subscribe" html_class="subscribeform"]'); ?>
</section>
<section class="blogFooter">
    <div id="blogFooter_posts" class="blog">
    </div>
</section>
<script>
    addBlogItmem()

    function addBlogItmem() {
        document.querySelectorAll('#blogHeader_posts .blog_item').forEach((post, index) => {
            if (index > 1) {
                document.querySelector('#blogFooter_posts').appendChild(post)
            }
        });
    }
</script>
<?php get_footer(); ?>