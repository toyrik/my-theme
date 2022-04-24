<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo MYTHEME_DIR_IMG ?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo MYTHEME_DIR_IMG ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo MYTHEME_DIR_IMG ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo MYTHEME_DIR_IMG ?>favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo MYTHEME_DIR_IMG ?>favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- end favicon -->


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
            <div class="alert alert-success">
                <div class="row align-items-center">
                    <div class="col col-md-3">
                        <div class="logo">
                            <?php the_custom_logo()?>
                        </div>
                    </div>
                    <h1 class="col">
                        <?php bloginfo('name')?>
                    </h1>
                </div>
            </div>
            <div><?php bloginfo('description')?></div>
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'menu menu-header'
            ]); ?>
            <hr>
        </div>
    </header>