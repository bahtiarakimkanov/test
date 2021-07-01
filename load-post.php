<?php 

define('WP_USE_THEMES', false);
require_once(__DIR__.'/wp-load.php');

$posts_per_page = (isset($_GET['posts_per_page'])) ? $_GET['posts_per_page'] : 0;
$paged = (isset($_GET['paged'])) ? $_GET['paged'] : 0;

query_posts(array(
    'posts_per_page' => $posts_per_page,
    'paged'          => $page
));

if (have_posts()) {
    while (have_posts()){
        the_post();
        ?>
        <h3 class="title"><?php the_title()?></h3>
    <?php
    }
}
wp_reset_query();




?>