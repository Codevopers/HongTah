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

    <?php wp_head();?>
    <style>
        #services {
            position:relative;
            background-image: url(<?php echo get_theme_mod('services_overview_bgimage', get_bloginfo('template_url').'/images/services-bg.jpg');?>);
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
            <div class="carousel-item active" style="background: url(<?php echo get_theme_mod('home_image1', get_bloginfo('template_url').'/images/banner1.jpg');?>) no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
                <div class="dark-overlay">
                <div class="carousel-caption d-none d-md-block">
                    <h1><?php echo get_theme_mod('home_tagline','Possibilities beyond cargo.');?></h1>
                </div>
                </div>
            </div>
            
            <div class="carousel-item" style="background: url(<?php echo get_theme_mod('home_image2', get_bloginfo('template_url').'/images/banner2.jpg');?>)no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
            </div>

            <div class="carousel-item" style="background: url(<?php echo get_theme_mod('home_image3', get_bloginfo('template_url').'/images/banner3.jpg');?>)no-repeat center center;width:100%;height:400px;background-size:cover;background-position:center;background-color:rgba(0,0,0,0.7);">
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
                <h3><?php echo get_theme_mod('about_overview_heading','About Hong Tah Logistics Inc.');?></h3>
                <p><?php echo get_theme_mod('about_overview_text','Hong Tah Logistics Inc. is a privately owned trucking company that renders land transportation needs
                    of customers and suppliers from the origin point to destination point. It seeks to accrue impressive
                    customer and vendor rating by providing a respectable level of service integrity to its business
                    partners. ');?></p>

            </div>
            <div class="col-md-3 text-center">
                <a href="<?php echo get_theme_mod('about_overview_btn_url','https://locahost/about-us');?>" class="btn btn-primary"><?php echo get_theme_mod('about_overview_btn_text','Learn More');?></a>
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
                  <h4><?php echo get_theme_mod('home_service_1_heading','Trucking');?></h4>
                  <p><?php echo get_theme_mod('home_service_1_content','Hong Tah Logistics Inc., is a trucking service company engaged in hauling and delivering general cargos through prime trucks.');?></p>
                  <a href="<?php echo get_theme_mod('home_service_1_btn_url','https://locahost/about-us');?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_1_btn_text','Go to Services');?></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hongtah-services text-center">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x icon-background"></i>
                        <i class="fas fa-warehouse fa-stack-1x" style="color:#212529;"></i>
                    </span>
                    <h4><?php echo get_theme_mod('home_service_2_heading','Warehouse Storage Solutions');?></h4>
                  <p><?php echo get_theme_mod('home_service_2_content','HTLI offers short-term and long-term warehousing services, prioritizing the security of the items.');?></p>
                  <a href="<?php echo get_theme_mod('home_service_2_btn_url','https://locahost/about-us');?>" class="btn btn-primary"><?php echo get_theme_mod('home_service_2_btn_text','Go to Services');?></a>
                </div>
            </div>
        </div>
    </div>
    </div>    
</section>
<div>
    <div class="container" style="padding-top:30px;padding-bottom:30px;">
    <h3>Contact Us</h3>
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
                        <h5><?php echo get_theme_mod('phone_heading','Phone');?></h5>
                        <?php echo get_theme_mod('phone_content','+63 2 952-5134');?>
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
                        <h5><?php echo get_theme_mod('email_heading','Email');?></h5>
                        <?php echo get_theme_mod('email_content','hongtahlogistics@gmail.com');?>
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
                        <h5><?php echo get_theme_mod('loc1_heading','Main Location');?></h5>
                        <?php echo get_theme_mod('loc1_content','Polylite Industrial Corp., Alabang–Zapote Road, Talon, Las Pinas, 1740 Metro Manila');?>
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
                        <h5><?php echo get_theme_mod('loc2_heading','Parking Location');?></h5>
                        <?php echo get_theme_mod('loc2_content','Polylite Industrial Corp., Alabang–Zapote Road, Talon, Las Pinas, 1740 Metro Manila');?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?php if ( is_active_sidebar( 'map1' ) ) : ?>
                    <?php dynamic_sidebar( 'map1' ); ?>
                <?php endif; ?>
                <!-- <?php echo get_theme_mod('loc1_url','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>');?>-->            
            </div>
            <div class="col-md-6">
                <?php if ( is_active_sidebar( 'map2' ) ) : ?>
                    <?php dynamic_sidebar( 'map2' ); ?>
                <?php endif; ?>
                <!--<?php echo get_theme_mod('loc2_url','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6437844266634!2d120.982331315413!3d14.447680789900085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532175656113" width="100%" height="300" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>');?>-->            
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