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
        
                </div>
            </div>
        </section>
        <!-- End Other Hero -->

<section class="home-blog section">
        	<div class="container_full">
        		<div class="section-header text-center">
        			<h2><?php echo get_theme_mod('blog_title');?></h2>
        			<p><?php echo get_theme_mod('blog_des'); ?></p>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="row">
                            
                            <?php while(have_posts()):the_post();?>
                            <div class="col-lg-6">
                                <article class="post">
                                    <header class="entry-header">
                                        <a href="<?php the_permalink();?>" class="post-thumbnail"><?php echo  the_post_thumbnail();?></a>
                                    </header>
                                    <div class="post-body">
                                        <div class="post-details-wrap">
                                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php  echo the_title();?></a></h2>
                                            <div class="byline">
                                                <span class="home-posted-on"><?php echo the_time('d M y')?></span>
                                            </div>
                                        </div><!-- .post-details-wrap -->
                                        <div class="entry-content">
                                            <p><?php echo //the_index(10);
                                                wp_trim_words(get_the_content(),'13','');
                                            ?> </p>
                                            <a href="<?php the_permalink();?>" class="h-readmore-btn"><?php echo esc_html('READ MORE');?></a>
                                        </div>
                                    </div><!-- .post-body -->
                                </article>
                            </div><!-- .col -->
                        
                        <?php endwhile;?>
                        </div>
                        <?php 
                        $pagination= get_the_posts_pagination(array(
                            'show_all'=> false,
                            
                            'prev_text'=>__('<<', 'praxis'),
                            'next_text'=>__('>>','praxis'),
                                ));

                        $pagination = str_replace('navigation pagination', 'post-navigation', $pagination);
                        $pagination = str_replace('nav-links', 'nav-all-post', $pagination);
                        $pagination =str_replace('current', 'active-post', $pagination);
                        $pagination =str_replace('span', 'a', $pagination);

                        echo $pagination;         
                        ?>
                    </div>
                <div class="col-md-3">
                    <aside class="col-md-10 col-sm-4 sidebar">
                       
                       <?php dynamic_sidebar('sidebar'); ?>
                       
                    </aside><!-- .col -->
                </div>
                </div> 
            
        </section>
        

<?php
get_sidebar();
get_footer();


