<?php
  function wpb_customize_register($wp_customize){
    //Showcase Section

    $wp_customize->add_section('showcase', array(
      'title' => __('Showcase', 'CCWD'),
      'description' => sprintf(__('Options for showcase', 'CCWD')),
      'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label' => __('Showcase Image', 'CCWD'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority' => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('CCWD Bootstrap Theme', 'CCWD'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Heading', 'CCWD'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default' => _x('CCWD has created a Skeletal Bootstrap WordPress Theme for ultimate Performance and UX', 'CCWD'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label' => __('Text', 'CCWD'),
      'section' => 'showcase',
      'priority' => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default' => _x('http://ccwd.com.au', 'CCWD'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label' => __('Button URL', 'CCWD'),
      'section' => 'showcase',
      'priority' => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default' => _x('Read More', 'CCWD'),
      'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label' => __('Button Text', 'CCWD'),
      'section' => 'showcase',
      'priority' => 5
    ));

  }

add_action('customize_register', 'wpb_customize_register');
