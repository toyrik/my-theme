<?php get_header() ?>
<main>
    <div class="container">
        <div class="row">
            <?php while(have_posts()) :
                the_post();
                ?>
            <div class="col col-4">
                <h3><?php the_title() ?></h3>
                <div><? the_time('j F Y') ?></div>
                <a href="<?php the_permalink() ?>">Далее</a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</main>
<?php get_footer() ?>