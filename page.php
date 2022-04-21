<?php get_header() ?>
<main>
    <div class="container">
        <div class="row">
        <?php the_post() ?>
        <h3><?php the_title() ?></h3>
        <div><?php the_content() ?></div>
        </div>        
    </div>
</main>
<?php get_footer() ?>