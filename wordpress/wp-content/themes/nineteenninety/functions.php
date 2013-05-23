<?php
    add_theme_support( 'menus' );
    add_action( 'init', 'register_my_menus' );
       function register_my_menus() {
           register_nav_menus(
               array(
                   'header_menu' => __( 'Primary Menu' ),
               )
           );
       }
    add_filter('stylesheet_directory_uri','gkp_stylesheet_directory_uri', 10, 2);
        function gkp_stylesheet_directory_uri($stylesheet_dir_uri, $stylesheet) {
        // On ajoute notre dossier
        return $stylesheet_dir_uri.'/css';
     
    }

    add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
        function gkp_insert_css_in_head() {
        // On ajoute le css general du theme
        wp_register_style('resset', 'resset.css','',false,'all');
        wp_register_style('grid_480', get_bloginfo( 'template_directory' ).'/css/'.'grid_480.css','',false,'screen and (max-width: 960px)');
        wp_register_style('grid_960', get_bloginfo( 'template_directory' ).'/css/'.'grid_960.css','',false,'screen and (max-width: 1440px) and (min-width: 960px)');
        wp_register_style('grid_1440', get_bloginfo( 'template_directory' ).'/css/'.'grid_1440.css','',false,'screen and (min-width: 1440px)');
        wp_register_style('text', get_bloginfo( 'template_directory' ).'/css/'.'text.css','',false,'all');
        wp_register_style('app', get_bloginfo( 'template_directory' ).'/css/'.'app.css','',false,'all');
        wp_register_style('small', get_bloginfo( 'template_directory' ).'/css/'.'small.css','',false,'screen');
        wp_enqueue_style( 'resset' );
        wp_enqueue_style( 'grid_480' );
        wp_enqueue_style( 'grid_960' );
        wp_enqueue_style( 'grid_1440' );
        wp_enqueue_style( 'text' );
        wp_enqueue_style( 'app' );
        wp_enqueue_style( 'small' );
    }

    add_action('init', 'gkp_insert_js_in_footer');
        function gkp_insert_js_in_footer() {
         
        // On verifie si on est pas dans l'admin
        if( !is_admin() ) :
         
        // On annule jQuery installer par WordPress (version 1.4.4
        wp_deregister_script( 'jquery' );
         
        // On insere le fichier de ses propres fonctions javascript
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
?>