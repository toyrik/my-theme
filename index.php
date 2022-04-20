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
            <div class="alert alert-success"><?php bloginfo()?></div>
            <div><?php bloginfo('description')?></div>
            Шапка
            <hr>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php while(have_posts()) :
                    the_post();
                    ?>
                <div class="col col-4">
                    <h3><?php the_title() ?></h3>
                    <a href="<?php echo get_permalink() ?>">Далее</a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <hr>
            Футер
        </div>
    </footer>
    
</body>
</html>