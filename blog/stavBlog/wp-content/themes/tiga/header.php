<?php
/*
Tiga WordPress Theme

Copyright (C) 2006  Shamsul Azhar

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

load_theme_textdomain('tiga');
include_once(dirname(__FILE__) . '/tiga.php');
include_once(dirname(__FILE__) . '/functions.php');

/******************************************************************************/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
			<?php wp_title(); ?>
		</title>

		<!-- Decide whether to use external or internal style sheet -->
		<?php if (tiga_ExternalStyleSheet() == 'TRUE') { ?>
			<link rel="stylesheet"
						href="<?php bloginfo('stylesheet_url'); ?>"
						type="text/css"
						media="screen" />
		<?php } else { ?>
			<link rel="stylesheet"
						href="<?php bloginfo('stylesheet_directory'); ?>/style.php"
						type="text/css"
						media="screen" />
		<?php } ?>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if (function_exists('geo_PopUpScript')) { geo_PopUpScript(); } ?>

		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php wp_head(); ?>
	</head>
	<body>
	<div class="page">
		<div class="header">
			<h1><a class="blog-name" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 class="blog-description"><?php bloginfo('description'); ?></h2>
		</div>

		<?php if (tiga_processValue('menuBar') == 'TRUE' && get_pages('')) { ?>
			<!-- Begin - Menu Bar -->
			<div class="menu-bar">
				<ul>
					<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
				</ul>
			</div> <!-- menu-bar -->
			<!-- End - Menu Bar -->
		<?php } ?>

		<!-- Begin - Flickr Badge -->
		<!-- This is for my personal use and can be removed -->
		<?php
			if (function_exists('saasmp_flickr_badge')) {
				echo '<div class="center-widget">';
				saasmp_flickr_badge();
				echo '</div>';
			}
		?>
		<!-- End - Flickr Badge -->

		<!-- Begin - AdSense -->
		<!-- This is for my personal use and can be removed -->
		<?php if (function_exists('saasmp_wp_header_link_unit')) saasmp_wp_header_link_unit(); ?>
		<!-- End - AdSense -->