<?php
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_action( 'init', 'register_my_menus' );
       function register_my_menus() {
           register_nav_menus(
               array(
                   'header_menu' => __( 'Primary Menu' ),
               )
           );
       }
    /**
    * Change style.css default folder
    * from 'theme/' to 'theme/css/' 
    **/
    add_filter('stylesheet_directory_uri','stylesheet_directory_uri', 10, 2);
        function stylesheet_directory_uri($stylesheet_dir_uri, $stylesheet) {
        // On ajoute notre dossier
        return $stylesheet_dir_uri.'/css';
     
    }
    /**
    * Automatically add CSS files in the header
    * with wp_header() function
    **/
    add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
        function gkp_insert_css_in_head() {
        // On ajoute le css general du theme
        wp_register_style('reset',    get_bloginfo( 'template_directory' ).'/css/'.'reset.css',   '',false,'all');
        wp_register_style('grid_480',  get_bloginfo( 'template_directory' ).'/css/'.'grid_480.css', '',false,'screen and (max-width: 960px)');
        wp_register_style('grid_960',  get_bloginfo( 'template_directory' ).'/css/'.'grid_960.css', '',false,'screen and (max-width: 1440px) and (min-width: 960px)');
        wp_register_style('grid_1440', get_bloginfo( 'template_directory' ).'/css/'.'grid_1440.css','',false,'screen and (min-width: 1440px)');
        wp_register_style('text',      get_bloginfo( 'template_directory' ).'/css/'.'text.css',     '',false,'all');
        wp_register_style('app',       get_bloginfo( 'template_directory' ).'/css/'.'app.css',      '',false,'all');
        wp_register_style('small',     get_bloginfo( 'template_directory' ).'/css/'.'small.css',    '',false,'screen');
        wp_enqueue_style( 'reset' );
        wp_enqueue_style( 'grid_480' );
        wp_enqueue_style( 'grid_960' );
        wp_enqueue_style( 'grid_1440' );
        wp_enqueue_style( 'text' );
        wp_enqueue_style( 'app' );
        wp_enqueue_style( 'small' );
    }
    /**
    * Automatically add JS files in the footer
    * with wp_footer() function
    **/
    add_action('init', 'insert_js_in_footer');
    function insert_js_in_footer() {
    // Check if in admin
    if( !is_admin() ) :
        // Cancel Wordpress JQuery version
        wp_deregister_script( 'jquery' );
        // Insert own JS files
        wp_register_script('app', get_bloginfo( 'template_directory' ).'/js/app.js','',false,true);
        wp_register_script('jquery', get_bloginfo( 'template_directory' ).'/js/jquery-1.9.1.min.js','',false,true);
        wp_register_script('carousel', get_bloginfo( 'template_directory' ).'/js/jquery.jcarousel.min.js','',false,true);
        wp_register_script('small', get_bloginfo( 'template_directory' ).'/js/small.js','',false,true);
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'carousel' );
        wp_enqueue_script( 'app' );
        wp_enqueue_script( 'small' );
    endif;
    }
    /**
    * Display a carousel using jCarousel syntaxe
    **/
    function get_carousel() {
        wp_reset_query();
        $category_id = 1; // Assuming that the category number of "Featured Gallery" is 1. Change the category ID when needed.
        $limit = 6; // Number of posts to be shown at a time.
        query_posts('showposts=' . $limit);
        ?>
        <ul id="carousel" class="carousel">
            <?php while (have_posts()) : the_post(); ?>
                <?php
                    if( has_post_thumbnail()){
                        ?>
                        <li>
                            <?php the_post_thumbnail('full'); ?>
                            <!-- <img src="<?php echo $img; ?>" alt="" /> -->
                            <div class="title">
                                <a href="<?php the_permalink(); ?>"><h3><?php  the_title() ?></h3></a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>
                        <?php } ?>
            <?php endwhile; ?>
        </ul>
        <a id="carousel-prev" class="carousel-nav" href="#">&lt;</a>
        <a id="carousel-next" class="carousel-nav" href="#">&gt;</a>
        <?php wp_reset_query();
    }
    /**
    * Hook to remove the '[...]' after excerpt
    **/
    function new_excerpt_more( $more ) {
        return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function get_carousel_controls() {
        wp_reset_query();
        $category_id = 1; // Assuming that the category number of "Featured Gallery" is 1. Change the category ID when needed.
        $limit = 6; // Number of posts to be shown at a time.
        query_posts('showposts=' . $limit);
        $i=1;
        ?>
        <ul id="carousel-control">
            <?php while (have_posts()) : the_post(); ?>
                <?php
                    if( has_post_thumbnail()){
                        ?>
                        <li><a class= "grid_1" href="#" data-value="<?php echo $i++; ?>">
                                <?php the_post_thumbnail(array(65,65), array('class' => "grid_1")); ?>
                            </a>
                        </li>
                        <?php } ?>
            <?php endwhile; ?>
        </ul>
        <?php wp_reset_query();
    }
?>