<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php
    /*
    * Print the <title> tag based on what is being viewed.
    */
    global $page, $paged;
    
    wp_title( '|', true, 'right' );
    
    // Add the blog name.
    bloginfo( 'name' );
    
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
    
    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
    
    ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700" rel="stylesheet">	

    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/_templateFiles/css/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/_templateFiles/css/jquery.sidr.dark.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); echo '/_templateFiles/css/wp.css?ver=' . filemtime( get_stylesheet_directory() . '/_templateFiles/css/wp.css'); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); echo '/_templateFiles/css/wpResponsive.css?ver=' . filemtime( get_stylesheet_directory() . '/_templateFiles/css/wpResponsive.css'); ?>" media="screen" />
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/_templateFiles/css/ie8.css" rel="stylesheet" media="screen" />
    <![endif]-->
        
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/js/jquery.1.12.4.js"></script> 

    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />

    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
        
        
   <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9950056-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'UA-9950056-1');

</script>

</head>

<body <?php body_class(); ?>>

        <header>
            <a class="sideMenu" href="#sidr-main"><span></span><span></span><span class="last"></span></a>
            <div class="logo">
                <a href="/">Which Property</a>
            </div>
			<?php wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container' => false, 
                'items_wrap' => '<div class="menu"><ul>%3$s</ul></div>',
            )); /* editable within the Wordpress backend */ ?>
        </header>

