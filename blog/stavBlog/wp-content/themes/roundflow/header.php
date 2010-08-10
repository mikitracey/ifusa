<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/niftyCorners.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.php" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (get_settings( 'rf_roundedcorners' ) == "" || get_settings( 'rf_roundedcorners' ) == "ON") {  ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
<?php if(is_single()) { ?>
Nifty("div#header","br top");
Nifty("div#navigation","bl tr");
Nifty("div#maincontent","tl br");
Nifty("div#comments","tr bl");
Nifty("div#bottombar","tl br");
Nifty("div#footer","tr bottom");
<?php } elseif (is_page() && wp_list_pages("child_of=".$post->ID."&echo=0")) { ?>
Nifty("div#header","br top");
Nifty("div#navigation","bl tr");
Nifty("div#childnavigation","br tl");
Nifty("div#maincontent","tr bl");
Nifty("div#bottombar","tl br");
Nifty("div#footer","tr bottom");
<?php } else { ?>
Nifty("div#header","br top");
Nifty("div#navigation","bl tr");
Nifty("div#maincontent","tl br");
Nifty("div#bottombar","tr bl");
Nifty("div#footer","tl bottom");
<?php } ?>
}
</script>
<?php } ?>

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

<div id="header"><h1><?php bloginfo('name'); ?></h1><h2><?php bloginfo('description'); ?></h2></div>

<div id="navigation">
<ul>
<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1'); ?></ul>
</div>

<?php if(is_page() && wp_list_pages("child_of=".$post->ID."&echo=0")) { ?>
<div id="childnavigation">
<ul>
<?php wp_list_pages("title_li=&child_of=".$post->ID."&sort_column=menu_order");?>
</ul>
</div>
<?php } ?>