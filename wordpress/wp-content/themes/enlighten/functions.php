<?php
/**
 * enlighten functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enlighten
 */

if ( ! function_exists( 'enlighten_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function enlighten_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on enlighten, use a find and replace
	 * to change 'enlighten' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'enlighten', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'enlighten' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

    add_theme_support( 'custom-logo', array(
		'width'       => 259,
		'height'      => 70,
		'flex-width'  => true,
        'flex-height'  => true,
	) );
    
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'enlighten_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
 /**
  * Images size
  */
 add_image_size('enlighten-slider-image',1878,874,true);
 add_image_size('enlighten-portfolio-image','358','276',true);
 add_image_size('enlighten-service-image','49','46',true);
 add_image_size('enlighten-testimonial-image','103','103',true);
 add_image_size('enlighten-client-section','100','100',true);
 add_image_size('enlighten-recent-news','380','400',true);
 add_image_size('enlighten-recent-news-disable-twitter','294','400',true);
 add_image_size('enlighten-footer-recent-news','331','197',true);
 add_image_size('enlighten-single-page','800','385');
 add_image_size('enlighten-message-image','285','204');
/**
 * Custom logo
 **/
}
endif;
add_action( 'after_setup_theme', 'enlighten_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enlighten_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'enlighten_content_width', 640 );
}
add_action( 'after_setup_theme', 'enlighten_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function enlighten_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'enlighten' ),
		'id'            => 'enlighten_sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'enlighten' ),
		'id'            => 'enlighten_sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Home Twitter Feed', 'enlighten' ),
		'id'            => 'enlighten_home_twitter',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Area One', 'enlighten' ),
		'id'            => 'enlighten_footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Area Two', 'enlighten' ),
		'id'            => 'enlighten_footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Area Three', 'enlighten' ),
		'id'            => 'enlighten_footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'enlighten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'enlighten_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function enlighten_scripts() {
    $query_args = array('family' => 'Open+Sans:400,600,700|Raleway:400,600,300,700,400italic,500italic|Titillium+Web:400,300,200,600,400italic|Oswald|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900');
	wp_enqueue_style('enlighten-google-fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"));
	wp_enqueue_style('enlighten-style', get_stylesheet_uri() );
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/fontawesome/css/font-awesome.css');
    wp_enqueue_style('bxslider',get_template_directory_uri().'/js/bxslider/jquery.bxslider.css');
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/js/owl-carousel/owl.carousel.css');
    wp_enqueue_style('enlighten-responsive',get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('superfish',get_template_directory_uri().'/js/superfish/superfish.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/js/wow/animate.css');
    wp_enqueue_style('mb-ytplayer',get_template_directory_uri().'/js/youtube-video/jquery.mb.YTPlayer.css');
    
    wp_enqueue_script('mb-ytplayer',get_template_directory_uri(). '/js/youtube-video/jquery.mb.YTPlayer.js',array('jquery'));
    wp_enqueue_script('superfish',get_template_directory_uri().'/js/superfish/superfish.js',array('jquery'));
    wp_enqueue_script('theia-sticky-sidebar',get_template_directory_uri().'/js/sticky-sidebar/theia-sticky-sidebar.js',array('jquery'));
    wp_enqueue_script('wow',get_template_directory_uri().'/js/wow/wow.js',array('jquery'));
    wp_enqueue_script('hoverintent',get_template_directory_uri().'/js/superfish/hoverIntent.js',array('jquery'));
    wp_enqueue_script('waypoints',get_template_directory_uri().'/js/waypoint/jquery.waypoints.js',array('jquery'));
    wp_enqueue_script('bxslider',get_template_directory_uri().'/js/bxslider/jquery.bxslider.js',array('jquery'),'1.8.2',true);
    wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl-carousel/owl.carousel.js',array('jquery'));
	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('counterup',get_template_directory_uri().'/js/counter-up/jquery.counterup.js',array('jquery'));
    wp_enqueue_script('enlighten-custom-js',get_template_directory_uri().'/js/custom.js',array('jquery','mb-ytplayer','superfish','theia-sticky-sidebar','wow', 'hoverintent','waypoints','bxslider','carousel','counterup'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'enlighten_scripts' );

function enlighten_customize_live_preview(){
    wp_enqueue_script('customize_live_preview',get_template_directory_uri().'/js/customizer-live-preview.js',array( 'jquery','customize-preview' ),true);
    
}
add_action('customize_preview_init','enlighten_customize_live_preview');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer option load
 */
 require get_template_directory().'/inc/admin-panel/enlighten-customizer.php';
 
 /**
  * Enlighten function load
  */
 require get_template_directory().'/inc/enlighten-functions.php';
 /**
 * Implement the Custom Header feature.
 */
 require get_template_directory() . '/inc/custom-header.php';
 /**
  * Enlighten Widget
  */
  require get_template_directory().'/inc/widget/widget-fields.php';
  
  /**
   * Wdget Footer Info
   */
  require get_template_directory().'/inc/widget/footer-info.php';
  /**
   * Widget Recent News
   */
  require get_template_directory().'/inc/widget/recent-news.php'; 
   /**
   * Extra field Load
   */
  require get_template_directory().'/inc/admin-panel/enlighten-extra-field.php';
  /**
   * Dynamic CSS
   */
  require get_template_directory() . '/css/dynamic-css.php';
  /**
   * TGM plugin activation
   */
  require get_template_directory() . '/inc/tgm-plugin-activation.php';
  
  function enlighten_register_required_plugins() {

$plugins = array(
    array(
        'name'      => esc_html__('Accesspress Instagram Feed','enlighten'),
        'slug'      => 'accesspress-instagram-feed',
        'required'  => false,
    ),
    array(
        'name'      => esc_html__('AccessPress Social Share','enlighten'),
        'slug'      => 'accesspress-social-share',
        'required'  => false,
    ),
    array(
        'name'      => esc_html__('Accesspress Pinterest','enlighten'),
        'slug'      => 'accesspress-pinterest',
        'required'  => false,
    ),
    
);

$config = array(
    'id'           => 'enlighten',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to pre-packaged plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => true,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
    'strings'      => array(
        'page_title'                      => esc_html__( 'Install Required Plugins', 'enlighten' ),
        'menu_title'                      => esc_html__( 'Install Plugins', 'enlighten' ),
        'installing'                      => esc_html__( 'Installing Plugin: %s', 'enlighten' ), // %s = plugin name.
        'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'enlighten' ),
        'notice_can_install_required'     => _n_noop(
            'This theme requires the following plugin: %1$s.',
            'This theme requires the following plugins: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_can_install_recommended'  => _n_noop(
            'This theme recommends the following plugin: %1$s.',
            'This theme recommends the following plugins: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_cannot_install'           => _n_noop(
            'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update'            => _n_noop(
            'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
            'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update_maybe'      => _n_noop(
            'There is an update available for: %1$s.',
            'There are updates available for the following plugins: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_cannot_update'            => _n_noop(
            'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_can_activate_required'    => _n_noop(
            'The following required plugin is currently inactive: %1$s.',
            'The following required plugins are currently inactive: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop(
            'The following recommended plugin is currently inactive: %1$s.',
            'The following recommended plugins are currently inactive: %1$s.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'notice_cannot_activate'          => _n_noop(
            'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
            'enlighten'
        ), // %1$s = plugin name(s).
        'install_link'                    => _n_noop(
            'Begin installing plugin',
            'Begin installing plugins',
            'enlighten'
        ),
        'update_link'                     => _n_noop(
            'Begin updating plugin',
            'Begin updating plugins',
            'enlighten'
        ),
        'activate_link'                   => _n_noop(
            'Begin activating plugin',
            'Begin activating plugins',
            'enlighten'
        ),
        'return'                          => esc_html__( 'Return to Required Plugins Installer', 'enlighten' ),
        'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'enlighten' ),
        'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'enlighten' ),
        'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'enlighten' ),  // %1$s = plugin name(s).
        'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'enlighten' ),  // %1$s = plugin name(s).
        'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'enlighten' ), // %s = dashboard link.
        'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'enlighten' ),

        'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    )
);

tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'enlighten_register_required_plugins' );