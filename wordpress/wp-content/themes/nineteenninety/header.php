<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
 
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
 
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" media="all" href="css/reset.css" />
    <link rel="stylesheet" media="screen and (max-width: 960px)" href="css/grid_480.css" />
    <link rel="stylesheet" media="screen and (max-width: 1440px) and (min-width: 960px)" href="css/grid_960.css" />
    <link rel="stylesheet" media="screen and (min-width: 1440px)" href="css/grid_1440.css" />
    <link rel="stylesheet" media="all" href="css/text.css" />
    <link rel="stylesheet" media="all" href="css/app.css" />
    <link rel="stylesheet" media="all" href="css/small.css" /> -->
 
</head>
<body>
    <header class="container_12">
        <div class="grid_2 alpha logo">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <em><?php bloginfo('description'); ?></em>
        </div>
        <nav class="grid_6 omega nav">
            <ul class="nav-list">
              <li class="nav-item"><a href="#">Home</a></li>
              <li class="nav-item"><a href="#">Resume</a></li>
              <li class="nav-item"><a href="#">Portfolio</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="grid_4 alpha omega search">
            <label for="search_bar">Search:</label>
            <input id="search_bar" name="search_bar" type="text" placeholder="Keywords..."/>
            <input type="button" value="s" class="search_btn" />
        </div>
    </header>
    <div class="clear"> </div>
