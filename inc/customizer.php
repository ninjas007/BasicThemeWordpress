<?php 

	function wpb_customize_register($wp_customize){
		// Show Section
		$wp_customize->add_section('showcase', array(
			'title' => __('Showcase', 'Simple Theme'),
			'description' => sprintf(__('Options for showcase', 'Simple Theme')),
			'priority' => 130
		));

		$wp_customize->add_setting('showcase_image', array(
			'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
			'label' => __('Showcase Image', 'Simple Theme'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			'priority' => 1)
		));

		$wp_customize->add_setting('showcase_heading', array(
			'default' => _x('Custom Bootstrap Wordpress Theme', 'Simple Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('showcase_heading', array(
			'label' => __('Heading', 'Simple Theme'),
			'section' => 'showcase',
			'priority' => 2
		));

		$wp_customize->add_setting('showcase_text', array(
			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptas facilis, numquam qui beatae iste explicabo praesentium repudiandae vero', 'Simple Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('showcase_text', array(
			'label' => __('Text', 'Simple Theme'),
			'section' => 'showcase',
			'priority' => 3
		));

		$wp_customize->add_setting('btn_url', array(
			'default' => _x('http://test.com', 'Simple Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array(
			'label' => __('Button URL', 'Simple Theme'),
			'section' => 'showcase',
			'priority' => 4
		));

		$wp_customize->add_setting('btn_url', array(
			'default' => _x('Read More', 'Simple Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array(
			'label' => __('Button Text', 'Simple Theme'),
			'section' => 'showcase',
			'priority' => 5
		));


	}

	add_action('customize_register', 'wpb_customize_register');

?>