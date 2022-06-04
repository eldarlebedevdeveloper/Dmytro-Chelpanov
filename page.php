<?php get_header('page') ?>



         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><span><?php the_title();  ?></span> </h2>
            <?php the_post_thumbnail(); ?>
            <p class="bold post_data"><?php the_date('d.m.Y') ?></p>
            <?php the_content() ?>
        <?php endwhile; else: ?>
            <p>Empty page</p>
        <?php endif; ?>



<?php get_footer(); ?>
