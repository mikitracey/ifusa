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
ob_start();
require('../../../wp-blog-header.php');
include_once(dirname(__FILE__) . '/functions.php');
header("Content-type: text/css");
ob_end_flush();
?>
/*
Theme Name: Tiga
Theme URI: http://www.shamsulazhar.com/wp/archives/31
Description: A simple 3 column theme which is <a href="http://www.gravatar.com">gravatar</a> ready and also compatible with <a href="http://www.randombyte.net/blog/projects/falbum/">FAlbum</a>.
Author: Shamsul Azhar
Author URI: http://shamsulazhar.com
Version: 1.0.2
*/

/***************************************************************************/
/* HTML Tags */
/***************************************************************************/

body {
	background-color:<?php tiga_bodyBgColor(); ?>;
	font-family:<?php tiga_getValue('bodyFontFamily'); ?>;
	margin:0px;
	padding:0px;
	text-align:center;
	<?php tiga_bgImage('body'); ?>
	background-attachment:fixed;
}

h1 {
	margin:0px;
	padding:0px;
}

h2 {
	margin-bottom:0px;
}

blockquote {
	border-color:<?php tiga_getValue('blockquoteBorderColor'); ?>;
	background-color:<?php tiga_getValue('blockquoteBgColor'); ?>;
	border-width:1px 1px 1px 8px;
	border-style:dotted dotted dotted solid;
	padding:0em 1em;
}

pre {
	overflow:auto;
	width:80%;
	font-family: 'Bitstream Vera Sans Mono', 'Andale Mono', 'LucidaTypewriter', monospace;
	background: #e7e6de;
	border: solid 1px #aaa;
	padding: 0px 10px 15px 10px;
}

.comment-text pre {
	margin:0px 30px 15px 30px;
}

pre code, pre pre {
	border: 0;
}

code {
	font-family: 'Bitstream Vera Sans Mono', 'Andale Mono', 'LucidaTypewriter', monospace;
	font-size: 12px;
	background: #e7e6de;
	border: solid 1px #aaa;
}

a:link {
	color: #2E432E;
}

a:visited {
	color: #2E432E;
}

a:hover {
	text-decoration:none;
	color:#FF0000;
}

/***************************************************************************/
/* This is the container for the whole page */
/***************************************************************************/

.page {
	max-width:<?php tiga_getValue('maxWidth'); ?>;
	min-width:<?php tiga_getValue('minWidth'); ?>;

	<?php tiga_minMaxWidthIeHack(); ?>

	position:relative;
	padding:5px;
	margin:0 auto;
	text-align:left;
}

/***************************************************************************/
/* Header */
/***************************************************************************/

.header {
	border-color:<?php tiga_headerBorderColor(); ?>;
	background-color:<?php tiga_headerBgColor(); ?>;
	height:<?php tiga_headerHeight(); ?>px;
	<?php tiga_bgImage('header'); ?>
	border-style:solid;
	margin-bottom:5px;
	border-width: 1px;
	padding-left:10px;
}

.blog-name:link, .blog-name:visited, .blog-name:hover {
	color:<?php tiga_getValue('blogNameColor'); ?>;
	font-family:<?php tiga_getValue('blogNameFontFamily'); ?>;
	font-size:<?php tiga_getValue('blogNameFontSize'); ?>;
	font-weight:<?php tiga_getValue('blogNameFontWeight'); ?>;
	text-decoration:none;
	background-color:transparent;
}

.blog-description {
	color:<?php tiga_getValue('blogDescriptionColor'); ?>;
	font-family:<?php tiga_getValue('blogDescriptionFontFamily'); ?>;
	font-size:<?php tiga_getValue('blogDescriptionFontSize'); ?>;
	font-weight:<?php tiga_getValue('blogDescriptionFontWeight'); ?>;
	margin:0px;
	padding-left:5px;
}

/***************************************************************************/
/* Menu Bar */
/***************************************************************************/

.menu-bar {
	text-align:center;
	padding:5px;
	margin:0;
	border:1px solid #aaaaaa;
	white-space:nowrap;
	text-decoration:none;
	margin-bottom:5px;
	font-size:9pt;
	background-color:#ffffff;
}

.menu-bar ul {
	padding:5px 0px;
	margin:0;
}

.menu-bar li {
	padding:4px 0px;
	display:inline;
}

.menu-bar li a {
	border:1px solid #aaaaaa;
	padding:4px 4px;
	background-color:#F5F5F5;
	text-decoration:none;
}

.menu-bar li a:hover {
	padding:4px;
	background-color:#99CCFF;
	color:#000066;
	text-decoration:none;
}

/***************************************************************************/
/* Post */
/***************************************************************************/

.post-title:link, .post-title:visited, .post-title:hover {
	font-family:<?php tiga_getValue('postTitleFontFamily'); ?>;
	color:<?php tiga_getValue('postTitleColor'); ?>;
	text-decoration: none;
	background-color: #FFFFFF;
	margin-bottom:0px
}

.post-content, .comment-content {
	font-size:<?php tiga_getValue('postFontSize'); ?>;
	color:#333333;
}

