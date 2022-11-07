<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>
<header class="flex padding-section kironews-header" id="kironews-header">
    <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>" class="logo"/>
    <?php wp_nav_menu(); ?>
</header>


