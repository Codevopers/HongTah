<?php
    
    function wp_customize_register($wp_customize){
    include 'variables.php';    
        // Add Home panel
        $wp_customize->add_panel( 'panel_id', array(
            'priority'       => 140,
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
            'default' => $home_banner_image1,
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image1', array(
            'label' => __('Home Image 1', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image1',
            'priority' => 1
        )));

        $wp_customize->add_setting('home_tagline', array(
            'default' => _x($tagline, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_tagline', array(
            'label' => __('Tagline', 'WP Minimalist'),
            'section' => 'homepg',
            'priority' => 2
        ));


        //  Add bg2 setting and control
        $wp_customize->add_setting('home_image2', array(
            'default' => $home_banner_image2,
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image2', array(
            'label' => __('Home Image 2', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image2',
            'priority' => 3
        )));

        //  Add bg3 setting and control
        $wp_customize->add_setting('home_image3', array(
            'default' => $home_banner_image3,
            'type' => 'theme_mod'
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_image3', array(
            'label' => __('Home Image 3', 'WP Minimalist'),
            'section' => 'homepg',
            'settings' => 'home_image3',
            'priority' => 4
        )));

        //  Add home about overview section to panel
        $wp_customize->add_section('about_overview',array(
            'title' =>__('About Overview' ,'WP Minimalist'),
            'description' => sprintf(__('Options for about-overview','WP Minimalist')),
            'panel'  => 'panel_id',
            'priority' => 140
        ));

        $wp_customize->add_setting('about_overview_heading', array(
            'default' => _x($lp_about_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 1
        ));

        $wp_customize->add_setting('about_overview_text', array(
            'default' => _x($lp_about_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 2
        ));

        $wp_customize->add_setting('about_overview_btn_url', array(
            'default' => _x( $lp_about_btnurl, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_overview_btn_url', array(
            'label' => __('Button URL', 'WP Minimalist'),
            'section' => 'about_overview',
            'priority' => 3
        ));

        $wp_customize->add_setting('about_overview_btn_text', array(
            'default' => _x($lp_about_btn, 'WP Minimalist'),
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
            'default' => $lp_services_bgimage,
            'type' => 'theme_mod'
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_overview_bgimage', array(
            'label' => __('Services Overview Background Image', 'WP Minimalist'),
            'section' => 'services_overview',
            'settings' => 'services_overview_bgimage',
            'priority' => 1
        )));

        $wp_customize->add_setting('services_overview_heading', array(
            'default' => _x($lp_services_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_overview_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('home_service_1_btn_url', array(
            'default' => _x($lp_service1_url, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_btn_url', array(
            'label' => __('Button URL 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 3
        ));

        $wp_customize->add_setting('home_service_1_btn_text', array(
            'default' => _x($lp_service1_btn, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_btn_text', array(
            'label' => __('Button Text 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 4
        ));

        // SERVICES 2

        $wp_customize->add_setting('home_service_2_btn_url', array(
            'default' => _x($lp_service2_url, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_btn_url', array(
            'label' => __('Button URL 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 5
        ));

        $wp_customize->add_setting('home_service_2_btn_text', array(
            'default' => _x($lp_service2_btn, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_btn_text', array(
            'label' => __('Button Text 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 6
        ));

        $wp_customize->add_setting('home_service_1_content', array(
            'default' => _x($lp_service1_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_content', array(
            'label' => __('Button Text 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 7
        ));

        $wp_customize->add_setting('home_service_2_content', array(
            'default' => _x($lp_service2_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_content', array(
            'label' => __('Button Text 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 8
        ));
        
        
        //ABOUT
        $wp_customize->add_section('about_section',array(
            'title' => __('About Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 150
        ));

        $wp_customize->add_setting('about_banner_image', array(
            'default' => $about_banner_image,
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_banner_image', array(
            'label' => __('About Banner Image', 'WP Minimalist'),
            'section' => 'about_section',
            'settings' => 'about_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('about_banner_heading', array(
            'default' => _x($about_banner_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_banner_heading', array(
            'label' => __('Banner Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('about_banner_text', array(
            'default' => _x($about_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_banner_text', array(
            'label' => __('Banner Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 3
        ));

        // vision

        $wp_customize->add_setting('vision_heading', array(
            'default' => _x($vision, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('vision_heading', array(
            'label' => __('Vision Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 4
        ));
        
        $wp_customize->add_setting('vision_text', array(
            'default' => _x($vision_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('vision_text', array(
            'label' => __('Vision Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 5
        ));
        //  mission
        $wp_customize->add_setting('mission_heading', array(
            'default' => _x($mission, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('mission_heading', array(
            'label' => __('Mission Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 6
        ));
        
        $wp_customize->add_setting('mission_text', array(
            'default' => _x($mission_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('mission_text', array(
            'label' => __('Mission Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 7
        ));
        // specially we aim to
    
        $wp_customize->add_setting('specifically_heading', array(
            'default' => _x($specifically_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('specifically_heading', array(
            'label' => __('Specifically Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 8
        ));
        

        $wp_customize->add_setting('specifically', array(
            'default' => _x($specifically, 'WP Minimalist'),
            'type' => 'theme_mod'
            
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'specifically',
                array(
                    'label'          => __( 'List item', 'WP Minimalist' ),
                    'section'        => 'about_section',
                    'settings'       => 'specifically',
                    'type'           => 'textarea',
                    'priority'       => 9
                    )
                )
                );
   
        
        //  clientpromise
        $wp_customize->add_setting('cpromise_heading', array(
            'default' => _x($client_promise, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('cpromise_heading', array(
            'label' => __('Client Promise Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 10
        ));
        
        $wp_customize->add_setting('cpromise_text', array(
            'default' => _x($client_promise_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('cpromise_text', array(
            'label' => __('Client Promise Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 11
        ));
        //SERVICES 
        $wp_customize->add_section('service_section',array(
            'title' => __('Services Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 160
        ));

        $wp_customize->add_setting('services_banner_image', array(
            'default' => $service_banner_image,
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_banner_image', array(
            'label' => __('Services Banner Image', 'WP Minimalist'),
            'section' => 'service_section',
            'settings' => 'services_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('services_banner_heading', array(
            'default' => _x($service_banner_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('services_banner_text', array(
            'default' => _x($service_banner_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 3
        ));

        //  trucking
        $wp_customize->add_setting('trucking_heading', array(
            'default' => _x($service1_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('trucking_heading', array(
            'label' => __('Trucking Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 4
        ));
        
        $wp_customize->add_setting('trucking_text', array(
            'default' => _x($service1_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('trucking_text', array(
            'label' => __('Trucking Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 5
        ));
        $wp_customize->add_setting('trucking_image', array(
            'default' => $service1_bgimage,
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'trucking_image', array(
            'label' => __('Trucking Image', 'WP Minimalist'),
            'section' => 'service_section',
            'settings' => 'trucking_image',
            'priority' => 6
        )));
        //  warehouse
        $wp_customize->add_setting('warehouse_heading', array(
            'default' => _x($service2_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('warehouse_heading', array(
            'label' => __('Warehouse Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 7
        ));
        
        $wp_customize->add_setting('warehouse_text', array(
            'default' => _x($service2_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('warehouse_text', array(
            'label' => __('Warehouse Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 8
        ));
        $wp_customize->add_setting('warehouse_image', array(
            'default' => $service2_bgimage,
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'warehouse_image', array(
            'label' => __('Warehouse Image', 'WP Minimalist'),
            'section' => 'service_section',
            'settings' => 'warehouse_image',
            'priority' => 9
        )));
    

        //CONTACT PAGE
        $wp_customize->add_section('contact_section',array(
            'title' => __('Contact Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 160
        ));

        $wp_customize->add_setting('contact_banner_image', array(
            'default' => $contact_banner_image,
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_banner_image', array(
            'label' => __('Contact Banner Image', 'WP Minimalist'),
            'section' => 'contact_section',
            'settings' => 'contact_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('contact_banner_heading', array(
            'default' => _x($contact_banner_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('contact_banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('contact_banner_text', array(
            'default' => _x($contact_banner_text, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('contact_banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 3
        ));
        //  Add home contact overview section to panel
        $wp_customize->add_setting('phone_heading', array(
            'default' => _x($phone_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('phone_heading', array(
            'label' => __('Label 1', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 4
        ));

        $wp_customize->add_setting('phone_content', array(
            'default' => _x($phone, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('phone_content', array(
            'label' => __('Content 1', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 5
        ));
        //  EMAIL
        $wp_customize->add_setting('email_heading', array(
            'default' => _x($email_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('email_heading', array(
            'label' => __('Label 2', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 6
        ));

        $wp_customize->add_setting('email_content', array(
            'default' => _x($email, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('email_content', array(
            'label' => __('Content 2', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 7
        ));
        // LOCATION 1
        $wp_customize->add_setting('loc1_heading', array(
            'default' => _x($loc2_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_heading', array(
            'label' => __('Label 3', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 8
        ));

        $wp_customize->add_setting('loc1_content', array(
            'default' => _x($loc1_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_content', array(
            'label' => __('Content 3', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 9
        ));

        // LOCATION 2
        $wp_customize->add_setting('loc2_heading', array(
            'default' => _x($loc2_heading, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_heading', array(
            'label' => __('Label 4', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 10
        ));

        $wp_customize->add_setting('loc2_content', array(
            'default' => _x($loc2_content, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_content', array(
            'label' => __('Content 4', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 11
        ));


        // test

        $wp_customize->add_setting('loc1_url', array(
            'default' => _x($loc1_url, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_url', array(
            'label' => __('Paste Map 1 URL only from google embed link', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 10
        ));

        $wp_customize->add_setting('loc2_url', array(
            'default' => _x($loc2_url, 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_url', array(
            'label' => __('Paste Map 2 URL only from google embed link', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 10
        ));
    //    //  LOCATION LINK 1
    //     $wp_customize->add_setting('loc1_url', array(
    //         'default' => _x('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>', 'WP Minimalist'),
    //         'type' => 'theme_mod'
    //     ));
    //     $wp_customize->add_control('loc1_url', array(
    //         'label' => __('Embedded Google Map 1 URL', 'WP Minimalist'),
    //         'section' => 'contact_section',
    //         'priority' => 9
    //     ));
    //     //  LOCATION LINK 2
    //     $wp_customize->add_setting('loc2_url', array(
    //         'default' => _x('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>', 'WP Minimalist'),
    //         'type' => 'theme_mod'
    //     ));
    //     $wp_customize->add_control('loc2_url', array(
    //         'label' => __('Embedded Google Map 2 URL', 'WP Minimalist'),
    //         'section' => 'contact_section',
    //         'priority' => 9
    //     )); 
        
    }
    
    add_action('customize_register',  'wp_customize_register');
