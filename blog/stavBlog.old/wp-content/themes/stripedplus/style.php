<?php
require_once( dirname(__FILE__) . '../../../../wp-config.php');
header("Content-type: text/css"); 


// IMAGES
if (get_settings( 'striped_backgroundimage' ) == "") { $backgroundimage = "pic/bg.gif"; } else {
$backgroundimage = "http://".get_settings( 'striped_backgroundimage' ); }

$headerimage = "http://".get_settings( 'striped_headerimage' );



// SITE COLORS
if (get_settings( 'striped_backgroundcolor' ) == "") { $backgroundcolor = "#FFF"; } else {
$backgroundcolor = "#".get_settings( 'striped_backgroundcolor' ); }

if (get_settings( 'striped_maincolor' ) == "") { $maincolor = "#AA0000"; } else {
$maincolor = "#".get_settings( 'striped_maincolor' ); }

if (get_settings( 'striped_maincolortwo' ) == "") { $maincolortwo = "#444"; } else {
$maincolortwo = "#".get_settings( 'striped_maincolortwo' ); }

if (get_settings( 'striped_lightborder' ) == "") { $lightborder = "#CCC"; } else {
$lightborder = "#".get_settings( 'striped_lightborder' ); }

if (get_settings( 'striped_darkborder' ) == "") { $darkborder = "#666"; } else {
$darkborder = "#".get_settings( 'striped_darkborder' ); }

if (get_settings( 'striped_commentoddcolor' ) == "") { $commentoddcolor = "#EEE"; } else {
$commentoddcolor = "#".get_settings( 'striped_commentoddcolor' ); }

if (get_settings( 'striped_commentblockquotecolor' ) == "") { $commentblockquotecolor = "#DDD"; } else {
$commentblockquotecolor = "#".get_settings( 'striped_commentblockquotecolor' ); }



// FONT COLORS
if (get_settings( 'striped_headerfooterfontcolor' ) == "") { $headerfooterfontcolor = "#FFF"; } else {
$headerfooterfontcolor = "#".get_settings( 'striped_headerfooterfontcolor' ); }

if (get_settings( 'striped_headerfontcolorhover' ) == "") { $headerfontcolorhover = "#EEE"; } else {
$headerfontcolorhover = "#".get_settings( 'striped_headerfontcolorhover' ); }

if (get_settings( 'striped_currentpagefontcolor' ) == "") { $currentpagefontcolor = "#AAA"; } else {
$currentpagefontcolor = "#".get_settings( 'striped_currentpagefontcolor' ); }

if (get_settings( 'striped_mainfontcolor' ) == "") { $mainfontcolor = "#000"; } else {
$mainfontcolor = "#".get_settings( 'striped_mainfontcolor' ); }

if (get_settings( 'striped_datefontcolor' ) == "") { $datefontcolor = "#666"; } else {
$datefontcolor = "#".get_settings( 'striped_datefontcolor' ); }

if (get_settings( 'striped_smalldatefontcolor' ) == "") { $smalldatefontcolor = "#999"; } else {
$smalldatefontcolor = "#".get_settings( 'striped_smalldatefontcolor' ); }

if (get_settings( 'striped_commentfontcolor' ) == "") { $commentfontcolor = "#333"; } else {
$commentfontcolor = "#".get_settings( 'striped_commentfontcolor' ); }

if (get_settings( 'striped_commentlinkcolor' ) == "") { $commentlinkcolor = "#666"; } else {
$commentlinkcolor = "#".get_settings( 'striped_commentlinkcolor' ); }



// SITE SETTINGS
if (get_settings( 'striped_font' ) == "") { $font = 'Georgia, "Times New Roman", Times, serif'; } else {
$font = stripslashes(get_settings( 'striped_font' )); }

if (get_settings( 'striped_headerheight' ) == "") { $headerheight = "120"; } else {
$headerheight = get_settings( 'striped_headerheight' ); }

if (get_settings( 'striped_sitewidth' ) === FALSE) { $sitewidth = "600"; } else {
$sitewidth = get_settings( 'striped_sitewidth' ); }

