<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> | <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> | <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- leave this for stats -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <?php //wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
</head>
<body>
    <section class="container">
    <!-- <header class="navbar">
        <div class="span3">
            <div class="span1">
                <img src="http://www.gravatar.com/avatar/<?php echo md5('johan.soulet@gmail.com') ?>" alt="Gravatar" />
            </div>
            <div class="span2 alpha omega">
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <em><?php bloginfo('description'); ?></em>
            </div>
        </div>
        <nav class="span5 omega nav">
            <?php wp_nav_menu( array('theme_location'  => 'header_menu',
                                     'menu_class' => 'nav-list',
                                     'container'=> 'ul',
                                     'items_wrap' => '<ul class="nav-list">%3$s</ul>'));?>
        </nav>
        <div class="span4 alpha omega search">
            <?php get_search_form(); ?>
        </div>
    </header>
    <div class="clear"> </div> -->


    <header class="navbar">
        <div class="navbar-inner">
            <div class="row">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                     
                    <!-- Be sure to leave the brand out there if you want it shown -->

                    <a href="<?php bloginfo('url'); ?>" class="span3 logo">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5('johan.soulet@gmail.com') ?>" alt="Gravatar" class="float-left img-circle"/>
                        <div class="float-left">    
                            <h1><?php bloginfo('name'); ?></h1>
                            <em><?php bloginfo('description'); ?></em>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                     
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <div class="span6">
                            <?php wp_nav_menu( array('theme_location'  => 'header_menu',
                                             'menu_class' => 'nav-list',
                                             'items_wrap' => '<ul class="nav">%3$s</ul>'));?>
                        </div>
                        <?php get_search_form(); ?>                                     
                    <!-- .nav, .navbar-search, .navbar-form, etc -->
                    </div>
            </div>
        </div>
    </header>
