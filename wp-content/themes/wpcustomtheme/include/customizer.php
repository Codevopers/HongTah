<?php
    function wp_customize_register($wp_customize){
        // Add Home panel
        $wp_customize->add_panel( 'panel_id', array(
            'priority'       => 10,
             'capability'     => 'edit_theme_options',
             'theme_supports' => '',
             'title'          => __('Home Page', 'WP Minimalist'),
             'description'    => __('Edit for home page', 'WP Minimalist'),
        ));    
        //  Add home page banner section to home panel
        $wp_customize->add_section('homepg',array(
            'title' =>__('Home Banner' ,'WP Minimalist'),
            'description' => sprintf(__('Options for Home Page Banner','WP Minimalist')),
            'panel'  => 'panel_id',
            'priority' => 130
        ));
        //  Add bg1 setting and control
        $wp_customize->add_setting('home_image1', array(
            'default' => get_bloginfo('template_directory').'/images/banner1.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image1', array(
            'label' => __('Home Image 1', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image1',
            'priority' => 6
        )));

        $wp_customize->add_setting('home_tagline', array(
            'default' => _x('Possibilities beyond cargo.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_tagline', array(
            'label' => __('Tagline', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 6
        ));

        $wp_customize->add_setting('home_banner_btn_url_1', array(
            'default' => _x('https://locahost/services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_banner_btn_url_1', array(
            'label' => __('Button 1 URL', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 2
        ));

        $wp_customize->add_setting('home_banner_btn_text_1', array(
            'default' => _x('Services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_banner_btn_text_1', array(
            'label' => __('Button 1 Text', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 3
        ));

        $wp_customize->add_setting('home_banner_btn_url_2', array(
            'default' => _x('https://locahost/contact-us', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_banner_btn_url_2', array(
            'label' => __('Button 2 URL', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 4
        ));

        $wp_customize->add_setting('home_banner_btn_text_2', array(
            'default' => _x('Contact Us', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_banner_btn_text_2', array(
            'label' => __('Button 2 Text', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 5
        ));

        //  Add bg2 setting and control
        $wp_customize->add_setting('home_image2', array(
            'default' => get_bloginfo('template_directory').'/images/banner2.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image2', array(
            'label' => __('Home Image 2', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image2',
            'priority' => 7
        )));

        //  Add bg3 setting and control
        $wp_customize->add_setting('home_image3', array(
            'default' => get_bloginfo('template_directory').'/images/banner3.jpg',
            'type' => 'theme_mod'
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image3', array(
            'label' => __('Home Image 3', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image3',
            'priority' => 8
        )));

        //  Add home about overview section to panel
        $wp_customize->add_section('about_overview',array(
            'title' =>__('About Overview' ,'WP Minimalist'),
            'description' => sprintf(__('Options for about-overview','WP Minimalist')),
            'panel'  => 'panel_id',
            'priority' => 140
        ));

        $wp_customize->add_setting('about_overview_heading', array(
            'default' => _x('About Hong Tah Logistics Inc.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 1
        ));

        $wp_customize->add_setting('about_overview_text', array(
            'default' => _x('Hong Tah Logistics Inc. is a privately owned trucking company that renders land transportation needs of customers and suppliers from the origin point to destination point. It seeks to accrue impressive customer and vendor rating by providing a respectable level of service integrity to its business partners.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 2
        ));

        $wp_customize->add_setting('about_overview_btn_url', array(
            'default' => _x('https://locahost/about-us', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_btn_url', array(
            'label' => __('Button URL', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 3
        ));

        $wp_customize->add_setting('about_overview_btn_text', array(
            'default' => _x('Learn More', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_btn_text', array(
            'label' => __('Button Text', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 4
        ));

        //  Add home services overview section to panel
        $wp_customize->add_section('services_overview',array(
            'title' =>__('Services Overview' ,'WP Minimalist'),
            'description' => sprintf(__('Options for services-overview','WP Minimalist')),
            'panel'  => 'panel_id',
            'priority' => 150
        ));

        $wp_customize->add_setting('services_overview_bgimage', array(
            'default' => get_bloginfo('template_directory').'/images/services-bg.jpg',
            'type' => 'theme_mod'
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_overview_bgimage', array(
            'label' => __('Services Overview Background Image', 'WP Minimalist'),
            'section' => 'services_overview',
            'settings' => 'services_overview_bgimage',
            'priority' => 1
        )));

        $wp_customize->add_setting('services_overview_heading', array(
            'default' => _x('Services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_overview_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 2
        ));
        //  Add home contact overview section to panel
        $wp_customize->add_section('Contact_overview',array(
            'title' =>__('Contact Overview' ,'WP Minimalist'),
            'description' => sprintf(__('Options for Contact Overview','WP Minimalist')),
            'panel'  => 'panel_id',
            'priority' => 160
        ));
       
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
            'priority' => 2
        )));

        $wp_customize->add_setting('banner_heading', array(
            'default' => _x('Company Profile', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'banner',
            'priority' => 3
        ));
        
        $wp_customize->add_setting('banner_text', array(
            'default' => _x('Hong Tah Logistics Inc. is a privately owned trucking company that renders land transportation needs of customers and suppliers from the origin point to destination point. It seeks to accrue impressive customer and vendor rating by providing a respectable level of service integrity to its business partners. ', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'banner',
            'priority' => 4
        ));
    }
    add_action('customize_register',  'wp_customize_register');
