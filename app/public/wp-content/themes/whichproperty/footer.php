        <footer>
            <div class="wrapper">
                <div class="socialFooter">
                    <h3>We are Social | <strong>Follow Us</strong></h3>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'social-menu',
                        'container' => false, 
                        'items_wrap' => '<ul>%3$s</ul>',
                    )); /* editable within the Wordpress backend */ ?>
                </div>
                <div class="info">
                    <?php dynamic_sidebar( 'Footer' ); ?>
                </div>
                <a class="logo" href="/">Which Property</a>
            </div>
        </footer>
       
        <!-- Scripts  -->
        <?php wp_footer(); /* this is used by many Wordpress features and for plugins to work proporly */ ?>

        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/js/jquery.bxslider.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/js/jquery.sidr.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo( 'template_url' ); echo '/_templateFiles/js/wp.js?ver=' . filemtime( get_stylesheet_directory() . '/_templateFiles/js/wp.js'); ?>"></script>
    </body>
</html>
