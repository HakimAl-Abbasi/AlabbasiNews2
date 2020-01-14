<?php

//DEMO IMPORT

		
	function wsl_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Wpazure Demo import' , 'wpazure-site-library' );
    $default_settings['menu_title']  = esc_html__( 'Wpazure site library' , 'wpazure-site-library' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'wpazure-demo-import';

    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'wsl_plugin_page_setup' );

/**
 * Set import files
 */
function wsl_demo_content() {
	
    return array(

        array(
            'import_file_name'           => 'Agency',
			'categories'                 => array( 'Business'),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'agency/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'agency/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'agency/settings.dat',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'agency/agency.jpg',
            'preview_url'                => 'https://agency.wpazure.com/',
        ),
		array(
            'import_file_name'           => 'Startup',
			'categories'                 => array( 'Business'),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'startup/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'startup/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'startup/settings.dat',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'startup/startup.jpg',
            'preview_url'                => 'https://demos.wpazure.com/startup/',
        ),
		array(
            'import_file_name'           => 'Fincorp',
			'categories'                 => array( 'Business'),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'fincorp/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'fincorp/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'fincorp/settings.dat',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'fincorp/fincorp.jpg',
            'preview_url'                => 'https://fincorp.wpazure.com/',
        ),
		array(
            'import_file_name'           => 'Interio',
			'categories'                 => array('corporate' ),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'interio/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'interio/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'interio/settings.dat',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'interio/interio.jpg',
            'preview_url'                => 'https://interio.wpazure.com',
        ),
		
		array(
            'import_file_name'           => 'Xbusiness',
			'categories'                 => array('Business','Pro' ),
            'import_file_url'            => '',
            'import_widget_file_url'     => '',
            'import_customizer_file_url' => '',
			'import_notice'              => '',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'xbusiness/xbusiness.jpg',
            'preview_url'                => 'https://xbusiness.wpazure.com/',
        ),
		
		array(
            'import_file_name'           => 'Finance',
			'categories'                 => array('Business','Pro' ),
            'import_file_url'            => '',
            'import_widget_file_url'     => '',
            'import_customizer_file_url' => '',
			'import_notice'              => '',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'finance/finance.jpg',
            'preview_url'                => 'https://finance.wpazure.com/',
        ),
		
		array(
            'import_file_name'           => 'Store',
			'categories'                 => array('Ecommerce','Business','Pro' ),
            'import_file_url'            => '',
            'import_widget_file_url'     => '',
            'import_customizer_file_url' => '',
			'import_notice'              => '',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'store/store.jpg',
            'preview_url'                => 'https://store.wpazure.com/',
        ),
		
		array(
            'import_file_name'           => 'Yoga',
			'categories'                 => array('Health','Pro' ),
            'import_file_url'            => '',
            'import_widget_file_url'     => '',
            'import_customizer_file_url' => '',
			'import_notice'              => '',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'yoga/yoga.jpg',
            'preview_url'                => 'https://yoga.wpazure.com/',
        ),
		
		array(
            'import_file_name'           => 'Construction',
			'categories'                 => array('Business','Pro' ),
            'import_file_url'            => '',
            'import_widget_file_url'     => '',
            'import_customizer_file_url' => '',
			'import_notice'              => '',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'construction/construction.jpg',
            'preview_url'                => 'https://construction.wpazure.com/',
        ),
		
		array(
            'import_file_name'           => 'Restaurant',
			'categories'                 => array('Food' ),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'restaurant/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'restaurant/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'restaurant/settings.dat',
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'restaurant/restaurant.jpg',
            'preview_url'                => 'https://restaurant.wpazure.com',
        ),
		
		array(
            'import_file_name'           => 'Haleness',
			'categories'                 => array('Health' ),
            'import_file_url'            => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'haleness/sample-data.xml',
            'import_widget_file_url'     => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'haleness/widgets.wie',
            'import_customizer_file_url' => trailingslashit( plugin_dir_url( __FILE__ ) ) . 'haleness/settings.dat',
			'import_notice'              => __( 'Please install the Bookly plugin before importing this demo', 'wpazure-site-library' ),
            'import_preview_image_url'   => plugin_dir_url( __FILE__ )  . 'haleness/haleness.jpg',
            'preview_url'                => 'https://haleness.wpazure.com',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'wsl_demo_content');


function wsl_set_home_page_function() {

	//Assign the menu
    $main_menu = get_term_by( 'name', 'Menu', 'nav_menu' );
    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
			'footer' => $main_menu->term_id,
        )
    );

    //Asign the static front page and the blog page
    $front_page = get_page_by_title( 'Home' );
    $blog_page  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page -> ID );
    update_option( 'page_for_posts', $blog_page -> ID );

    //Assign the Front Page template
    update_post_meta( $front_page -> ID, '_wp_page_template', 'page-templates/template_page-builder.php' );

}
add_action( 'pt-ocdi/after_import', 'wsl_set_home_page_function' );

 // Remove branding
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );


function wpazure_all_scriptsandstyles() {?>

<style>
.js-ocdi-gl-item .button[value="4"],.js-ocdi-gl-item .button[value="5"],.js-ocdi-gl-item .button[value="6"],.js-ocdi-gl-item .button[value="7"],.js-ocdi-gl-item .button[value="8"]{display:none!important;}
</style>
<?php
}

add_action( 'admin_footer', 'wpazure_all_scriptsandstyles' );