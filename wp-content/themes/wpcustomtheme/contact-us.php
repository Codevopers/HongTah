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

    <title><?php bloginfo('name')?> | <?php is_front_page()? bloginfo('description') : wp_title();?></title>

    <?php wp_head();?>
    <style>
        #about-us{
            background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/images/services-bg.jpg');?>) no-repeat center center;
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
                    <h2>Contact Us</h2>
                </div>
            
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="container" style="padding:60px 0;">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div class="feature">
                        <img src="http://localhost/hongtah/wp-content/uploads/2018/07/truck-icon.png" alt="">
                    </div>
                    <div class="feature">
                        <h3>Phone</h3>
                        <p>+63 2 952-5134</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div class="feature">
                        <img src="http://localhost/hongtah/wp-content/uploads/2018/07/storage-icon.png" alt="">
                    </div>
                    <div class="feature">
                        <h3>Email</h3>
                        <p>hongtahlogistics@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<section class="d-none" id="list">
    <div class="container">
    <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div class="feature">
                        <img src="<?php get_bloginfo('template_url').'/images/truck-icon.png';?>" alt="">
                    </div>
                    <div class="feature">
                        <h3>Phone</h3>
                        <p>+63 2 952-5134</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div class="feature">
                        <img src="" alt="">
                    </div>
                    <div class="feature">
                        <h3>Email</h3>
                        <p>hongtahlogistics@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
<section style="background-color:#f7f7f7;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6638121143965!2d120.98617031541315!3d14.446527989900757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1e2cb52ff63%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532962855338" width="100%" height="350" frameborder="0" style="border:0;padding:0;margin:0;" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
            <div class="pl-5">
            <h3>Main Location</h3>
            <p>Km. 18 3rd/Flr, Polylite House, Annex Building, Alabang-Zapote Rd. Las Piñas City, Metro Manila, Philippines 1747</p>
            </div>
            </div>
        <div class="col-md-6">
        <div class="pr-5">
        <h3>Parking Location</h3>
            <p>Km. 18 3rd/Flr, Polylite House, Annex Building, Alabang-Zapote Rd. Las Piñas City, Metro Manila, Philippines 1747</p>
            </div>
            </div>
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6638121143965!2d120.98617031541315!3d14.446527989900757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1e2cb52ff63%3A0xc39bd54d987dc9e3!2sPolylite+Industrial+Corp.!5e0!3m2!1sen!2sph!4v1532962855338" width="100%" height="350" frameborder="0" style="border:0;padding:0;margin:0;" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
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