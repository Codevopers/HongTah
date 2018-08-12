<?php
    function wp_customize_register($wp_customize){
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
        
        $wp_customize->add_setting('home_service_1_heading', array(
            'default' => _x('Trucking', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_heading', array(
            'label' => __('Services Heading 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 3
        ));

        $wp_customize->add_setting('home_service_1_content', array(
            'default' => _x('Hong Tah Logistics Inc., is a trucking service company engaged in hauling and delivering general cargos through prime trucks.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_content', array(
            'label' => __('Services Content 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 4
        ));

        $wp_customize->add_setting('home_service_1_btn_url', array(
            'default' => _x('https://locahost/services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_btn_url', array(
            'label' => __('Button URL 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 5
        ));

        $wp_customize->add_setting('home_service_1_btn_text', array(
            'default' => _x('Go to Services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_1_btn_text', array(
            'label' => __('Button Text 1', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 6
        ));

        // SERVICES 2

        $wp_customize->add_setting('home_service_2_heading', array(
            'default' => _x('Warehouse Storage Solutions', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_heading', array(
            'label' => __('Services Heading 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 7
        ));

        $wp_customize->add_setting('home_service_2_content', array(
            'default' => _x('HTLI offers short-term and long-term warehousing services, prioritizing the security of the items.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_content', array(
            'label' => __('Services Content 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 8
        ));

        $wp_customize->add_setting('home_service_2_btn_url', array(
            'default' => _x('https://locahost/services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_btn_url', array(
            'label' => __('Button URL 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 9
        ));

        $wp_customize->add_setting('home_service_2_btn_text', array(
            'default' => _x('Go to Services', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('home_service_2_btn_text', array(
            'label' => __('Button Text 2', 'WP Minimalist'),
            'section' => 'services_overview',
            'priority' => 10
        ));

        
        
        //ABOUT
        $wp_customize->add_section('about_section',array(
            'title' => __('About Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 150
        ));

        $wp_customize->add_setting('about_banner_image', array(
            'default' => get_bloginfo('template_directory').'/images/services-bg.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_banner_image', array(
            'label' => __('About Banner Image', 'WP Minimalist'),
            'section' => 'about_section',
            'settings' => 'about_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('about_banner_heading', array(
            'default' => _x('Company Profile', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_banner_heading', array(
            'label' => __('Banner Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('about_banner_text', array(
            'default' => _x('Hong Tah Logistics Inc. is a privately owned trucking company that renders land transportation needs of customers and suppliers from the origin point to destination point. It seeks to accrue impressive customer and vendor rating by providing a respectable level of service integrity to its business partners. ', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('about_banner_text', array(
            'label' => __('Banner Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 3
        ));

        // vision

        $wp_customize->add_setting('vision_heading', array(
            'default' => _x('Vision', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('vision_heading', array(
            'label' => __('Vision Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('vision_text', array(
            'default' => _x('A developing and expanding logistics business through reliable, and insightful trucking and transportation services.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('vision_text', array(
            'label' => __('Vision Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 3
        ));
        //  mission
        $wp_customize->add_setting('mission_heading', array(
            'default' => _x('Mission', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('mission_heading', array(
            'label' => __('Mission Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('mission_text', array(
            'default' => _x('To be a reputable and proved trucking service provider in the Philippines.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('mission_text', array(
            'label' => __('Mission Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 3
        ));
        //  clientpromise
        $wp_customize->add_setting('cpromise_heading', array(
            'default' => _x('Client Promise', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('cpromise_heading', array(
            'label' => __('Client Promise Heading', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('cpromise_text', array(
            'default' => _x('We culture time, effort and fund efficiency in all parts of our operations.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('cpromise_text', array(
            'label' => __('Client Promise Text', 'WP Minimalist'),
            'section' => 'about_section',
            'priority' => 3
        ));
        //SERVICES 
        $wp_customize->add_section('service_section',array(
            'title' => __('Services Page', 'WP Minimalist'),
            'description' => sprintf(__('Options for banner','WP Minimalist')),
            'priority' => 160
        ));

        $wp_customize->add_setting('services_banner_image', array(
            'default' => get_bloginfo('template_directory').'/images/services-bg.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_banner_image', array(
            'label' => __('Services Banner Image', 'WP Minimalist'),
            'section' => 'service_section',
            'settings' => 'services_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('services_banner_heading', array(
            'default' => _x('What we do', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('services_banner_text', array(
            'default' => _x('Hong Tah Logistics Inc., provides trucking services to companies demanding goods-forwarding services.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('services_banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 3
        ));

        //  trucking
        $wp_customize->add_setting('trucking_heading', array(
            'default' => _x('Trucking', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('trucking_heading', array(
            'label' => __('Trucking Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 4
        ));
        
        $wp_customize->add_setting('trucking_text', array(
            'default' => _x('Hong Tah Logistics Inc., is a trucking service company engaged in hauling and delivering general cargos through prime trucks. Setting reliable standards for reasonable-cost cargo moving in Metro Manila trips. We believe in being diligent and fast in every transaction with our clients, giving full safety and priority to customer’s goods. Our professional employees make sure that the client’s items get moved safely and securely. ', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('trucking_text', array(
            'label' => __('Trucking Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 5
        ));
        $wp_customize->add_setting('trucking_image', array(
            'default' => get_bloginfo('template_directory').'/images/banner1.jpg',
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
            'default' => _x('Warehouse Storage Solutions', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('warehouse_heading', array(
            'label' => __('Warehouse Heading', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 7
        ));
        
        $wp_customize->add_setting('warehouse_text', array(
            'default' => _x('HTLI offers short-term and long-term warehousing services, prioritizing the security of the items. We also offer last-minute storage solutions without compromising the condition and qualities of the goods. Our quality service are made sure to meet your supply-chain processs and standards as easily and fast as possible.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('warehouse_text', array(
            'label' => __('Warehouse Text', 'WP Minimalist'),
            'section' => 'service_section',
            'priority' => 8
        ));
        $wp_customize->add_setting('warehouse_image', array(
            'default' => get_bloginfo('template_directory').'/images/banner3.jpg',
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
            'default' => get_bloginfo('template_directory').'/images/services-bg.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_banner_image', array(
            'label' => __('Contact Banner Image', 'WP Minimalist'),
            'section' => 'contact_section',
            'settings' => 'contact_banner_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('contact_banner_heading', array(
            'default' => _x('Contact Us', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('contact_banner_heading', array(
            'label' => __('Heading', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 2
        ));
        
        $wp_customize->add_setting('contact_banner_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('contact_banner_text', array(
            'label' => __('Text', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 3
        ));
        //  Add home contact overview section to panel
        $wp_customize->add_setting('phone_heading', array(
            'default' => _x('Phone', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('phone_heading', array(
            'label' => __('Label 1', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 1
        ));

        $wp_customize->add_setting('phone_content', array(
            'default' => _x('+63 2 952-5134', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('phone_content', array(
            'label' => __('Content 1', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 2
        ));
        //  EMAIL
        $wp_customize->add_setting('email_heading', array(
            'default' => _x('Email', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('email_heading', array(
            'label' => __('Label 2', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 3
        ));

        $wp_customize->add_setting('email_content', array(
            'default' => _x('hongtahlogistics@gmail.com', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('email_content', array(
            'label' => __('Content 2', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 4
        ));
        // LOCATION 1
        $wp_customize->add_setting('loc1_heading', array(
            'default' => _x('Main Location', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_heading', array(
            'label' => __('Label 3', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 5
        ));

        $wp_customize->add_setting('loc1_content', array(
            'default' => _x('Polylite Industrial Corp., Alabang–Zapote Road, Talon, Las Pinas, 1740 Metro Manila', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_content', array(
            'label' => __('Content 3', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 6
        ));

        // LOCATION 2
        $wp_customize->add_setting('loc2_heading', array(
            'default' => _x('Parking Location', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_heading', array(
            'label' => __('Label 4', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 7
        ));

        $wp_customize->add_setting('loc2_content', array(
            'default' => _x('Polylite Industrial Corp., Alabang–Zapote Road, Talon, Las Pinas, 1740 Metro Manila', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_content', array(
            'label' => __('Content 4', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 8
        ));
        //  LOCATION LINK 1
        $wp_customize->add_setting('loc1_url', array(
            'default' => _x('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc1_url', array(
            'label' => __('Embedded Google Map 1 URL', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 9
        ));
        //  LOCATION LINK 2
        $wp_customize->add_setting('loc2_url', array(
            'default' => _x('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>', 'WP Minimalist'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('loc2_url', array(
            'label' => __('Embedded Google Map 2 URL', 'WP Minimalist'),
            'section' => 'contact_section',
            'priority' => 9
        ));
        
    }
    add_action('customize_register',  'wp_customize_register');
