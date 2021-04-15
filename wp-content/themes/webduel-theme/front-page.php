<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<!--start home area-->
<section id="home-area" data-scroll-index="0">
        <div class="container">
            <?php 

                $hero = array(
                    'post_type' => 'hero',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'hero-category',
                            'field'    => 'slug',
                            'terms'    => array( 'home-page-hero'),
                        )
                        ), 
                        'orderby' => 'date', 
                        'order' => 'ASC'
                );
                $heroQuery = new WP_Query( $hero );

            while($heroQuery->have_posts()){ 
                $heroQuery->the_post(); 

                ?>
            <div class="row">
                <!--start caption content-->
                <div class="col-md-6">
                    <div class="caption d-table">
                        <div class="d-table-cell align-middle">
                            <h1><?php echo get_the_title();?></h1>
                            <p><?php echo get_the_content(); ?></p>
                            <a href="<?php echo get_field('link');?>"><?php echo get_field('link_title');?></a>
                        </div>
                    </div>
                </div>
                <!--end caption content-->
                <!--start caption image-->
                <div class="col-md-6">
                    <div class="caption-img text-right">
                        <img src="<?php echo get_site_url();?>/wp-content/uploads/2021/04/hero-tyre.png" class="img-fluid animation-jump" alt="">
                    </div>
                </div>
                <!--end caption image-->
            </div>
            <?php
                }
                                        wp_reset_postdata();

                                        ?>
        </div>
        <div class="pattern-bg"></div>
    </section>
    <!--end home area-->

    <!--start feature area-->
    <section id="feature-area" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row flex">
                <?php 

                            $hero = array(
                                'post_type' => 'services',
                                'posts_per_page'=>'-1',
                                'orderby' => 'date', 
                                'order' => 'ASC'
                            );
                            $heroQuery = new WP_Query( $hero );

                        while($heroQuery->have_posts()){ 
                            $heroQuery->the_post(); 

                            ?>
                    <div class="cards">
                        <div class="card card-01 height-fix">
                            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(null, 'large');?>" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h4 class="medium bold-weight"><?php echo get_the_title();?></h4>
                                <p class="card-text white-fonts regular-weight"><?php echo wp_trim_words(get_the_content(),10);?></p>
                                <a href="<?php echo get_the_permalink();?>" class="rm-dec hover-dec orange-fonts regular white-font-hover">View More <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                                        wp_reset_postdata();

                                        ?>
            </div>
        </div>
    </section>
    <!--end feature area-->
<?php
get_footer(); 
?>