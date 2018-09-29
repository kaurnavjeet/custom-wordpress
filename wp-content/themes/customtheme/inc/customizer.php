<?php 
  function wpb_customize_register($wp_customize) {
    // Showcase Section
    $wp_customize -> add_section('showcase', array(
      'title' => __('Showcase', 'customtheme'),
      'description' => sprintf(__('Options for showcase', 'customtheme')),
      'priority' => 130
    ));

    $wp_customize -> add_setting('showcase_image', array(
      'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label' => __('Showcase Image', 'customtheme'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority' => 1
    )));

    $wp_customize -> add_setting('showcase_heading', array(
      'default' => _x('Custom Bootstrap Wordpress Theme', 'customtheme'),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('showcase_heading', array(
      'label' => __('Heading', 'customtheme'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize -> add_setting('showcase_text', array(
      'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quae perferendis ex magni, possimus facilis totam saepe ducimus natus ipsam!', 'customtheme'),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('showcase_text', array(
      'label' => __('Text', 'customtheme'),
      'section' => 'showcase',
      'priority' => 3
    ));

    $wp_customize -> add_setting('button_url', array(
      'default' => _x('http://test.com', 'customtheme'),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('button_url', array(
      'label' => __('Button URL', 'customtheme'),
      'section' => 'showcase',
      'priority' => 4
    ));

    $wp_customize -> add_setting('button_text', array(
      'default' => _x('Read More', 'customtheme'),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('button_text', array(
      'label' => __('Button Text', 'customtheme'),
      'section' => 'showcase',
      'priority' => 5
    ));
  }

  add_action('customize_register', 'wpb_customize_register');