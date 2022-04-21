<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (is_home()) : ?>
            <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
        <?php else : ?>
            <?php the_title() ?>
        <?php endif; ?>
    </title>
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="alert alert-success"><?php bloginfo('name')?></div>
            <div><?php bloginfo('description')?></div>
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'menu menu-header'
            ]); ?>
            <hr>
        </div>
    </header>