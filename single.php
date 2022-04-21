<?php get_header() ?>
<main>
    <div class="container">
        <div class="row">
        <?php the_post() ?>
        <?php the_date('j F Y') ?>
        <h3><?php the_title() ?></h3>
        <div><?php the_content() ?></div>
        </div>        
    </div>
</main>
<?php get_footer() ?>