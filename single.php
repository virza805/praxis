<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Praxis
 */

get_header();
?>

 <!-- Start Other Hero -->
          <section class="other-hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="other-hero-overlay"></div>
            <div class="container">
                <div class="other-hero-text">
                    <h1><?php echo esc_html__('Blog','praxis') ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php bloginfo('home'); ?>"><?php echo esc_html__('Home','praxis'); ?></a></li>
                        <li><?php echo esc_html__('Blog Details','praxis') ?></li>
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
						
						<?php if (have_posts()) : while (have_posts()) :the_post(); ?>

                        <article class="post">
                            <header class="entry-header">
                                <div  class="post-thumbnail"><?php the_post_thumbnail('praxis-blog-imge'); ?></div>
                                <div class="post-details-wrap">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                    <div class="byline">
                                        <span class="author">
                                            Posted On: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </span>
                                        <span class="posted-on"><?php esc_html_e('Date:','praxis') ?> <a href="<?php the_permalink(); ?>"><?php the_time('j M Y'); ?></a>
                                        </span>

                                        <span class="tags">
                                        	<?php the_tags('Tags:',',','<br>'); ?>
                                        </span>
                                    </div>
                                </div><!-- .post-details-wrap -->
                            </header>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>

					<?php endwhile; endif; ?>

                        <div class="social-share">
                            <span class="social-share-title">share this post on:</span>
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- .social-share -->
                        <?php 

if ( comments_open() || get_comments_number() ) {
      comments_template();
  }


?><!-- .comments-area -->
                    </main><!-- .col -->
                    <aside class="col-md-3 col-sm-4 sidebar">
                       
                        <?php dynamic_sidebar('sidebar'); ?>
                        
                    </aside><!-- .col -->
                </div>
            </div>
        </div>
        <!-- End Site Content --> 


<?php
get_footer();
