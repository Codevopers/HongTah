<?php
/*
Template Name: Services
*/
?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <!-- <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <title><?php bloginfo('name')?> | <?php is_front_page()? bloginfo('description') : wp_title();?></title>
    <?php include get_template_directory().'/include/variables.php';?>
    <?php wp_head();?>
    <style>
        #services{
            background: url(<?php echo get_theme_mod('services_banner_image', $service_banner_image);?>) no-repeat center center;
            color:#fff;
        }
        #services p{
            width:70%;
            margin:25px auto;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <div id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- LOGO -->
                    <a class="navbar-brand" href="#">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                                echo '<img src="'. esc_url( $logo[0] ) .'" width="180" height="80" alt="Hong Tah Logistics Inc. logo">';
                        } else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                        ?>
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- BOOTSTRAP MENU -->
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarNav',
                                'menu_class'        => 'navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())
                            );
                        ?>
                </nav>
            </div>
        </div>

<section id="services" class="p-0">
    <div class="dark-overlay">
        <div class="container" style="padding:60px 0;">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2><?php echo get_theme_mod('services_banner_heading', $service_banner_heading);?></h2>
                    <p><?php echo get_theme_mod('services_banner_text', $service_banner_text);?></p>
                </div>
            
            </div>
        </div>
    </div>
</section>
<section class="services p-0 position-relative" style="background:#f8f8f8;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 p-0">
                <div class="trucking">
                    <span class="fa-stack fa-3x" >
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-truck-moving fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    <h3><?php echo get_theme_mod('trucking_heading', $service1_heading);?></h3>
                    <p><?php echo get_theme_mod('trucking_text', $service1_content);?></p>
                </div>
            </div>
        </div>
    </div> 
    <div class="d-none d-md-block" style="position:absolute;top:0;right:0;height:600px;width:50%;background:url(<?php echo get_theme_mod('trucking_image', $service1_bgimage);?>)  center center;"></div>
    <div class="d-sm-block d-md-none" style="height:220px;width:100%;background:url(<?php echo get_theme_mod('trucking_image', $service1_bgimage);?>)  center center;background-repeat:no-repeat;background-size:cover;"></div>
</section>
<section class="services p-0 position-relative" style="/*color:#fff;background:#507474;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 p-0">
            </div>
            <div class="col-md-6 p-0">
                <div class="warehouse">
                <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-warehouse fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    <h3><?php echo get_theme_mod('warehouse_heading', $service2_heading);?></h3>
                    <p><?php echo get_theme_mod('warehouse_text', $service2_content);?></p>                 
                </div>
            </div>
        
        </div>
    </div> 
    <div class="d-none d-md-block" style="position:absolute;top:0;left:0;height:600px;width:50%;background:url(<?php echo get_theme_mod('warehouse_image', $service2_bgimage);?>)  center center;"></div>
    <div class="d-sm-block d-md-none" style="height:220px;width:100%;background:url(<?php echo get_theme_mod('warehouse_image', $service2_bgimage);?>)  center center;background-repeat:no-repeat;background-size:cover;"></div>

</section>



<section id="footer">
    <div class="text-center"><?php bloginfo('name');?> <?php echo Date('Y');?> Copyright. All Rights Reserved. </div>
</section>
    </div>
    <?php wp_footer()?>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>

</body>

</html>