.post-time, .post-author {
	font-size:8pt;
	color:#003366;
	background-color: #FFFFFF;
}

.post-author {
	margin-bottom:3em;
}

.post-metadata {
	font-size:8pt;
	color:#003366;
	background-color: #FFFFFF;
	padding-left:3em;
}

/***************************************************************************/
/* Sidebars */
/***************************************************************************/

.left-sidebar, .right-sidebar {
	top:<?php tiga_sidebarsTop(); ?>px;
	font-size:8pt;
	position:absolute;
}

.left-sidebar {
	width:<?php tiga_leftSidebarWidth(); ?>px;
	left:5px;
}

.right-sidebar {
	width:<?php tiga_rightSidebarWidth(); ?>px;
	right:5px;
}

/***************************************************************************/
/* WordPress Sidebar Widgets */
/***************************************************************************/

/* Left and right sidebars */
ul.left-sidebar, ul.right-sidebar {
	padding:0px;
	margin:0px;
}

/* Left widget title */
ul.left-sidebar li h2 {
	<?php tiga_bgImage('leftWidgetTitle'); ?>
	<?php tiga_bgImage('leftWidgetTitle'); ?>
	border-color:<?php tiga_widgetBorderColor(LEFT); ?>;
	color:<?php tiga_widgetTitleFontColor(LEFT); ?>;
	background-color:<?php tiga_widgetTitleBgColor(LEFT); ?>;
}

/* Right widget title */
ul.right-sidebar li h2 {
	<?php tiga_bgImage('rightWidgetTitle'); ?>
	<?php tiga_bgImage('rightWidgetTitle'); ?>
	border-color:<?php tiga_widgetBorderColor(RIGHT); ?>;
	color:<?php tiga_widgetTitleFontColor(RIGHT); ?>;
	background-color:<?php tiga_widgetTitleBgColor(RIGHT); ?>;
}

/* Left and right widget title */
.widgettitle, ul.left-sidebar li h2, ul.right-sidebar li h2 {
	border-width:0px 0px 1px 0px;
	border-style:solid;
	font-size:9pt;
	font-weight: bold;
	padding:5px;
	margin:-10px -5px 5px;
}

/* Left widget */
.left-wp-widget {
	border-color:<?php tiga_widgetBorderColor(LEFT); ?>;
	width:<?php tiga_leftWidgetWidth(); ?>px;
}

/* Right widget */
.right-wp-widget {
	border-color:<?php tiga_widgetBorderColor(RIGHT); ?>;
	width:<?php tiga_rightWidgetWidth(); ?>px;
}

/* Left and right widget */
.left-wp-widget, .right-wp-widget {
	padding:10px 5px;
	border-width:1px;
	border-style:solid;
	margin-bottom:5px;
	background-color:#FFFFFF;
	list-style-type:none;
}

/* Style of the block containing the widget contents */
.left-wp-widget ul, .right-wp-widget ul {
	list-style-type:none;
	padding-left:7px;
	margin-top:0px;
	margin-left:0px;
}

/* Style of each items in the widget contents */
.left-wp-widget li, .right-wp-widget li {
	margin-top:5px;
}

/* In case the widget content contains a form eg. the Search box */
.left-wp-widget form, .right-wp-widget form {
	margin:0px;
}

/* Correct the style if the widget title is a link */
h2.widgettitle a:link {
	color:<?php tiga_widgetTitleFontColor(LEFT); ?>;
	text-decoration:none;
}

/* Correct the style if the widget title is a link */
h2.widgettitle a:visited {
	color:<?php tiga_widgetTitleFontColor(LEFT); ?>;
}

/***************************************************************************/
/* Old Style Tiga Widgets */
/***************************************************************************/

/* Adds background image to the left widget title */
.left-widget-title {
	<?php tiga_bgImage('leftWidgetTitle'); ?>
}

/* Adds background image to the right widget title */
.right-widget-title {
	<?php tiga_bgImage('rightWidgetTitle'); ?>
}

/* Adds background image to the center widget title */
.center-widget-title {
	<?php tiga_bgImage('centerWidgetTitle'); ?>
}

/*
.left-widget, .right-widget {
	filter:alpha(opacity=90);
	opacity: 0.9;
	-moz-opacity:0.9;
}
*/

.left-widget-title {
	color:<?php tiga_widgetTitleFontColor(LEFT); ?>;
	background-color:<?php tiga_widgetTitleBgColor(LEFT); ?>;
	border-color:<?php tiga_widgetBorderColor(LEFT); ?>;
	width:<?php tiga_leftWidgetWidth(); ?>px;
	border-width:1px 1px 0px 1px;
	border-style:solid;
	font-size:9pt;
	font-weight: bold;
	padding:5px;
}

.left-widget {
	border-color:<?php tiga_widgetBorderColor(LEFT); ?>;
	width:<?php tiga_leftWidgetWidth(); ?>px;
	border-width:1px 1px 1px 1px;
	border-style:solid;
	color:#000000;
	background-color:#FFFFFF;
	padding:5px;
	margin-bottom:5px;
}

