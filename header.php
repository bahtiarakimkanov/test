<header class="header">
    <div class="header__cont">

        <a href="<?php echo home_url() ?>" class="logo__cont">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/header__logo.png" alt="" class="logo__cont_img">
        </a>

        <nav class="header__nav">
                <?php   wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container' => 'null',
                        'menu_class' => 'header__nav_ul', 
                        'menu_id'   => 'header__nav_ul',

                    ))?>
        </nav>

        <div class="header__apps__cont">
            <a href="#" class="apps__link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/google.png" alt="" class="apps__img">
            </a>
            <a href="#" class="apps__link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/apple.png" alt="" class="apps__img">
            </a>
        </div>

        <button class="hamburger hamburger--vortex" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
    </div>
</header>