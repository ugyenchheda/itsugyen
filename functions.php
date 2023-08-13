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

add_action('cmb2_admin_init', 'page_intro_meta');
function page_intro_meta() {
      $cmb = new_cmb2_box(array(
          'id' => 'page',
          'title' => __('Intro Section:', 'ugyen'),
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
  'name' => 'About Me Title',
  'desc' => 'Add intro for about me.',
  'id'   => 'about_title',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Email',
  'desc' => 'Add email address.',
  'id'   => 'about_email',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Phone',
  'desc' => 'Add phone Number.',
  'id'   => 'about_number',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Address',
  'desc' => 'Add address.',
  'id'   => 'about_address',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Age',
  'desc' => 'Add age.',
  'id'   => 'about_age',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Degree',
  'desc' => 'Add degree.',
  'id'   => 'about_degree',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Freelancing',
  'desc' => 'Add freelancing availability.',
  'id'   => 'about_freelancing',
  'type' => 'text',
  ));
}

add_action('cmb2_admin_init', 'page_about_meta');
function page_about_meta() {
      $cmb = new_cmb2_box(array(
          'id' => 'page_about',
          'title' => __('About Section:', 'ugyen'),
          'object_types' => array('page'),
          'context' => 'normal',
          'priority' => 'high',
          'show_names' => true,
          'closed' => true,

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
  'name' => 'About Me Title',
  'desc' => 'Add intro for about me.',
  'id'   => 'about_title',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Email',
  'desc' => 'Add email address.',
  'id'   => 'about_email',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Phone',
  'desc' => 'Add phone Number.',
  'id'   => 'about_number',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Address',
  'desc' => 'Add address.',
  'id'   => 'about_address',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Age',
  'desc' => 'Add age.',
  'id'   => 'about_age',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Degree',
  'desc' => 'Add degree.',
  'id'   => 'about_degree',
  'type' => 'text',
  ));

  $cmb->add_field(array(
  'name' => 'Freelancing',
  'desc' => 'Add freelancing availability.',
  'id'   => 'about_freelancing',
  'type' => 'text',
  ));

  $group_field_id = $cmb->add_field( array(
	'name' => 'Add Completed Project Details',
    'id'          => 'project_type',
    'type'        => 'group',
    'description' => __( 'Add varieties of projects with their description and counts.', 'ugyen' ),
    'options'     => array(
        'group_title'       => __( 'Project Type {#}', 'ugyen' ), 
        'add_button'        => __( 'Add Another Project Type', 'ugyen' ),
        'remove_button'     => __( 'Remove Project Type', 'ugyen' ),
        'sortable'          => true,
         'closed'         => true, 
        'remove_confirm' => esc_html__( 'Are you sure you want to remove this project type?', 'ugyen' ), 
    ),
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Project Type Title',
		'id'   => 'project_type_name',
		'type' => 'text',
		
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Description',
		'description' => 'Write a short description for this Project Type',
		'id'   => 'project_type_description',
		'type' => 'textarea_small',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Project Type Image',
		'id'   => 'project_type_image',
		'type' => 'file',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Project Type Count',
		'id'   => 'project_type_count',
		'type' => 'text',
	) );

	$cmb->add_field(array(
	'name' => 'Skills Intro',
	'desc' => 'Add a sentence about skills.',
	'id'   => 'skills_intro',
	'type' => 'text',
	));
  
	$cmb->add_field(array(
	'name' => 'Share Experience',
	'desc' => 'Add description about skills and experience.',
	'id'   => 'skills_desc',
	'type' => 'textarea_small',
	));
	

	$group_field_id = $cmb->add_field( array(
		'name' => 'Add skill Details',
		'id'          => 'skills',
		'type'        => 'group',
		'description' => __( 'Add varieties of skills with their description and counts.', 'ugyen' ),
		'options'     => array(
			'group_title'       => __( 'Skills Type {#}', 'ugyen' ), 
			'add_button'        => __( 'Add Another Skills Type', 'ugyen' ),
			'remove_button'     => __( 'Remove Skills Type', 'ugyen' ),
			'sortable'          => true,
			 'closed'         => true, 
			'remove_confirm' => esc_html__( 'Are you sure you want to remove this Skills type?', 'ugyen' ), 
		),
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Skills Type Title',
			'id'   => 'skills_name',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Skills Type Count',
			'id'   => 'skills_count',
			'type' => 'text',
		) );
		$group_field_id = $cmb->add_field( array(
			'name' => 'Add Knowledge Details',
			'id'          => 'knowledge',
			'type'        => 'group',
			'description' => __( 'Add varieties of knowledge with their description and counts.', 'ugyen' ),
			'options'     => array(
				'group_title'       => __( 'knowledge Type {#}', 'ugyen' ), 
				'add_button'        => __( 'Add Another knowledge Type', 'ugyen' ),
				'remove_button'     => __( 'Remove knowledge Type', 'ugyen' ),
				'sortable'          => true,
				 'closed'         => true, 
				'remove_confirm' => esc_html__( 'Are you sure you want to remove this knowledge type?', 'ugyen' ), 
			),
			) );
			$cmb->add_group_field( $group_field_id, array(
				'name' => 'knowledge Type Title',
				'id'   => 'knowledge_name',
				'type' => 'text',
				
			) );
}

