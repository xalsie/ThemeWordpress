<?php

function theme1_init(){
	register_nav_menus(['primary_menu' => 'Menu principal']);
}
add_action('init', 'theme1_init');

function theme1_after_setup_theme(){
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_theme_support('widgets');
}
add_action('after_setup_theme','theme1_after_setup_theme');

function theme1_sanitize_bool($value){
	return is_bool($value) ? $value : false;
}

function theme1_customize_register($wp_customize) {		/* MENU CUSTOMIZER */
	// PARAMETRES
		$wp_customize->add_section('esgi', array(
			'title' =>  'Paramètres ESGI',
			'description' => '',
			'priority' => 1,
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_setting('is_dark', array(
			'type' => 'theme_mod',
			'transport' => 'refresh',
			'sanitize_callback' => 'theme1_sanitize_bool',
		));

		$wp_customize->add_setting('has_sidebar', array(
			'type' => 'theme_mod',
			'transport' => 'refresh',
			'sanitize_callback' => 'theme1_sanitize_bool',
		));

		// $wp_customize->add_setting('main-color', array(
		// 	'type' => 'theme_mod',
		// 	'transport' => 'refresh',
		// 	'sanitize_callback' => 'sanitize_hex_color',
		// ));

		$wp_customize->add_control('is_dark', array(
			'type' => 'checkbox',
			'priority' => 1,
			'section' => 'esgi',
			'label' =>  'Theme Sombre',
			'description' => 'Active le thème sombre',
		));

		// $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main-color', array(
		// 		'label' =>  'Couleur principale',
		// 		'section' => 'esgi',
		// 	))
		// );

		$wp_customize->add_setting('homepage_image', array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_image', array(
			'label' => 'Image page d\'accueil',
			'section' => 'esgi',
			'settings' => 'homepage_image',
		)));
	// END PARAMETRES

	// WHO ARE WE
		$wp_customize->add_section('who_section', array(
			'title' => 'Who are we',
			'priority' => 30,
		));

		$wp_customize->add_setting('who_section_main', [
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		]);

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'who_section_main', array(
			'label' => 'Who section picture',
			'section' => 'who_section',
			'settings' => 'who_section_main',
		)));

		for ($i = 1; $i <= 3; $i++) {
			$wp_customize->add_setting('who_section_' . $i . '_title', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('who_section_' . $i . '_title', array(
				'label' => 'Title ' . $i,
				'section' => 'who_section',
				'type' => 'text',
			));

			$wp_customize->add_setting('who_section_' . $i . '_text', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('who_section_' . $i . '_text', array(
				'label' => 'Text ' . $i,
				'section' => 'who_section',
				'type' => 'text',
			));
		}
	// END WHO ARE WE

	// SERVICES
		$wp_customize->add_section('services_image_section', array(
			'title' => 'Our Services',
			'priority' => 31,
		));

		for ($i = 1; $i <= 4; $i++) {
			$wp_customize->add_setting('services_image_' . $i . '_image', array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_image_' . $i . '_image', array(
				'label' => 'Service ' . $i . ' Image',
				'section' => 'services_image_section',
				'settings' => 'services_image_' . $i . '_image',
			)));
		}
	// END SERVICES

	// PARTNERS
		$wp_customize->add_section('partner_section', array(
		'title' => 'Our partners',
		'priority' => 31,
		));

		for ($i = 1; $i <= 6; $i++) {
			$wp_customize->add_setting('partner_' . $i . '_image', array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_' . $i . '_image', array(
				'label' => 'Partner ' . $i . ' Image',
				'section' => 'partner_section',
				'settings' => 'partner_' . $i . '_image',
			)));
		}
	// END PARTNERS

	// MEMBERS
		$wp_customize->add_section('member_section', array(
			'title' => 'Members',
			'priority' => 30,
		));

		for ($i = 1; $i <= 4; $i++) {
			$wp_customize->add_setting('member_' . $i . '_image', array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_' . $i . '_image', array(
				'label' => 'Member ' . $i . ' Image',
				'section' => 'member_section',
				'settings' => 'member_' . $i . '_image',
			)));

			$wp_customize->add_setting('member_' . $i . '_title', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('member_' . $i . '_title', array(
				'label' => 'Member ' . $i . ' Title',
				'section' => 'member_section',
				'type' => 'text',
			));

			$wp_customize->add_setting('member_' . $i . '_phone', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('member_' . $i . '_phone', array(
				'label' => 'Member ' . $i . ' Phone Number',
				'section' => 'member_section',
				'type' => 'text',
			));

			$wp_customize->add_setting('member_' . $i . '_email', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_email',
			));

			$wp_customize->add_control('member_' . $i . '_email', array(
				'label' => 'Member ' . $i . ' Email',
				'section' => 'member_section',
				'type' => 'email',
			));
		}
	// END MEMBERS

	// FOOTER COPYRIGHT
		$wp_customize->add_setting('footer_copyright', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control('footer_copyright', array(
			'label' => 'Copyright ',
			'section' => 'footer_section',
			'type' => 'text',
		));
	// END FOOTER COPYRIGHT

	// FOOTER
		$wp_customize->add_section('footer_section', array(
			'title' => 'Footer',
			'priority' => 31,
		));

		$wp_customize->add_setting('footer_section_main', [
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		]);

		for ($i = 1; $i <= 2; $i++) {
			$wp_customize->add_setting('footer_contact_' . $i . '_title', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('footer_contact_' . $i . '_title', array(
				'label' => 'Title ' . $i,
				'section' => 'footer_section',
				'type' => 'text',
			));

			$wp_customize->add_setting('footer_contact_' . $i . '_phone', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('footer_contact_' . $i . '_phone', array(
				'label' => 'Phone ' . $i,
				'section' => 'footer_section',
				'type' => 'text',
			));

			$wp_customize->add_setting('footer_contact_' . $i . '_email', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('footer_contact_' . $i . '_email', array(
				'label' => 'Email ' . $i,
				'section' => 'footer_section',
				'type' => 'email',
			));
		}
	// END FOOTER
}
add_action('customize_register', 'theme1_customize_register');

function theme1_enqueue_assets(){
	wp_enqueue_style('main', get_stylesheet_uri());
	wp_enqueue_script('myJquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.7.0.min.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
	
	$base = str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ));
	
	$variables = [
		'ajaxURL' => admin_url('admin-ajax.php'),
		'baseURL' => $base
	];
	wp_localize_script('main', 'esgi', $variables);
}
add_action('wp_enqueue_scripts', 'theme1_enqueue_assets');

function theme1_dark($classes){
	if(get_theme_mod('is_dark', false)){
		$classes[] = 'dark';
	}
	return $classes;
}
add_filter('body_class', 'theme1_dark', 100, 1);

function theme1_admin_footer () {
	echo "theme1 created by <a href='https://github.com/xalsie/'>LeGrizzly</a>";
}
add_filter('admin_footer_text', 'theme1_admin_footer');

?>