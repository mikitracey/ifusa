<?php
require_once( dirname(__FILE__) . '../../../../../wp-config.php');
header("Content-type: text/css");

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
?>

#backgroundcolorpick { background-color:<?php echo $backgroundcolor; ?>; }
#maincolorpick { background-color:<?php echo $maincolor; ?>; }
#maincolortwopick { background-color:<?php echo $maincolortwo; ?>; }
#lightborderpick { background-color:<?php echo $lightborder; ?>; }
#darkborderpick { background-color:<?php echo $darkborder; ?>; }
#commentoddcolorpick { background-color:<?php echo $commentoddcolor; ?>; }
#commentblockquotecolorpick { background-color:<?php echo $commentblockquotecolor; ?>; }

#headerfooterfontcolorpick { background-color:<?php echo $headerfooterfontcolor; ?>; }
#headerfontcolorhoverpick { background-color:<?php echo $headerfontcolorhover; ?>; }
#currentpagefontcolorpick { background-color:<?php echo $currentpagefontcolor; ?>; }
#mainfontcolorpick { background-color:<?php echo $mainfontcolor; ?>; }
#datefontcolorpick { background-color:<?php echo $datefontcolor; ?>; }
#smalldatefontcolorpick { background-color:<?php echo $smalldatefontcolor; ?>; }
#commentfontcolorpick { background-color:<?php echo $commentfontcolor; ?>; }
#commentlinkcolorpick { background-color:<?php echo $commentlinkcolor; ?>; }

#cmDefault{
	position:absolute;
	left:0;
	top:0;
	height: 234px;
	width: 282px;
	z-index:900;
}
#ColourMod {
	position:relative;
	left:0;
	top:0;
	display:none;
	z-index:900;
}

.stripedpickcolor a:link, .stripedpickcolor a:visited {
text-decoration:none;
display:block;
width:100%;
height:100%;
border:0;
}

.stripedpickcolor {
height:20px;
width:20px;
margin-right:5px;
float:left;
position:relative;
border:1px solid #666;
text-decoration:none;
}

.cmDefaultMiniOverlay {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale src='<?php bloginfo('template_directory'); ?>/colourmod/images/ColourModMiniBG.png');
	height: 234px;
	width: 282px;
	position:absolute;
	left:0;
	top:0;
}
.cmDefaultMiniOverlay[class] {
 	background: url(<?php bloginfo('template_directory'); ?>/colourmod/images/ColourModMiniBG.png) no-repeat;

}

#cmSatValContainer {
	height: 150px;
	width: 150px;
	position: absolute;
	left: 14px;
	top: 43px;
}

#cmHueContainer {
	position: absolute;
	top: 44px;
	left: 185px;
	height: 168px;
	width: 40px;
}
.cmColorContainer {
	background: #FFFFFF;
	height: 160px;
	width: 20px;
	position: absolute;
	left: 230px;
	top: 49px;
}
.cmBlueDot {
	position: relative;
	z-index: 3;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale src='<?php bloginfo('template_directory'); ?>/colourmod/images/BlueDot.png');
	height: 21px;
	width: 21px;
}
.cmBlueDot[class] {
	background: url(<?php bloginfo('template_directory'); ?>/colourmod/images/BlueDot.png) no-repeat;
}
.cmBlueArrow {
	position: relative;
	z-index: 3;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale src='<?php bloginfo('template_directory'); ?>/colourmod/images/BlueArrow.png');
	height: 21px;
	width: 23px;
}
.cmBlueArrow[class] {
	background: url(<?php bloginfo('template_directory'); ?>/colourmod/images/BlueArrow.png) no-repeat;
}
.cmSatValBg {
	height: 150px;
	width: 150px;
	background: #FF0000;
	position: absolute;
	left: 29px;
	top: 50px;
}

a.cmLink {
width:90px;
	margin-left: 20px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	position:absolute;
	top:203px;
	z-index:400;
	color: #CCCCCC;
	text-decoration: none;
	border: none 0px;
}
a.cmLink:hover {
	color: #999999;
	text-decoration: none;
	border: none 0px;
}
#cmHex {
	position:relative;
	top:3px;
	color: #333333;
	font: 12px "Arial Narrow", Arial, Helvetica, sans-serif;
	border:1px solid #CCC;

}
#cmClose {
	position:absolute;
	left:135px;
	width:120px;
	text-align:right;
	height:30px;
}
#cmCloseButton {
position:relative;
top:13px;
text-decoration:none;
}