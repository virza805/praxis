<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogin
 */
get_header();
?>



        
       <!-- Start Other Hero -->
          <section class="other-hero" style="background-image: url(<?php echo get_theme_mod('banner_image');?>);">
            <div class="other-hero-overlay"></div>
            <div class="container">
                <div class="other-hero-text">
                    <h1><?php echo esc_html__('Search','praxis') ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php bloginfo('home'); ?>"><?php echo esc_html__('Home','praxis'); ?></a></li>
                        <li><?php echo esc_html__('Search','praxis') ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Other Hero -->
        
        

        <!-- Start Site Content -->
        <div class="blog-details site-content section">
            <div class="container">

                <div class="row">
                   <h1>The result:</h1>
                    <?php while(have_posts()):the_post(); ?>
                    <main class="col-md-9 col-sm-8 site-main">
                        
                        <article class="post">
                            <header class="entry-header">
                                <div  class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
                                <div class="post-details-wrap">
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                    <div class="byline">
                                        <span class="author">
                                        <?php   echo  esc_html__('Posted On:','praxis') ?> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                                        </span>
                                        <span class="posted-on">
                                        <?php esc_html__('Date:','praxis') ?><a href="<?php the_permalink(); ?>"><?php the_date('d M Y');?></a>
                                        </span>
                                    </div>
                                </div><!-- .post-details-wrap -->
                            </header>
                            <div class="entry-content">
                                <?php echo  wp_trim_words(get_the_content(),'13','');;?>
            
                            </div>
                        </article>

                    
                    </main><!-- .col -->
                      <div class="sssss">
                    <?php get_sidebar(); ?>
                </div>
                <?php endwhile;

                ?>

              
                 
                </div>


            </div>
                  <?php 
                $pagination= get_the_posts_pagination(array(
                    'show_all'=> false,
                    
                    'prev_text'=>__('<<', 'praxis'),
                    'next_text'=>__('>>','praxis'),
                    // 'screen_reader_text'=>' ',
                        ));

                $pagination = str_replace('navigation pagination', 'post-navigation', $pagination);
                $pagination = str_replace('nav-links', 'nav-all-post', $pagination);
                $pagination =str_replace('current', 'active-post', $pagination);
                 $pagination =str_replace('span', 'a', $pagination);

                echo $pagination;         
                ?>
        </div>
        <!-- End Site Content --> 


<?php

get_footer();
