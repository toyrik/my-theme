    <footer>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col col-4">
                <?php if (is_active_sidebar('sidebar-footer-left')) : ?>
                    <?php dynamic_sidebar('sidebar-footer-left'); ?>
                <?php endif; ?>
                </div>
                <div class="col col-4">
                <?php if (is_active_sidebar('sidebar-footer-center')) : ?>
                    <?php dynamic_sidebar('sidebar-footer-center'); ?>
                <?php endif; ?>
                </div>
                <div class="col col-4">
                <?php if (is_active_sidebar('sidebar-footer-right')) : ?>
                    <?php dynamic_sidebar('sidebar-footer-right'); ?>
                <?php endif; ?>
                </div>
            </div>
            <hr>
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'menu menu-header'
            ]); ?>
        </div>
    </footer>
    <?php wp_footer() ?>    
</body>
</html>