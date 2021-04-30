<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
	

        <?php // drop Google Analytics here ?>
        <?php // end analytics ?>

        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php // favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/favicon.ico">
        <![endif]-->

        <!-- Apple Touch Icon -->
        <!-- <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/apple-touch-icon.png"> -->
        
        <!-- Font Awesome 5 -->
        <script src="https://kit.fontawesome.com/d9902ceb2d.js" crossorigin="anonymous"></script>

        <!-- Safari Pinned Tab Icon -->
        <link rel="mask-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/icon.svg" color="#0088cc">

        <?php // updated pingback. Thanks @HardeepAsrani https://github.com/HardeepAsrani ?>
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>

        <?php // put font scripts like Typekit/Adobe Fonts here ?>
		<link rel="stylesheet" href="https://use.typekit.net/gst1jzl.css">
        <?php // end fonts ?>

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

			<header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

                <div id="inner-header" class="container">

					

					<nav class="navbar container" role="navigation" aria-label="main navigation">
                    <div id="logo" class="navbar-brand">
                    
                        <?php if (has_custom_logo()) { ?>
							<a class="navbar-item" href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
								<?php the_custom_logo(); ?>
							</a>
						<?php } else { ?>
							<a class="navbar-item"  href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
						        <img src="<?php echo get_theme_file_uri(); ?>/library/images/logo.svg" itemprop="logo" alt="site logo" />
							</a>
						<?php } ?>
                                               
                        <button class="button navbar-burger" data-target="primary-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
                    </div>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 0,
                        'container'         => false,
                        //'items_wrap'     => 'div',
                        'menu_class'        => 'navbar-menu',
                        'menu_id'           => 'primary-menu',
                        'after'             => "</div>",
                        'walker'            => new Navwalker())
                    );
                    ?>
                </nav>

                </div>

            </header>