if (get_settings( 'striped_type' ) == "") { $type = "px"; } else {
$type = get_settings( 'striped_type' ); } ?>
body { 
	font-family:<?php echo $font; ?>;
	margin:0; 
	padding:0;
	background-image:url(<?php echo $backgroundimage; ?>);
}

a:link, a:visited {
    text-decoration:none;
}

a:hover {
    text-decoration:underline;
}

form {
padding:0;
margin:0;
display:inline;
}
 
#bigwrapper {
	width:<?php echo $sitewidth; echo $type; ?>;
	margin:40px auto 40px auto;
	overflow:hidden;
	position:relative;
	border:3px double <?php echo $lightborder; ?>;
	background-color:<?php echo $backgroundcolor; ?>;
	padding:20px 20px 20px 20px;
}

#header h1 {
	position:relative;
	float:left;
	display:block;
	margin:<?php echo $headerheight - 40; ?>px 0 0 20px;
	font-weight:bold;
	font-size:35px;
	line-height:35px;
	color:<?php echo $headerfooterfontcolor; ?>;
	text-transform:uppercase;
}

#header h1 a:link, #header h1 a:visited {
    color:<?php echo $headerfooterfontcolor; ?>;
}

#header h1 a:hover {
    color:<?php echo $headerfontcolorhover; ?>;
    text-decoration:none;
}

#Search input {
	padding:0;
	margin:0;
}

#Search {
	text-align:center;
	padding:5px 0 0 0;
	margin:0;
}

#header {
	position:relative;
	margin:0;
	background-color:<?php echo $maincolortwo; ?>;
	width:100%;
	height:<?php echo $headerheight; ?>px;
	float:left;
	background-image:url(<?php echo $headerimage; ?>);
}

#footer {
	position:relative;
	margin:0;
	background-color:<?php echo $maincolortwo; ?>;
	width:100%;
	height:30px;
	border-top:5px solid <?php echo $maincolor; ?>;
	float:left;
}

#footer p {
	font-size:10px;
	line-height:10px;
	text-align:center;
	color:<?php echo $headerfooterfontcolor; ?>;
	padding:10px 0 0 0;
	margin:0 0 0 22px;	
}

#footer p a:link, #footer p a:visited {
    color:<?php echo $headerfooterfontcolor; ?>;
}

#topbar {
	position:relative;
	margin:0;
	width:100%;
	overflow:hidden;
	float:left;
	background-color:<?php echo $backgroundcolor; ?>;
}

#redline {
	position:relative;
    height:30px;
	background-color:<?php echo $maincolor; ?>;
	text-align:left;
}

#redline p {
	font-size:10px;
	line-height:10px;
	color:<?php echo $headerfontcolorhover; ?>;
	text-transform:uppercase;
	padding:10px 0 0 0;
	margin:0 0 0 22px;	
	display:block;
	position:relative;
	float:left;
}

#redline .where {
    color:<?php echo $currentpagefontcolor; ?>;
}

#topbarmenuwrapper, #bottombarmenuwrapper {
    position:relative;
    float:left;
    width:100%;
    text-align:center;
    font-size:12px;
}

#topbarmenuwrapper {
    border-bottom:5px solid <?php echo $maincolor; ?>;
    padding:0 0 25px 0;
}

#bottombarmenuwrapper {
    border-top:5px solid <?php echo $maincolor; ?>;
    padding:0 0 25px 0;
}


.barmenuright {
	position:relative;
	width:47%;
	float:right;
	vertical-align:bottom;
	margin-right:1%;
}

.barmenuleft {
	position:relative;
	width:47%;
	float:left;
	vertical-align:bottom;
	margin-left:1%;
}

#bottombarmenuwrapper h3, #topbarmenuwrapper h3 {
	font-size:14px;
	line-height:14px;
	color:<?php echo $headerfontcolorhover; ?>;
	text-transform:uppercase;
	margin:25px 0 0 0;
	padding:6px 0 5px 0;
	display:block;
	background-color:<?php echo $maincolortwo; ?>;
}

