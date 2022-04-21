<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="alert alert-success"><?php bloginfo('name')?></div>
            <div><?php bloginfo('description')?></div>
            Шапка
            <hr>
        </div>
    </header>