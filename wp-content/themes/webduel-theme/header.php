<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    
    
</head>

<body <?php body_class( );?>>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!--start banner area-->
    <section id="banner-area" data-scroll-index="1">
        <div class='banner-container'>
            <?php 

                            $hero = array(
                                'post_type' => 'banner',
                                'posts_per_page'=>'1',
                                'orderby' => 'date', 
                                'order' => 'ASC'
                            );
                            $heroQuery = new WP_Query( $hero );

                        while($heroQuery->have_posts()){ 
                            $heroQuery->the_post(); 

                            ?>
            <p class="white-fonts">
                <?php echo get_the_title();?>
            </p>
            <a href="<?php echo get_field('add_url'); ?>" class="rm-dec orange-fonts white-font-hover hover-dec"><?php echo get_field('link_text');?><i class="icofont-long-arrow-right"></i></a>

            <?php 
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!--end banner area-->   

    <!--start header-->
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo -->
                    <?php 
                    //get a logo from business info
                    $args = array(
                        'post_type' => 'business-info'
                    );
                    $query = new WP_Query( $args );

                    while($query->have_posts()){ 
                        $query->the_post(); 
                       
                        $logo = get_field('logo');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                              ?>
                    <a class="logo" href="/"><img src="<?php echo $logo['sizes']["thumbnail"]; ?>" alt="<?php echo $logo['alt'];?>"></a>
                    <?php 
                    }
                    ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"><i class="icofont-navigation-menu"></i></span>
                    </button>
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="1">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="2">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="3">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="4">Faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="5">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--end header-->
                 
    <?php
    ?>