#bottombarmenuwrapper h3 a:link, #topbarmenuwrapper h3 a:link, #bottombarmenuwrapper h3 a:hover, #topbarmenuwrapper h3 a:hover, #bottombarmenuwrapper h3 a:visited, #topbarmenuwrapper h3 a:visited {
	color:<?php echo $headerfontcolorhover; ?>;
	text-decoration:none;
}

#bottombarmenuwrapper ul, #topbarmenuwrapper ul {
	padding:0;
	margin:0;
}

#bottombarmenuwrapper ul li, #topbarmenuwrapper ul li {
	list-style:none;
	display:block;
	position:relative;
	line-height:24px;
}

#bottombarmenuwrapper .textwidget, #topbarmenuwrapper .textwidget  { 
margin-top:5px; 
}

#wp-calendar {
	width:100%;
	text-align:center;
	border-collapse: collapse;
}

#wp-calendar caption, #wp-calendar th {
	color:<?php echo $maincolor; ?>;
	padding:4px;
}

#wp-calendar td {
	padding:1px;
	border:none;
}

#wp-calendar caption {
	font-weight:bold;
}

#wp-calendar #today {
	font-weight:bold;
	color:<?php echo $maincolor; ?>;
}

#wp-calendar a {
	color:<?php echo $maincolor; ?>;
	text-decoration:underline;
}

#topbarmenuwrapper img, #bottombarmenuwrapper img {
border:0;
}

#bottombarmenuwrapper ul li a:link, #topbarmenuwrapper ul li a:link, #bottombarmenuwrapper ul li a:visited, #topbarmenuwrapper ul li a:visited {
	display:block;
	position:relative;
	line-height:24px;
	height:100%;
	color:<?php echo $mainfontcolor; ?>;
	text-decoration:none;
	border-bottom:1px solid <?php echo $datefontcolor; ?>;
}

#bottombarmenuwrapper ul li a:hover, #topbarmenuwrapper ul li a:hover {
	color:<?php echo $backgroundcolor; ?>;
	background-color:<?php echo $maincolor; ?>;
}

#recentcomments li {
line-height:24px;
border-bottom:1px solid <?php echo $datefontcolor; ?>;
display:block;
}

#bottombarmenuwrapper ul li a:visited.rsswidget, #bottombarmenuwrapper ul li a:link.rsswidget, #topbarmenuwrapper ul li a:visited.rsswidget, #topbarmenuwrapper ul li a:link.rsswidget, #bottombarmenuwrapper #recentcomments li a:link, #bottombarmenuwrapper #recentcomments li a:visited, #topbarmenuwrapper #recentcomments li a:link, #topbarmenuwrapper #recentcomments li a:visited {
border:0;
display:inline;
line-height:auto;
}

#bottombarmenuwrapper #recentcomments li a:hover, #topbarmenuwrapper #recentcomments li a:hover, #bottombarmenuwrapper ul li a:hover.rsswidget, #topbarmenuwrapper ul li a:hover.rsswidget {
text-decoration:underline;
background-color:<?php echo $backgroundcolor; ?>;
color:<?php echo $mainfontcolor; ?>;
}



.post {
	position:relative;
	width:100%;
	overflow:hidden;
	float:left;
	margin:30px 0 0 0;
	padding:0 0 30px 0;

}

.post p, .post ul {
	font-size:12px;
	line-height:20px;
	color:<?php echo $mainfontcolor; ?>;
	margin:0 20px 0 0;
	padding: 0 0 20px 15px;
	border-left:5px solid <?php echo $maincolor; ?>;
}

.postsnav {
	position:relative;
	width:100%;
	overflow:hidden;
	float:left;
	margin:10px 0 0 0;
	padding:0 0 10px 0;
	font-size:12px;
	color:<?php echo $mainfontcolor; ?>;
	text-align:center;
}

.postsnav a:link, .postsnav a:visited {
color:<?php echo $mainfontcolor; ?>;
}

.post ul {
	border-left:5px solid <?php echo $darkborder; ?>;
	padding:20px 0 20px 50px;
	margin:-20px 0 0 0;
	display:block;
	position:relative;
	float:left;
	width:95%;
}

.post ul li ul {
    border:0;
    padding-left:20px;
}

.post p a:link, .post p a:visited, .post ul a:link, .post ul a:visited {
    color:<?php echo $datefontcolor; ?>;
}

