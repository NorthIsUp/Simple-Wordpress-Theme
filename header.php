<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> :: <?php } ?> <?php bloginfo('name'); ?>
	</title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint-wp.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print">

	<!-- To use a custom stylesheet, uncomment the next line: -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/custom.css" type="text/css" media="screen, projection"> -->

	<!-- Javascripts  -->
	<!-- <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.1.3.1.pack.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>
	<!--[if lt IE 7]>
	<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
	<![endif]-->

	<!-- Show the grid and baseline  -->
	<style type="text/css">
	/*		.container { background: url(<?php bloginfo('stylesheet_directory'); ?>/css/lib/img/grid.png); }*/
	</style>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>



</head>
<body>
	<div class="container">
		<!-- Header -->
		<div class="column span-2 first" id="header">


			<!-- Site Name -->
			<!-- <a href="<?php echo get_option('home'); ?>/" class="logo"></a>
			<h1><?php bloginfo('name'); ?></h1> -->
			<!-- If not using logo:
			<a href="<?php echo get_option('home'); ?>/" class="logo"><h1><?php bloginfo('name'); ?></h1></a> -->
			<!-- <div class="description"><?php bloginfo('description'); ?></div> -->

			<a href="/">
				<img src="http://gravatar.com/avatar/887048987be67f10649a9dfacced6606?s=142" height="75" width="75" class="avatar" />
			</a>

			<div id="me">
				<a href="/">
					<span id="adam">adam</span>
					<span id="hitchcock">hitchcock</span>
				</a>
			</div>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<div id="mousing">&nbsp;</div>
			<div class="site">
				<span class="icon">
					<a href="https://github.com/northisup" id="github"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/github.png" alt="github" title="@northisup on GitHub" height="16" width="16" /></a>
				</span>
				<span class="icon">
					<a href="https://twitter.com/northisup" id="twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter.png" alt="twitter" title="@northisup on Twitter" height="16" width="16" /></a>
				</span>
				<span class="icon">
					<a href="http://feeds.feedburner.com/northisup" id="rss"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/rss.png" alt="rss" title="Subscribe to this blog's RSS feed" height="16" width="16" /></a>
				</span>
			</div>

			<!-- Search -->

			<div id="content">
				<div id="sections">
					<?php if ( is_user_logged_in() ) {
						wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) ); /* if the visitor is logged in, this primary navigation will be displayed */
					} else {
						wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /* if the visitor is NOT logged in, this primary navigation will be displayed. if a single menu should be displayed for both conditions, set the same menues to be displayed under both conditions through the Wordpress backend */
					}
					?>
				</div>
			</div>
		</div> <!-- /header -->

