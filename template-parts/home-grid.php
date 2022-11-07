<section class="single-post">
    <div class="thumbnail"><?php echo get_the_post_thumbnail() ?></div>
    <a href="<?php the_permalink() ?>"><h3 class="post-title"><?php the_title() ?></h3></a>
    <!-- <?php the_excerpt() ?> -->
    <div class="post-metadata">
        <span><?php the_date() ?></span>
        <a href="<?php get_the_author_link() ?>"><span><?php the_author() ?></span></a>
    </div>
</section>