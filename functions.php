<?php
/**
 * itsUgyen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package itsUgyen
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}
function itsugyen_setup() {
	load_theme_textdomain( 'itsugyen', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'itsugyen' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'itsugyen_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'itsugyen_setup' );
function itsugyen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'itsugyen_content_width', 640 );
}
add_action( 'after_setup_theme', 'itsugyen_content_width', 0 );
function itsugyen_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'itsugyen' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'itsugyen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'itsugyen_widgets_init' );
function itsugyen_scripts() {
	wp_enqueue_style( 'itsugyen-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'itsugyen-style', 'rtl', 'replace' );

	wp_enqueue_script( 'itsugyen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itsugyen_scripts' );
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//image sizes.....
add_image_size('item_image', 300, 300, true);
add_image_size('post_image_xs', 100, 90, true);
add_image_size('post_image_s', 240, 186, true);
add_image_size('widget_right_thumbnail', 232, 123, true);
add_image_size('post_image_m', 263, 175, true);
add_image_size('post_image_l', 387, 242, true);
add_image_size('post_image_xl', 774, 484, true);
add_image_size('post_feat_xl', 1090, 521, true);
add_image_size('feature_galleries', 1090, 521, true);

function itsugyen_main_scripts() {
	wp_enqueue_style( 'itsugyen-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.css' );
	wp_enqueue_style( 'mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'colorfull', get_template_directory_uri() . '/assets/colors/colorfull.css' );
	
	wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery.mCustomScrollbar.concat.min', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery.countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'stellarnav.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'itsugyen', get_template_directory_uri() . '/assets/js/itsugyen.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'itsugyen_main_scripts' );


require_once __DIR__ . '/library/CMB2/init.php';

add_action('cmb2_admin_init', 'page_meta');
function page_meta() {
      $cmb = new_cmb2_box(array(
          'id' => 'page',
          'title' => __('More Info:', 'ugyen'),
          'object_types' => array('page'),
          'context' => 'normal',
          'priority' => 'high',
          'show_names' => true,
          'closed' => false,

      ));

      $cmb->add_field(array(
      'name' => 'Post Title',
      'desc' => 'Add the title of profession.',
      'id'   => 'position_title',
      'type' => 'text',
      ));

      $cmb->add_field(array(
      'name' => 'Intro',
      'desc' => 'Add self intro.',
      'id'   => 'intro_part',
      'type' => 'textarea_code',
      ));
          
      ;$cmb->add_field( array(
        'name'    => 'Profile Banner',
        'desc'    => 'Add image to show on intro part.',
        'id'      => 'intro_banner',
		'type'    => 'file',
		'options' => array(
			'url' => false, 
		),
		    'text'    => array(
			'add_upload_file_text' => 'Add Banner' 
			),
			'query_args' => array(
					'type' => array(
						'image/gif',
						'image/jpeg',
						'image/png',
					),
			),
		'preview_size' => 'medium', 
	) );
          
	;$cmb->add_field( array(
	  'name'    => 'CV',
	  'desc'    => 'Add CV.',
	  'id'      => 'intro_cv',
	  'type'    => 'file',
	  'options' => array(
		  'url' => false, 
	  ),
		  'text'    => array(
		  'add_upload_file_text' => 'Add cv' 
		  ),
		  'query_args' => array(
				  'type' => array(
					  'image/gif',
					  'image/jpeg',
					  'image/png',
					  'application/pdf',
				  ),
		  ),
	  'preview_size' => 'medium', 
  ) );
      
      $cmb->add_field(array(
      'name' => 'Admission Starting Date',
      'desc' => 'Select uas starting date.',
      'id'   => 'uas_sdate',
      'type' => 'text_date',
      'date_format' => 'l, F j,  Y',
      ));
      
      $cmb->add_field(array(
      'name' => 'Admission ending date',
      'desc' => 'Select uas ending date.',
      'id'   => 'uas_edate',
      'type' => 'text_date',
      'date_format' => 'l, F j,  Y',
      ));

      $cmb->add_field( array(
        'name' => 'Add Video',
        'desc' => 'Enter a youtube, twitter, or instagram URL.',
        'id'   => 'uas_video',
        'type' => 'oembed',
    ) );
   $API_KEY = get_theme_mod('google_map_api'); 
    $cmb->add_field( array(
      'name' => 'UAS Location',
      'desc' => 'Drag the marker to set the exact location',
      'id' => 'uas_location',
      'type' => 'pw_map',
      'split_values' => true, 
      'api_key' => $API_KEY, 
    ) )
    ;$cmb->add_field( [
      'name' => __( 'Facebook Page Link', 'ugyen' ),
      'desc' => __( 'Add link of facebook page..', 'ugyen' ),
      'id' => 'uas_facebook',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Twitter Page Link', 'ugyen' ),
      'desc' => __( 'Add link of Twitter page..', 'ugyen' ),
      'id' => 'uas_twitter',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Youtube Page Link', 'ugyen' ),
      'desc' => __( 'Add link of Youtube page..', 'ugyen' ),
      'id' => 'uas_youtube',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Instagram Page Link', 'ugyen' ),
      'desc' => __( 'Add link of Instagram page..', 'ugyen' ),
      'id' => 'uas_instagram',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Linkedin Page Link', 'ugyen' ),
      'desc' => __( 'Add link of Linkedin page..', 'ugyen' ),
      'id' => 'uas_linkedin',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Official Email', 'ugyen' ),
      'desc' => __( 'Email address of University', 'ugyen' ),
      'id' => 'uas_email',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Contact Number', 'ugyen' ),
      'desc' => __( 'Contact number of University', 'ugyen' ),
      'id' => 'uas_phone',
      'type' => 'text',
      ],
    );
    ;$cmb->add_field( [
      'name' => __( 'Website Url', 'ugyen' ),
      'desc' => __( 'Add website or university.', 'ugyen' ),
      'id' => 'uas_website',
      'type' => 'text',
      ],
    );
}