add_action('cmb2_admin_init', 'page_services_meta');
function page_services_meta() {
	$cmb = new_cmb2_box(array(
		'id' => 'page_service',
		'title' => __('Services Section:', 'ugyen'),
		'object_types' => array('page'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'closed' => true,

	));

	$cmb->add_field(array(
	'name' => 'Service Title',
	'desc' => 'Add the title for service section.',
	'id'   => 'service_title',
	'type' => 'text',
	));


	$group_field_id = $cmb->add_field( array(
		'name' => 'Add Completed Services Details',
		'id'          => 'services_type',
		'type'        => 'group',
		'description' => __( 'Add varieties of Servicess with their description and counts.', 'ugyen' ),
		'options'     => array(
			'group_title'       => __( 'Services Type {#}', 'ugyen' ), 
			'add_button'        => __( 'Add Another Services Type', 'ugyen' ),
			'remove_button'     => __( 'Remove Services Type', 'ugyen' ),
			'sortable'          => true,
			 'closed'         => true, 
			'remove_confirm' => esc_html__( 'Are you sure you want to remove this Services type?', 'ugyen' ), 
		),
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Services Type Title',
			'id'   => 'services_type_name',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Description',
			'description' => 'Write a short description for this Services Type',
			'id'   => 'services_type_description',
			'type' => 'textarea_small',
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Services Type Image',
			'id'   => 'services_type_image',
			'type' => 'file',
		) );
	
	
}

add_action('cmb2_admin_init', 'page_education_meta');
function page_education_meta() {
	$cmb = new_cmb2_box(array(
		'id' => 'page_deucation',
		'title' => __('Education Section:', 'ugyen'),
		'object_types' => array('page'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'closed' => true,

	));

	$cmb->add_field(array(
	'name' => 'Education Title',
	'desc' => 'Add the title for education section.',
	'id'   => 'education_title',
	'type' => 'text',
	));


	$group_field_id = $cmb->add_field( array(
		'name' => 'Add Completed education Details',
		'id'          => 'education_type',
		'type'        => 'group',
		'description' => __( 'Add varieties of educations with their description and counts.', 'ugyen' ),
		'options'     => array(
			'group_title'       => __( 'Education Level {#}', 'ugyen' ), 
			'add_button'        => __( 'Add Another Education Level', 'ugyen' ),
			'remove_button'     => __( 'Remove Education Level', 'ugyen' ),
			'sortable'          => true,
			 'closed'         => true, 
			'remove_confirm' => esc_html__( 'Are you sure you want to remove this Education Level?', 'ugyen' ), 
		),
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Education Level Title',
			'id'   => 'education_type_name',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Education Level Title',
			'id'   => 'education_institution',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Education Year',
			'id'   => 'education_year',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Description',
			'description' => 'Write a short description for this Education Level',
			'id'   => 'education_type_description',
			'type' => 'textarea_small',
		) );
}

add_action('cmb2_admin_init', 'page_experience_meta');
function page_experience_meta() {
	$cmb = new_cmb2_box(array(
		'id' => 'page_experience',
		'title' => __('Experience Section:', 'ugyen'),
		'object_types' => array('page'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'closed' => true,

	));

	$cmb->add_field(array(
	'name' => 'Experience Block Title',
	'desc' => 'Add the title for experience section.',
	'id'   => 'experience_title',
	'type' => 'text',
	));


	$group_field_id = $cmb->add_field( array(
		'name' => 'Add Completed experience Details',
		'id'          => 'experience_type',
		'type'        => 'group',
		'description' => __( 'Add varieties of experiences with their description and counts.', 'ugyen' ),
		'options'     => array(
			'group_title'       => __( 'Experiences {#}', 'ugyen' ), 
			'add_button'        => __( 'Add Another Experience', 'ugyen' ),
			'remove_button'     => __( 'Remove Experience', 'ugyen' ),
			'sortable'          => true,
			 'closed'         => true, 
			'remove_confirm' => esc_html__( 'Are you sure you want to remove this experience?', 'ugyen' ), 
		),
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Position',
			'id'   => 'experience_position',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Company',
			'id'   => 'experience_institution',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Company Website',
			'id'   => 'institution_website',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Time Period',
			'id'   => 'experience_year',
			'type' => 'text',
			
		) );
	
		$cmb->add_group_field( $group_field_id, array(
			'name' => 'Description',
			'description' => 'Write a short description for this experience Level',
			'id'   => 'experience_description',
			'type' => 'textarea_small',
		) );
}


// Register Portfolio Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'ugyen' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'ugyen' ),
		'menu_name'             => __( 'Portfolio', 'ugyen' ),
		'name_admin_bar'        => __( 'Portfolio', 'ugyen' ),
		'archives'              => __( 'Portfolio Archives', 'ugyen' ),
		'attributes'            => __( 'Portfolio Attributes', 'ugyen' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'ugyen' ),
		'all_items'             => __( 'All Portfolios', 'ugyen' ),
		'add_new_item'          => __( 'Add New Portfolio', 'ugyen' ),
		'add_new'               => __( 'Add Portfolio', 'ugyen' ),
		'new_item'              => __( 'New Portfolio', 'ugyen' ),
		'edit_item'             => __( 'Edit Portfolio', 'ugyen' ),
		'update_item'           => __( 'Update Portfolio', 'ugyen' ),
		'view_item'             => __( 'View Portfolio', 'ugyen' ),
		'view_items'            => __( 'View Portfolios', 'ugyen' ),
		'search_items'          => __( 'Search Portfolio', 'ugyen' ),
		'not_found'             => __( 'Not found', 'ugyen' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ugyen' ),
		'featured_image'        => __( 'Featured Image', 'ugyen' ),
		'set_featured_image'    => __( 'Set featured image', 'ugyen' ),
		'remove_featured_image' => __( 'Remove featured image', 'ugyen' ),
		'use_featured_image'    => __( 'Use as featured image', 'ugyen' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'ugyen' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'ugyen' ),
		'items_list'            => __( 'Portfolios list', 'ugyen' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'ugyen' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'ugyen' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'ugyen' ),
		'description'           => __( 'Works I Executed', 'ugyen' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-star-filled',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );

add_action('cmb2_admin_init', 'portfolio_meta');
function portfolio_meta() {
	$cmb = new_cmb2_box(array(
		'id' => 'portfolio',
		'title' => __('Info Section:', 'ugyen'),
		'object_types' => array('portfolio'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'closed' => true,

	));

	$cmb->add_field(array(
	'name' => 'Portfolio Link',
	'desc' => 'Add link to portfolio.',
	'id'   => 'portfolio_link',
	'type' => 'text',
	));
}