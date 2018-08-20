<?php
/*
Template Name: About
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
            background: url(<?php echo get_theme_mod('about_banner_image', get_bloginfo('template_url').'/images/services-bg.jpg');?>) no-repeat center center;
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
                    <h2><?php echo get_theme_mod('about_banner_heading', $about_banner_heading);?></h2>
                    <p><?php echo get_theme_mod('about_banner_text', $about_text);?></p>
                </div>
            
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="container" style="padding-top:30px;padding-bottom:30px;">
        <div class="row">
            <div class="col-md-6 pr-md-5">
                <div class="d-flex align-items-center mb-2">
                    <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-clipboard-check fa-stack-1x" style="color:#fff;"></i>
                    </span>
                    </div>
                    <div class="p-3">
                        <h3><?php echo get_theme_mod('vision_heading', $vision);?></h3>
                    </div>
                </div>
                <p><?php echo get_theme_mod('vision_text', $vision_content);?></p>
            </div>
            <div class="col-md-6 pr-md-5">
                <div class="d-flex align-items-center mb-2">
                    <div>
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                            <i class="fas fa-shipping-fast fa-stack-1x" style="color:#fff;"></i>
                        </span>
                    </div>
                    <div class="p-3">
                        <h3><?php echo get_theme_mod('mission_heading', $mission);?></h3>
                    </div>
                </div>
                <p><?php echo get_theme_mod('mission_text', $mission_content);?></p>
            </div>
        </div>
    </div> 
</section>
<section id="list">
    <div class="container">
        <?php if ( is_active_sidebar( 'list1' ) ) : ?>
            <?php dynamic_sidebar( 'list1' ); ?>
        <?php endif; ?>
    </div>    
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col pr-md-5">
                <div class="d-flex align-items-center mb-2">
                <div>
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x" style="color:#507474;"></i>
                        <i class="fas fa-user-check  fa-stack-1x" style="color:#fff;"></i>
                    </span>
                </div>
                <div class="p-3">
                    <h3><?php echo get_theme_mod('cpromise_heading', $client_promsie);?></h3>
                </div>
                </div>
                <p><?php echo get_theme_mod('cpromise_text', $client_promise_content);?></p>
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