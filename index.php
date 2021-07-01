<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/wow.js/css/libs/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css">
</head>
<body>

    <?php get_header()?>
    

<div class="wrapper">
    <div class="content">

        <div class="intro">
            <div class="text__cont wow slideInLeft">
                <h3 class="top__title">Organise projects.<br>Get more done.</h3>
                <a href="#" class="main__button">Get Started</a>
            </div>
            <div class="img__cont">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/iphone.png" alt="" class="phone__img">
            </div>

            <div class="circle__violet"></div>
            <div class="circle__blue"></div>
        </div>



        



    </div>
    <div class="shapes ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/left.png" alt="" class="left ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/right.png" alt="" class="right ">
        </div>
    <div class="rect">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/rect2.png" alt="" class="after__intro">
        
        <div class="test">
            

                    <script>
                		var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                		var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 0; ?>;
                		var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                	</script>	
                <div id="true_loadmore" class="load__button">Загрузить посты про фильмы</div>

        </div>
    </div>

    
    
</div>
<?php get_footer()?>




    <script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/node_modules/wow.js/dist/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/hamburger.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/load.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/wow.js"></script>


</body>
</html>