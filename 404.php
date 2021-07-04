<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Praxis
 */

get_header();
?>

		
	   <!-- Start Other Hero -->
          <section class="other-hero" style="background-image: url(<?php echo get_theme_mod('banner_image');?>);">
            <div class="other-hero-overlay"></div>
            <div class="container">
                <div class="other-hero-text">
                    <h1><?php bloginfo('title') ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php bloginfo('home'); ?>"><?php echo esc_html__('Home','praxis'); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Other Hero -->
        

        <!-- Start Site Content -->
        <div class="blog-details site-content section">
            <div class="container">
                <div class="row">
                    <main class="col-md-9 col-sm-8 site-main">
                        <h1><?php echo esc_html__('page 404, not found','praxis') ?></h1>
                        <h3><?php echo esc_html__('please try correct way ---- go to home','praxis') ?></h3>
                        <a href="<?php bloginfo('home'); ?>"><?php echo esc_html__('Home','praxis'); ?></a>
                        <div class="social-share">
                            <span class="social-share-title"> <?php echo esc_html__('share this post on:','praxis'); ?></span>
                            <div class="social-btn">
                                <a href="<?php echo esc_url('https://www.facebook.com');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.twitter.com');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.instragram.com');?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.pinterest.com');?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.behance.com');?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- .social-share -->
                      <?php 

                     


                      ?>
                    </main><!-- .col -->
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <!-- End Site Content --> 


<?php
get_footer();
