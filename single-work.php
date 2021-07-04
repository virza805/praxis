 <?php

 get_header();
?>
  <!-- Start Other Hero -->

  <?php while(have_posts()):the_post(); ?>
          <section class="other-hero" style="background-image: url(<?php the_post_thumbnail_url();?>);">
            <div class="other-hero-overlay"></div>
            <div class="container">
                <div class="other-hero-text">
                    <h1><?php echo esc_html__('Our Portfolio','praxis') ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php bloginfo('home'); ?>"><?php echo esc_html__('Home','praxis'); ?></a></li>
                        <li><a href="<?php bloginfo('portfolio'); ?>"><?php echo esc_html('portfolio') ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Other Hero -->

        <!-- Start Portfolio Details -->
        <section class="portfolio-details section">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8 port-details-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div><!-- .col -->
                    <div class="col-md-4">
                        <div class="port-details-text">
                            <div class="port-details-head">
                                <h3><?php the_title(); ?></h3>
                                <span><?php echo esc_html__('Date:','praxis'); the_date('M d, Y'); ?></span>
                            </div>
                            <div class="port-details-body">
                               <?php the_content(); ?>
                            </div>
                            <ul class="portfolio-info">
                                <li><span><?php echo esc_html__('Category:','praxis'); ?></span>

     
                    
                    <?php 
                        $category = get_terms('works_cat',array('hide_empty'=> true));
                        foreach($category as $w_cat):
                            echo $w_cat->slug .' ,';
                        endforeach;  

                    ?>
                


                                </li>
                                <li><span><?php echo esc_html__('Client: ','praxis') ?></span><?php echo esc_html__('Creative Agency','praxis') ?></li>
                            </ul>
                            <div class="social-share">
                               <span class="social-share-title"> <?php esc_html__('share this post on:','praxis'); ?></span>
                            <div class="social-btn">
                                <a href="<?php echo esc_url('https://www.facebook.com');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.twitter.com');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.instragram.com');?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.pinterest.com');?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url('https://www.behance.com');?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                            </div><!-- .social-share -->
                        </div>
                    </div><!-- .col -->
               
                </div>
            </div>
        </section>
         <?php endwhile;?>
        <!-- End Portfolio Details -->
<?php
get_footer();