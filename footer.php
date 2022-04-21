    <footer>
        <div class="container">
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