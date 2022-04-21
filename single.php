<?php get_header() ?>
<?php 
    $sidebarId = 'sidebar-post-single';
    $isSidebar = is_active_sidebar($sidebarId);
    $mainClasses = $isSidebar ? 'col-md-9' : '';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col col-12 <?php echo $mainClasses ?>">
                <?php the_post() ?>
                <?php the_date('j F Y') ?>
                <h3><?php the_title() ?></h3>
                <div><?php the_content() ?></div>
                <div><?php the_tags() ?></div>
            </div>
            <?php if ($isSidebar) : ?>
            <div class="col col-12 col-md-3">
                <?php dynamic_sidebar($sidebarId); ?>
            </div>
            <?php endif; ?>
        </div>        
    </div>
</main>
<?php get_footer() ?>