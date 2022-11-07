<?php get_header() ?>
    <section class="full-post-wrapper">
        <h1 class="post-title"><?php the_title() ?></h1>
        <div class="post-thumbnail-wrapper">
            <?php the_post_thumbnail() ?>
        </div>
        <div class="post-content">
            <?php the_content() ?>
        </div>
        <div class="full-post-metadata">
            <div class="full-post-author"><?php the_author() ?></div>
            <div class="full-post-date"><?php the_date() ?></div>
        </div>
        <section class="comments-wrapper">
            <?php comments_template() ?>
        </section>
    </section>
<?php get_footer() ?>