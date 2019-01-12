<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico"> -->

    <title><?php bloginfo('name')?> | <?php is_front_page()? bloginfo('description') : wp_title();?></title>
    <?php include get_template_directory().'/include/variables.php';?>
    <?php wp_head();?>
    <style>
        #services {
            position:relative;
            background-image: url(<?php echo get_theme_mod('services_overview_bgimage', $lp_services_bgimage);?>);
            background-size: cover;
            color: #fff;
            background-position: center, center;
            width:100%;
        }
        #services .hongtah-services img {
            display: block;
            margin: 0 auto;
        }
        #services .hongtah-services h4 {
            text-align: center;
            margin-top: 20px;
        }
        #services .hongtah-services p {
            text-align: center;
            width:80%;
            margin:auto;
        }
        #services .hongtah-services a {
            margin-top:20px;
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
<div id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background: url(<?php echo get_theme_mod('home_image1', $home_banner_image1);?>) no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
                <div class="dark-overlay">
                <div class="carousel-caption d-none d-md-block">
                    <h1><?php echo get_theme_mod('home_tagline', $tagline);?></h1>
                </div>
                </div>
            </div>
            
            <div class="carousel-item" style="background: url(<?php echo get_theme_mod('home_image2', $home_banner_image2);?>)no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
            </div>

            <div class="carousel-item" style="background: url(<?php echo get_theme_mod('home_image3', $home_banner_image3);?>)no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
            </div>
            
        </div>
        <!-- CAROUSEL CONTROLS -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="carousel-controls">                   
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="carousel-controls">  
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </div>
        </a>
    </div>
</div>
<section id="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h3><?php echo get_theme_mod('about_overview_heading', $lp_about_heading);?></h3>
                <p><?php echo get_theme_mod('about_overview_text', $lp_about_text);?></p>

            </div>
            <div class="col-md-3 text-center">
                <a href="<?php echo get_theme_mod('about_overview_btn_url', $lp_about_btnurl);?>" class="btn btn-primary"><?php echo get_theme_mod('about_overview_btn_text','Learn More');?></a>
            </div>
        </div>
    </div>
</section>
<section id="services" class="p-0">
    <div class="dark-overlay">
    <div class="container" style="padding:90px 0;">
        <h3 class="text-center"><?php echo get_theme_mod('services_overview_heading','Services');?></h3>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-5">
                <div class="hongtah-services text-center">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x icon-background"></i>
                        <i class="fas fa-truck-moving fa-stack-1x" style="color:#212529;"></i>
                    </span>
                  <h4><?php echo get_theme_mod('trucking_heading', $service1_heading);?></h4>
                  <p><?php echo get_theme_mod('home_service_1_content', $lp_service1_text);?></p>
                  <div class="d-md-none d-block"><a href="<?php echo get_theme_mod('home_service_1_btn_url', $lp_service1_url);?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_1_btn_text', $lp_service1_btn);?></a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hongtah-services text-center">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x icon-background"></i>
                        <i class="fas fa-warehouse fa-stack-1x" style="color:#212529;"></i>
                    </span>
                    <h4><?php echo get_theme_mod('warehouse_heading', $service2_heading);?></h4>
                  <p><?php echo get_theme_mod('home_service_2_content', $lp_service2_text);?></p>
                  <div class="d-md-none d-block"><a href="<?php echo get_theme_mod('home_service_2_btn_url', $lp_service2_url);?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_2_btn_text', $lp_service2_btn);?></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-md-block d-none text-center"><a href="<?php echo get_theme_mod('home_service_2_btn_url', $lp_service2_url);?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_2_btn_text', $lp_service2_btn);?></a></div>
            </div>
            <div class="col-md-6">
                <div class="d-md-block d-none text-center"><a href="<?php echo get_theme_mod('home_service_2_btn_url', $lp_service2_url);?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_2_btn_text', $lp_service2_btn);?></a></div>
            </div>
        </div>
    </div>
    </div>    
</section>
<div>
    <div class="container" style="padding-top:30px;padding-bottom:30px;">
    <h3><?php echo get_theme_mod('contact_banner_heading', $contact_banner_heading);?></h3>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center my-2">
                    <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-phone fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    </div>
                    <div class="p-3">
                        <h5><?php echo get_theme_mod('phone_heading', $phone_heading);?></h5>
                        <?php echo get_theme_mod('phone_content', $phone);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                
                <div class="d-flex align-items-center my-2">
                    <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="far fa-envelope fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    </div>
                    <div class="p-3">
                        <h5><?php echo get_theme_mod('email_heading', $email_heading);?></h5>
                        <?php echo get_theme_mod('email_content', $email);?>
                    </div>
                </div>
            </div>
     
            <div class="col-md-6">

                <div class="d-flex align-items-center my-2">
                    <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-map-marker-alt fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    </div>
                    <div class="p-3">
                        <h5><?php echo get_theme_mod('loc1_heading', $loc1_heading);?></h5>
                        <?php echo get_theme_mod('loc1_content', $loc1_content);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center my-2">
                    <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-map-marker-alt fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    </div>
                    <div class="p-3">
                        <h5><?php echo get_theme_mod('loc2_heading', $loc2_heading);?></h5>
                        <?php echo get_theme_mod('loc2_content', $loc2_content);?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- <?php if ( is_active_sidebar( 'map1' ) ) : ?>
                    <?php dynamic_sidebar( 'map1' ); ?>
                <?php endif; ?> -->
                <iframe src="<?php echo get_theme_mod('loc1_url',$loc1_url);?>" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen/></iframe>        
            </div>
            <div class="col-md-6">
                <!-- <?php if ( is_active_sidebar( 'map2' ) ) : ?>
                    <?php dynamic_sidebar( 'map2' ); ?>
                <?php endif; ?> -->
                <iframe src="<?php echo get_theme_mod('loc2_url', $loc2_url);?>" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen/></iframe>        
            </div>
        </div>
    </div>

</div>
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