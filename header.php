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
        <?php // end fonts ?>

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

			<header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

                <div id="inner-header" class="container">

					<nav class="navbar" aria-label="main navigation">
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
						
							<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
							  <span aria-hidden="true"></span>
							  <span aria-hidden="true"></span>
							  <span aria-hidden="true"></span>
							</a>
						</div>
					
						<div id="primary-menu" class="navbar-menu">
							<div class="navbar-start">
								<?php wp_nav_menu(array(
									'theme-location'	=> 'main-nav',
									'depth'				=>	3,
									'menu'				=>	'NewNav',
									'container'			=>	'',
									'menu_class'		=>	'',
									'items_wrap'		=>	'%3$s',
									'walker'			=>	new Bulma_NavWalker(),
									'fallback_cb'		=>	'Bulma_NavWalker::fallback'
								));
								?>
						 	</div>
						 	
						 	<?php // remove this next div if you don't require it ?>
							<div class="navbar-end">
							     <div class="navbar-item">
							        <div class="buttons">
										<a class="button is-small is-warning">
							           		 <strong>Buy Tickets by Phone</strong>
							          	</a>
							          	<a class="button is-small is-success">
							            	<strong>Buy Tickets Online</strong>
							            </a>
							        </div>
								</div>
							</div>
						</div>
					</nav>

                </div>

            </header>
