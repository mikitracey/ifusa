<?php load_theme_textdomain('lush'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><!--
      'Lush' - A sophisticated Typo theme.
      Copyright 2005 by Marco van Hylckama Vlieg
      All Rights Reserved.

	  Wordpress Conversion 2006 by Christoph Boecken

      http://www.i-marco.nl/weblog/
      
      This template is licensed under the Creative Commons
      Attribution Non Commercial License
      http://creativecommons.org/licenses/by-nc/2.5/
--><title>
<?php if(is_single() || is_page()) { wp_title(''); ?> &raquo; <? } ?><?php bloginfo('name'); ?></title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php bloginfo('name'); ?> <?php _e('RSS Feed','lush'); ?>" type="application/rss+xml" />
  
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/print.css" media="print" rel="Stylesheet" type="text/css" />
  <!--[if IE]>
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/msie.css" media="screen" rel="Stylesheet" type="text/css" />  
  <![endif]--><!--[if lt IE 6]>
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/msie5.css" media="screen" rel="Stylesheet" type="text/css" />  
  <![endif]-->

  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/local.css" media="screen" rel="Stylesheet" type="text/css" />
  
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/small.css" rel="alternate stylesheet" type="text/css" title="smallfont" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/medium.css" rel="alternate stylesheet" type="text/css" title="mediumfont default" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/_css/large.css" rel="alternate stylesheet" type="text/css"title="largefont" />

  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/cookies.js" type="text/javascript"></script> 
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/prototype.js" type="text/javascript"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/effects.js" type="text/javascript"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/styleswitcher.js" type="text/javascript"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/lush.js" type="text/javascript"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/livesearch.js.php" type="text/javascript"></script>
<?php if(is_single() || is_page()) { ?>  
  <script src="<?php bloginfo('stylesheet_directory'); ?>/_js/ajax_comments.js" type="text/javascript"></script>
<?php } ?>
  <?php wp_head(); ?>
</head>

<body onload="init();">

  <div id="container">
    <div id="content">
      <div id="head">
<?php if(get_option(lushheaderlink) == '1') { ?>
		<div id="hotheader" onclick="location.href='<?php get_settings('home'); ?>';" style="cursor:pointer;"></div>
		<div id="ladybug" onclick="new Effect.ScrollTo('naughty');" style="top:26px;">&nbsp;</div>
<?php } else { ?>
        <h1 id="sitename"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1><br />
        <h3 id="subtitle"><?php bloginfo('description'); ?></h3><br />
		
		<a id="ffplug" title="Get Firefox" href="http://www.getfirefox.com/"></a>
	    
		<div id="ladybug" onclick="new Effect.ScrollTo('naughty');">&nbsp;</div>
<?php } ?>
      </div>










