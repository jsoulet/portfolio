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
        wp_register_style('bootstrap',  get_bloginfo( 'template_directory' ).'/css/'.'bootstrap.min.css',            '',false,'all');
        wp_register_style('responsive', get_bloginfo( 'template_directory' ).'/css/'.'bootstrap-responsive.min.css', '',false,'all');
        wp_register_style('app',        get_bloginfo( 'template_directory' ).'/css/'.'app.css',                      '',false,'all');
        wp_register_style('small',      get_bloginfo( 'template_directory' ).'/css/'.'small.css',    '',false,'screen');
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'responsive' );
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
        wp_register_script('bootstrap', get_bloginfo( 'template_directory' ).'/js/bootstrap.min.js','',false,true);
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'app' );
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
        <div id="mainCarousel" class="carousel slide">
            <div class="carousel-inner">
                <?php $index=0; ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if( has_post_thumbnail()){
                            ?>
                            <div class="item <?php if($index++==0) echo 'active'; ?>">
                                <?php the_post_thumbnail('full'); ?>
                                <a href="<?php the_permalink(); ?>" class="carousel-caption">
                                    <h3><?php  the_title() ?></h3>
                                    <?php the_excerpt(); ?>
                                </a>
                                    
                            </div>
                            <?php } ?>
                <?php endwhile; ?>
            </div>
            <a class="carousel-control left" href="#mainCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#mainCarousel" data-slide="next">&rsaquo;</a>
        </div>
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
        ?>
        <div class="row-fluid">
            <ul class="carousel-thumbnails span12">
                <?php $index=0; ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if( has_post_thumbnail()){
                            if($index%3 == 0)
                                echo '<div class="row-fluid">';
                            ?>
                            <li><a class= "span4" href="#" data-target="#mainCarousel" data-slide-to="<?php echo $index; ?>">
                                    <?php the_post_thumbnail(array(65, 65)); ?>
                                </a>
                            </li>
                            <?php 
                            if($index%3 == 2)
                                echo '</div>';
                            $index++;
                        } ?>
                <?php endwhile; ?>
                <?php 
                    if($index%3 != 0)
                        echo '</div>';
                ?>
                    
            </ul>
        </div>
        <?php wp_reset_query();
    }

    if ( function_exists('register_sidebar') )
        register_sidebar(array(
            'name' => __( 'Sidebar'),
            'id' => '1',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __( 'Bottom left'),
            'id' => '2',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __( 'Bottom right'),
            'id' => '3',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __( 'Over slider controls'),
            'id' => '4',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));

    /*
    * New thumbnail size
    */
    add_image_size( 'square', 270, 270, true); // name, width, height, crop 
    add_filter('image_size_names_choose', 'my_image_sizes');
    function my_image_sizes($sizes) {
        $addsizes = array(
            "square" => __( "Large square image"));
        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
    }


//     include_once( ABSPATH . 'wp-admin/includes/image.php' );
// function regenerate_all_attachment_sizes() {
//     $args = array( 'post_type' => 'attachment', 'numberposts' => 100, 'post_status' => null, 'post_parent' => null, 'post_mime_type' => 'image' ); 
//     $attachments = get_posts( $args );
//     if ($attachments) {
//         foreach ( $attachments as $post ) {
//             $file = get_attached_file( $post->ID );
//             wp_update_attachment_metadata( $post->ID, wp_generate_attachment_metadata( $post->ID, $file ) );
//         }
//     }       
// }
// regenerate_all_attachment_sizes();
?>