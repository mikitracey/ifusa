<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="description" content="This is the WordPress theme playground for the undersigned / Webdesign reference book." />
<meta name="keywords" content="wordpress, themes, design, web, internet, webdesign, websites, playground, striped, whitespace, bluevanish, template, templates" />

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.php" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/prototype.lite.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/moo.fx.js"></script>
	<script type="text/javascript">
		window.onload = function() {		    
			scale = new fx.Scaleheader('topbar', {duration: 500});
			scale2 = new fx.Scaleheader('commentwrapper', {duration: 500});
		}
	</script>
	<?php wp_head(); ?>
</head>
<body>
<div id="bigwrapper">
    <div id="header">
	<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	            
	</div>
	<div id="topbar" onmouseover="scale.sizeup()" onmouseout="scale.sizedown(30)"><script type="text/javascript">var topbar = document.getElementById('topbar'); topbar.style.height = 30 + "px";</script>
		<div id="redline"><p>Navigation | <span class="where"><?php if ( is_search() ) { ?> Search results &raquo; <?php echo wp_specialchars($s, 1); ?><?php } ?><?php if ( is_date() ) { ?> Archive <?php wp_title(); ?><?php } ?><?php if ( is_category() ) { ?> Category <?php wp_title(); ?><?php } ?><?php if ( is_single() or is_page()) { ?><?php wp_title(''); ?><?php } ?><?php if ( is_home()) { ?><?php bloginfo('title'); ?><?php } ?></span></p></div>
		<div id="topbarmenuwrapper">
		<?php include (TEMPLATEPATH . '/topbar.php'); ?>
		</div>
	</div>