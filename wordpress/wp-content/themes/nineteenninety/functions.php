<?php
    add_filter('stylesheet_directory_uri','gkp_stylesheet_directory_uri', 10, 2);
        function gkp_stylesheet_directory_uri($stylesheet_dir_uri, $stylesheet) {
        // On ajoute notre dossier
        return $stylesheet_dir_uri.'/css';
     
    }

    add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
        function gkp_insert_css_in_head() {
        // On ajoute le css general du theme
        wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
        wp_register_style('app', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
        wp_enqueue_style( 'style' );
    }
?>