.right-widget-title {
	color:<?php tiga_widgetTitleFontColor(RIGHT); ?>;
	background-color:<?php tiga_widgetTitleBgColor(RIGHT); ?>;
	border-color:<?php tiga_widgetBorderColor(RIGHT); ?>;
	width:<?php tiga_rightWidgetWidth(); ?>px;
	border-width:1px 1px 0px 1px;
	border-style:solid;
	font-size:9pt;
	font-weight: bold;
	padding:5px;
}

.right-widget {
	border-color:<?php tiga_widgetBorderColor(RIGHT); ?>;
	width:<?php tiga_rightWidgetWidth(); ?>px;
	border-width:1px 1px 1px 1px;
	border-style:solid;
	color:#000000;
	background-color:#FFFFFF;
	padding:5px;
	margin-bottom:5px;
}

.center-widget-title {
	color:<?php tiga_widgetTitleFontColor(CENTER); ?>;
	background-color:<?php tiga_widgetTitleBgColor(CENTER); ?>;
	border-color:<?php tiga_widgetBorderColor(CENTER); ?>;
	margin-left:<?php tiga_centerWidgetMarginLeft(); ?>px;
	margin-right:<?php tiga_centerWidgetMarginRight(); ?>px;
	border-width:1px 1px 0px 1px;
	border-style:solid;
	font-size:9pt;
	font-weight: bold;
	padding:5px;
}

.center-widget {
	border-color:<?php tiga_widgetBorderColor(CENTER); ?>;
	margin-left:<?php tiga_centerWidgetMarginLeft(); ?>px;
	margin-right:<?php tiga_centerWidgetMarginRight(); ?>px;
	/*<?php //tiga_getValue('postOpacity'); ?>*/
	color:#000000;
	background-color:#FFFFFF;
	border-width: 1px;
	border-style:solid;
	padding:1em;
	margin-bottom:5px;
	font-size:10pt;
}

.footer {
	margin-left:<?php tiga_centerWidgetMarginLeft(); ?>px;
	margin-right:<?php tiga_centerWidgetMarginRight(); ?>px;
	border-color:<?php tiga_widgetBorderColor(CENTER); ?>;
	font-size:10px;
	text-align:center;
	position: relative;
	color:#000000;
	background-color:#FFFFFF;
	border-width: 1px;
	border-style:solid;
}

.footer p {
	margin:10px;
}

img {
	border-width:0px;
}

h3#respond, h3#comments {
	color:#000000;
}

.single-post-metadata {
	color:#003366;
	background-color: #F8F7EF;
	border-top-color: #CCCCCC;
	border-bottom-color: #CCCCCC;
}

.even-comment {
}

.odd-comment, .even-comment{
	/*background-color:#f8f7ef;*/
}

.left-widget ul, .right-widget ul {
	list-style-type:none;
	padding-left:7px;
	margin-top:0px;
	margin-left:0px;
}

.left-widget li,  .right-widget li {
	margin-top:5px;
}

h3#respond, h3#comments {
	font-family:Geneva, Arial, Helvetica, sans-serif;
	text-decoration: none;
	background-color: #FFFFFF;
	margin-bottom:0px
}

/* Comments Styles */
.comment-header {
	border:0px;
	padding:5px 10px;
	border-style:solid;
	background-color:#e7e6de;
}

.comment-num:link, .comment-num:visited, .comment-num:hover{
	float:right;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:34px;
	font-style:italic;
	color:#aaaaaa;
	background-color:transparent;
	text-decoration:none;
}

.comment-text {
	padding:0px 10px;
	border-color:#e7e6de;
	border-width:1px;
	border-style:solid;
	background-color:#f8f7ef;
}

.comment-list .odd-comment,
.comment-list .even-comment {
	font-size:12px;
	margin-bottom:15px;
}

.comment-list {
	font-size:12px;
	padding:0px;
	margin:0px;
}

.comment-date{
	color:#999999;
	font-size:7pt;
}

.comment-edit-link {
	color:#999999;
	font-size:7pt;
}

/* Single post */
.single-post-metadata {
	font-size:8pt;
	/*font-style:italic;*/
	border-top-style: solid;
	border-bottom-style: solid;
	border-width: 1px;
	padding:1em;
	clear:both;
}

/***************************************************************************/
/* Dum, dum dum dum, Don't touch this! */
/***************************************************************************/
/* IE Hack (http://www.positioniseverything.net/easyclearing.html) - Begin */
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}

.clearfix {display: inline-table;}

/* Hides from IE-mac \*/
* html .clearfix {height: 1%;}
.clearfix {display: block;}
/* End hide from IE-mac */
/* IE Hack - End */
/***************************************************************************/

/* Search input */
input#s {
	width:90%;
}

/* Page nav */
.bottom-page-nav, .top-page-nav {
	color:#003366;
	text-align:center;
	background-color:#FFFFFF;
}

.permitted-tags {
	font-size:7pt;
	color:#999999;
	background-color:#FFFFFF;
	width:300px;
}

textarea#comment {
	width:400px;
}

.google-ads {
	text-align:center;
}

.gravatar {
	float:left;
	border:1px solid #888888;
	padding:2px;
	background-color:#ffffff;
	margin-right:5px;
}