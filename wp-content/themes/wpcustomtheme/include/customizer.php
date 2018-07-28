<?php
    function wp_customize_register($wp_customize){
        // 
        $wp_customize->add_section('banner',array(
            'title' => __('About Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 150
        ));

        $wp_customize->add_setting('banner_image', array(
            'default' => get_bloginfo('template_directory').'/images/services-bg.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
            'label' => __('Banner Image', 'WP Minimalist'),
            'section' => 'banner',
            'settings' => 'banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('banner_heading', array(
            'default' => _x('Company Profile', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'banner',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('banner_text', array(
            'default' => _x('Hong Tah Logistics Inc. is a privately owned trucking company that renders land transportation needs of customers and suppliers from the origin point to destination point. It seeks to accrue impressive customer and vendor rating by providing a respectable level of service integrity to its business partners. ', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'banner',
            'priority' => 3
        ));
    }
    add_action('customize_register',  'wp_customize_register');
