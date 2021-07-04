<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxis
 */

?>


<!DOCTYPE doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Pressionate" name="author"/>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
       
        <!-- Favicon Icon -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/vir.png" rel="icon"/>
     
        <!-- Modernizr -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
       


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    	<!-- Start Preloader -->
    	<div id="preloader">
		 	<div id="status">
		    	<div class="spinner">
			     	<div class="rect1"></div>
			     	<div class="rect2"></div>
			     	<div class="rect3"></div>
			     	<div class="rect4"></div>
			     	<div class="rect5"></div>
		    	</div>
		 	</div>
		</div>
		<!-- End Preloader -->
        <div class="container text-center">
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sbgs_logo.png" style="margin-top: 80px; height: 130; width:150;">
                    </div>
                    <div class="col-md-7">
                    <h2 style =' background-color: #00a651;
  
  color: #fff;
  display: inline-block;
  padding: 3px 70px 3px 0px;
  margin: 0px;
  margin-top: 80px;
  font-weight: 700;
  max-height: 100px;' > <span style="background-color: #ed1c24;
  height: 100%;
  padding: 0 15px 0 70px;" >Savar Boys</span> & Girls School</h2>
                        <h5 class="text-danger">Rajation, Savar, Dhaka-1340</h5>
                        <h6>Cell: 01613-948803, 01760-505554</h6>
                        <!-- <p class="text-success">Email: school.sbgs@gmail.com</p> -->
                    </div>
                    <div class="col-md-2 mt-3">
                       <div class="social-share" style="margin-top:80px;">
                            <span class="social-share-title">Our Social Link This:</span>
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        <!-- Start Site Header -->
        <header class="site-header">
            
            <div class="container header-wrap">
                <div class="site-branding">
                <!-- For Image Logo -->
                    <a href="index.html" class="custom-logo-link">
                   
                    <?php 
                    if(function_exists('cs_get_option')){
                       $site = cs_get_option('site_title'); 
                       $logo = cs_get_option('logo');
                       $img = wp_get_attachment_image_src($logo,'full');
                      // print_r($img); 
                       $img_show = cs_get_option('logo_swi'); 
                       $tit_show = cs_get_option('title_swi');
                   }else{
                    $site = 'Default';
                   }
                     ?>
                     <?php if($img_show == true ) {?>
                      <img src="<?php echo $img[0]; ?>" alt="" class="custom-logo">
                      <?php }  ?>
                      
                      <?php if($tit_show == true ) {?>
                    <h2><?php echo esc_html($site); ?></h2>
                    <?php }  ?>
                </a>
                <!-- For Site Title -->
                <!-- <span class="site-title">
                    <a href="index.html">Buildm</a>
                </span> -->
                </div>
                <nav class="primary-nav">
                    <?php praxis_nav_menu(); ?>
                    <!--
                    <ul class="primary-nav-list">
                        <li class="menu-item menu-item-has-children current-menu-item"><a href="index.html">HOME</a>
                            <ul>
                                <li class="menu-item"><a href="home-1.html">HOME 1</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="about.html">ABOUT</a></li>
                        <li class="menu-item menu-item-has-children"><a href="#">PORTFOLIO</a>
                            <ul>
                                <li class="menu-item"><a href="portfolio-masonry.html">PORTFOLIO MASONRY</a></li>
                                <li class="menu-item"><a href="portfolio-masonry-gutter-less.html">PORTFOLIO MASONRY - GUTTER LESS</a></li>
                                <li class="menu-item"><a href="portfolio-even-grid.html">PORTFOLIO EVEN GRID</a></li>
                                <li class="menu-item"><a href="portfolio-even-grid-gutter-less.html">PORTFOLIO EVEN GRID-GUTTER LESS</a></li>
                                <li class="menu-item"><a href="portfolio-details.html">PROJECTS DETAILS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="blog.html">BLOG</a>
                            <ul>
                                <li class="menu-item"><a href="blog-details.html">BLOG DETAILS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="contact.html">CONTACT</a></li>
                    </ul>
                    -->
                </nav>
            </div><!-- .header-wrap -->
        </header>
        <!-- End Site Header -->