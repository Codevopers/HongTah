<?php
/*
Template Name: ContactUs
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
        #about-us{
            background: url(<?php echo get_theme_mod('contact_banner_image', $contact_banner_image);?>) no-repeat center center;
            color:#fff;
        }
        #about-us p{
            width:70%;
            margin:25px auto;
        }
        #list{
            background-color:#ECECEC;
        }
        #list ol{
            margin-left:15px;
            margin-top:25px;
            padding:0;
        }
        #list ol li{
            margin-bottom:10px;
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

<section id="about-us" class="p-0">
    <div class="dark-overlay">
        <div class="container" style="padding:60px 0;">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2><?php echo get_theme_mod('contact_banner_heading', $contact_banner_heading);?></h2>
                    <p><?php echo get_theme_mod('contact_banner_text', $contact_banner_text);?></p>
                </div>
            
            </div>
        </div>
    </div>
</section>
<section class="p-0">
<div class="container" style="padding-top:30px;padding-bottom:30px;">
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