.post .posth3 {
	font-size:30px;
	line-height:30px;
	color:<?php echo $mainfontcolor; ?>;
	text-transform:none;
	margin:0 20px 0 0;
	padding:0 0 5px 15px;
	border-left:5px solid <?php echo $lightborder; ?>;
}

.post .posth3 a:link, .post .posth3 a:visited {
    color:<?php echo $mainfontcolor; ?>;
}

.post .posth3 a:hover {
    color:<?php echo $datefontcolor; ?>;
    text-decoration:none;
}

.post .posth2 {
	font-size:20px;
	line-height:20px;
	color:<?php echo $datefontcolor; ?>;
	text-transform:none;
	margin:0 20px 0 0;
	padding:0 0 0 15px;
	border-left:5px solid <?php echo $lightborder; ?>;
}

.post blockquote {
	margin:-20px 0 0 0;
	display:block;
	position:relative;
	float:left;
	border-left:5px solid <?php echo $darkborder; ?>;
	z-index:5;
	width:95%;
}

.post blockquote p {
	border:0;
	padding:20px 0 20px 35px;
	font-style:italic;
}

.post h1 {
	font-size:20px;
	line-height:30px;
	color:<?php echo $maincolor; ?>;
	text-transform:uppercase;
	margin:-20px 20px 0 0;
	padding:15px 0 5px 15px;
	border-left:5px solid <?php echo $lightborder; ?>;
}

.post h2 {
	font-size:16px;
	line-height:25px;
	color:<?php echo $maincolor; ?>;
	text-transform:uppercase;
	margin:-20px 20px 0 0;
	padding:15px 0 5px 15px;
	border-left:5px solid <?php echo $lightborder; ?>;
}

.post h3 {
	font-size:14px;
	line-height:20px;
	color:<?php echo $maincolor; ?>;
	text-transform:uppercase;
	margin:-20px 20px 0 0;
	padding:15px 0 5px 15px;
	border-left:5px solid <?php echo $lightborder; ?>;
}

.post .postdata {
	color:<?php echo $smalldatefontcolor; ?>;
	text-transform:uppercase;
	font-size:11px;
	line-height:11px;
	padding:0 0 0 15px;
}

.post .postdata a:link, .post .postdata a:visited {
    color:<?php echo $smalldatefontcolor; ?>;
}


#commentbar {
	position:relative;
	height:30px;
	background-color:<?php echo $maincolor; ?>;
	background-image:url(pic/headerbg.gif);
	text-align:left;
	overflow:hidden;
}

#commentbar p {
	font-size:10px;
	line-height:10px;
	color:<?php echo $headerfooterfontcolor; ?>;
	text-transform:uppercase;
	padding:10px 0 0 0;
	margin:0 0 0 22px;
	font-weight:bold;	
}

#commentwrapper {
    position:relative;
    float:left;
    width:100%;
    margin:-20px 0 0 0;
}

.commenteven, .commentodd {
    position:relative;
    float:left;
    width:100%;
    margin:25px 0 0 0;
    border:3px double <?php echo $lightborder; ?>;
}

.commentodd {
    background-color:<?php echo $commentoddcolor; ?>;
}

.commentcontent {
    margin:10px 15px 10px 15px;
}

.commentcontent p {
	font-size:12px;
	line-height:16px;
	color:<?php echo $commentfontcolor; ?>;
}

.commentcontent p a:link, .commentcontent p a:visited {
    color:<?php echo $commentlinkcolor; ?>;
}

.commentcontent blockquote {
    font-style:italic;
    margin:0 0 0 10px;
    border-left:3px solid <?php echo $maincolor; ?>;
    padding:0 0 0 5px;
    background-color:<?php echo $commentblockquotecolor; ?>;
}

.commentcontent .commentinfo {
    color:<?php echo $smalldatefontcolor; ?>;
    font-size:10px;
    line-height:10px;
    text-transform:uppercase;
}

.commentcontent .commentinfo a:link, .commentcontent .commentinfo a:visited {
    color:<?php echo $smalldatefontcolor; ?>;
}

#comment {
    width:100%;
}