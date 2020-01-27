<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <!-- Custom fonts for this theme -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <?php wp_head(); ?>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

</head>

<body id="page-top" <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    
                    <?php
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'order' => 'asc'
                    );
                    $query = new WP_Query($args);
                    while ($query->have_posts()) {
                        $query->the_post();
                    ?>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#<?php echo strtolower(get_the_title()); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php
                        // the_excerpt();
                    }
                    wp_reset_postdata();
                    ?>

                </ul>
            </div>
        </div>

    </nav>

    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image -->
            <?php 
                if (get_option('themename_theme_options')) {
            ?>
                <img class="masthead-avatar mb-5 rounded-circle img-thumbnail" src="<?php echo get_option('themename_theme_options')['image_upload']; ?>" alt="">
            <?php 
                }else{
            ?>
                <img class="masthead-avatar mb-5" src="<?php bloginfo('template_url'); ?>/img/avataaars.svg" alt="">
            <?php 
                }
            ?>

            <!-- Masthead Heading -->
            <h1 class="masthead-heading text-uppercase mb-0"><?php bloginfo('description'); ?></h1>

            <!-- Icon Divider -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Masthead Subheading -->
            <p class="masthead-subheading font-weight-light mb-0">
                <?php echo get_option('my_skils')?>
            </p>
        </div>
    </header>