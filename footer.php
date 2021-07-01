<footer class="footer">
    <div class="footer__cont">
        <div class="navigation">
            <a href="#" class="logo__cont">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/logo.png" alt="" class="logo__img">
            </a>
            <nav class="footer__nav_custom">
                <?php   wp_nav_menu(array(
                        'theme_location' => 'bottomCustom',
                        'container' => 'null',
                        'menu_class' => 'footer__nav_ul_custom', 
                        'menu_id'   => 'footer__nav_ul_custom',

                    ))?>
            </nav>
            <nav class="footer__nav_standart">
                <?php   wp_nav_menu(array(
                        'theme_location' => 'bottom',
                        'container' => 'null',
                        'menu_class' => 'footer__nav_ul', 
                        'menu_id'   => 'footer__nav_ul',

                    ))?>
            </nav>
            <p class="rights">© 2020 Landify UI Kit. All rights reserved</p>
        </div>
        <div class="app__cont">
            <h3 class="apps__title">Get the App</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/google.png" alt="" class="apps__icons">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/apple.png" alt="" class="apps__icons">
        </div>
    </div>
</footer>