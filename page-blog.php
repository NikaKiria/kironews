<?php
get_header();
?>
<main>
    <section class="posts-wrapper">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    get_template_part('/template-parts/home', 'grid');
                }
            }
        ?>
    </section>
</main>
<?php
get_footer();
?>