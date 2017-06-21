<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div id="MainContainer" class="container">
        <header class="header row" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <div id="inner-header" class="col-md-12">
                <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
                <p id="logo" class="h1 hidden-xs" itemscope itemtype="http://schema.org/Organization">
                    <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
                </p>

                <nav class="navbar navbar-default" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<div class="container-fluid">
					    <div class="navbar-header">
					      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-header">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      	</button>
						    <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					    </div>
						<?php 
							wp_nav_menu( array(
								'menu' => 'The Main Menu',
								'theme_location' => 'main-nav',
								'depth' => 3,
								'container' => 'div',
								'container_class' => 'collapse navbar-collapse nav top-nav cf',
								'container_id' => 'navbar-collapse-header',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
								'walker' => new wp_bootstrap_navwalker()
							));
						?>
					</div>
				</nav>
            </div>
        </header>
