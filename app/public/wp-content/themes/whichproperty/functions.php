<?php

    //Remove stuff from Dashboard
    add_action( 'admin_menu', 'custom_admin_menu' );

    function custom_admin_menu() 
      {
    global $menu;
    /*
      echo '<pre>';
    var_dump($menu); // use this to identify the key for the menu item you want to remove
    echo '</pre>';
    */
//    unset( $menu[5] ); //key 5 is posts
    unset( $menu[15] ); //key 15 is links
    unset( $menu[25] ); //key 25 is comments
    if ( !current_user_can('manage_options') ) { unset( $menu[75] ); } //key 75 is tools ... but only for non super admins
    }

    //Custom login logo
    function custom_login_logo() {
    echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/_templateFiles/images/logo.png) no-repeat !important; background-size:contain !important; }</style>';
    }
    add_action('login_head', 'custom_login_logo');

   /* function change_wp_login_url() {
    echo bloginfo('url');
    }
    add_filter('login_headerurl', 'change_wp_login_url');

    function change_wp_login_title() {
    echo get_option('blogname');
    }
    add_filter('login_headertitle', 'change_wp_login_title');*/


    // remove junk from head    
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
    remove_action('wp_head', 'check_and_publish_future_post');
    remove_action('wp_head', 'wp_print_styles');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );


    //custom header image  	
    //hook the administrative header output
    add_action('admin_head', 'my_custom_logo');

    function my_custom_logo() {
    echo '
      <style type="text/css">
      #header-logo { background-image: url('.get_bloginfo('template_directory').'/_templateFiles/images/logo.png) !important; }
    </style>
      ';
    }

    //kill error message for login
    add_filter('login_errors',create_function('$a', "return null;"));


    // kill the admin nag
    if (!current_user_can('edit_users')) {
    add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));
    }

    // enables wigitized sidebars
    if ( function_exists('register_sidebar') )

    // Sidebar Widget
    // Location: the sidebar
    register_sidebar(array('name'=>'Footer',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      ));
	  
	// Location: widget
    register_sidebar(array('name'=>'Sidebar',
      'before_widget' => '<div class="side">',
      'after_widget' => '</div>',
      ));
	// Location: widget
    register_sidebar(array('name'=>'Hero Image',
      'before_widget' => '',
      'after_widget' => '',
      ));
	// Location: widget
    register_sidebar(array('name'=>'Blog Hero Image',
      'before_widget' => '',
      'after_widget' => '',
      ));

	// Location: widget
    register_sidebar(array('name'=>'Group Home Footer',
      'before_widget' => '<div class="group-footer-item">',
      'after_widget' => '</div>',
      ));
      
    // post thumbnail support
    add_theme_support( 'post-thumbnails' );

    // custom menu support
    add_theme_support( 'menus' );
    if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
      'main-menu' => 'Main Menu',
      'social-menu' => 'Social Menu'
      )
      );
    }

    // custom background support
    add_custom_background();

    // custom header image support
    define('NO_HEADER_TEXT', true );
    define('HEADER_IMAGE', '%s/images/default-header.png'); // %s is the template dir uri
    define('HEADER_IMAGE_WIDTH', 1068); // use width and height appropriate for your theme
    define('HEADER_IMAGE_HEIGHT', 300);
    // gets included in the admin header
    function admin_header_style() {
    ?><style type="text/css">
      #headimg {
    width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
    height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
    }
    </style><?php
    }

    // removes detailed login error information for security
    add_filter('login_errors',create_function('$a', "return null;"));

    // Removes Trackbacks from the comment cout
    add_filter('get_comments_number', 'comment_count', 0);
    function comment_count( $count ) {
    if ( ! is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
    return count($comments_by_type['comment']);
    } else {
    return $count;
    }
    }

    // custom excerpt ellipses for 2.9+
    function custom_excerpt_more($more) {
    return '...';
    }
    add_filter('excerpt_more', 'custom_excerpt_more');
    // no more jumping for read more link
   /*	 function no_more_jumping($post) {
    return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'More'.'</a>';
    }
    add_filter('excerpt_more', 'no_more_jumping'); */

    // category id in body and post class
    function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
      $classes [] = 'cat-' . $category->cat_ID . '-id';
    return $classes;
    }
    add_filter('post_class', 'category_id_class');
    add_filter('body_class', 'category_id_class');
	

	//Google Map		
	function my_acf_google_map_api( $api ){
		
		$api['key'] = 'AIzaSyAP8-wh8KeSetElqNua30Bm_ro9pvFuvbc';
		
		return $api;
		
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
	
// Numbered Pagination
	if ( !function_exists( 'page_pagination' ) ) {
		
		function page_pagination() {
			
			$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
			$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
			
			global $wp_query,$page_query;
			if ( $page_query ) {
			   $total = $page_query->max_num_pages;
			} else {
			   $total = $wp_query->max_num_pages;
			}
			$big = 999999999; // need an unlikely integer
			if( $total > 1 )  {
				 if( !$current_page = get_query_var('paged') )
					 $current_page = 1;
				 if( get_option('permalink_structure') ) {
					 $format = 'page/%#%/';
				 } else {
					 $format = '&paged=%#%';
				 }
				echo paginate_links(array(
					'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> $format,
					'current'		=> max( 1, get_query_var('paged') ),
					'total' 		=> $total,
					'mid_size'		=> 3,
					'type' 			=> 'list',
					'prev_text'		=> '&laquo; prev',
					'next_text'		=> 'next &raquo;',
				 ) );
			}
		}
		
	}
add_filter( 'wp_default_editor', create_function('', 'return "html";') );

?>