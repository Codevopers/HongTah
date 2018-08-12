<?php   
    //  Pick up style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //   Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    //  Theme Support
    function wpb_theme_setup(){
        //  Nav menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }
    add_action('after_setup_theme','wpb_theme_setup');

    add_theme_support( 'custom-logo' );

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    
    //  WIDGETS
    /**
 * Register our sidebars and widgetized areas.
 *
 */
    function wp_minimalist_widgets_init() {

        /* register_sidebar( array(
            'name'          => 'About Feature 1',
            'id'            => 'feature_1',
            'before_widget' => '<div class="feature mr-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar( array(
            'name'          => 'About Feature 2',
            'id'            => 'feature_2',
            'before_widget' => '<div class="feature mr-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar( array(
            'name'          => 'About Feature 3',
            'id'            => 'feature_3',
            'before_widget' => '<div class="feature mr-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )); */

        register_sidebar( array(
            'name'          => 'About List',
            'id'            => 'list1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        //SERVICES OVERVIEW
        register_sidebar( array(
            'name'          => 'Services Overview 1',
            'id'            => 'servicesoverview_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));

        register_sidebar( array(
            'name'          => 'Services Overview 2',
            'id'            => 'servicesoverview_2',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ));
        //CONTACT OVERVIEW
        register_sidebar( array(
            'name'          => 'Contact Overview 1',
            'id'            => 'contactoverview_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ));

        register_sidebar( array(
            'name'          => 'Contact Overview 2',
            'id'            => 'contactoverview_2',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ));

        register_sidebar( array(
            'name'          => 'Contact Overview 3',
            'id'            => 'contactoverview_3',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5>',
        ));
        //SERVICES PAGE
        register_sidebar( array(
            'name'          => 'Services 1',
            'id'            => 'services_1',
            'before_widget' => '<div class="">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar( array(
            'name'          => 'Services 2',
            'id'            => 'services_2',
            'before_widget' => '<div class="feature mr-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));
    }
    add_action( 'widgets_init', 'wp_minimalist_widgets_init' );

    //  Customizer File
    require get_template_directory() . '/include/customizer.php';