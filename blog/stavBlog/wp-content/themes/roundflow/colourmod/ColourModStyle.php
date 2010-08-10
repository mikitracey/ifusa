<?php
require_once( dirname(__FILE__) . '../../../../../wp-config.php');
header("Content-type: text/css");

// GENERAL
if (get_settings( 'rf_bgcolor' ) == "") { $bgcolor = "#222222"; } else { $bgcolor = "#".get_settings( 'rf_bgcolor' ); }

// HEADER
if (get_settings( 'rf_headerbgcolor' ) == "") { $headerbgcolor = "#DD8822"; } else { $headerbgcolor = "#".get_settings( 'rf_headerbgcolor' ); }
if (get_settings( 'rf_sitetitlecolor' ) == "") { $sitetitlecolor = "#FFFFFF"; } else { $sitetitlecolor = "#".get_settings( 'rf_sitetitlecolor' ); }
if (get_settings( 'rf_taglinecolor' ) == "") { $taglinecolor = "#FFFFFF"; } else { $taglinecolor = "#".get_settings( 'rf_taglinecolor' ); }

// NAVIGATION
if (get_settings( 'rf_navbgcolor' ) == "") { $navbgcolor = "#88CC22"; } else { $navbgcolor = "#".get_settings( 'rf_navbgcolor' ); }
if (get_settings( 'rf_navlinkcolor' ) == "") { $navlinkcolor = "#FFFFFF"; } else { $navlinkcolor = "#".get_settings( 'rf_navlinkcolor' ); }
if (get_settings( 'rf_navlinkhovercolor' ) == "") { $navlinkhovercolor = "#FFFFFF"; } else { $navlinkhovercolor = "#".get_settings( 'rf_navlinkhovercolor' ); }

// CHILD PAGE NAVIGATION
if (get_settings( 'rf_childnavbgcolor' ) == "") { $childnavbgcolor = "#2288CC"; } else { $childnavbgcolor = "#".get_settings( 'rf_childnavbgcolor' ); }
if (get_settings( 'rf_childnavlinkcolor' ) == "") { $childnavlinkcolor = "#FFFFFF"; } else { $childnavlinkcolor = "#".get_settings( 'rf_childnavlinkcolor' ); }
if (get_settings( 'rf_childnavlinkhovercolor' ) == "") { $childnavlinkhovercolor = "#FFFFFF"; } else { $childnavlinkhovercolor = "#".get_settings( 'rf_childnavlinkhovercolor' ); }

// MAIN CONTENT
if (get_settings( 'rf_mainbgcolor' ) == "") { $mainbgcolor = "#EEE"; } else { $mainbgcolor = "#".get_settings( 'rf_mainbgcolor' ); }
if (get_settings( 'rf_maintextcolor' ) == "") { $maintextcolor = "#333"; } else { $maintextcolor = "#".get_settings( 'rf_maintextcolor' ); }
if (get_settings( 'rf_maintextlinkcolor' ) == "") { $maintextlinkcolor = "#28C"; } else { $maintextlinkcolor = "#".get_settings( 'rf_maintextlinkcolor' ); }
if (get_settings( 'rf_maintextlinkhovercolor' ) == "") { $maintextlinkhovercolor = "#28C"; } else { $maintextlinkhovercolor = "#".get_settings( 'rf_maintextlinkhovercolor' ); }
if (get_settings( 'rf_mainposttitlecolor' ) == "") { $mainposttitlecolor = "#333"; } else { $mainposttitlecolor = "#".get_settings( 'rf_mainposttitlecolor' ); }
if (get_settings( 'rf_mainposttitlehovercolor' ) == "") { $mainposttitlehovercolor = "#28C"; } else { $mainposttitlehovercolor = "#".get_settings( 'rf_mainposttitlehovercolor' ); }
if (get_settings( 'rf_mainpostinfocolor' ) == "") { $mainpostinfocolor = "#AAA"; } else { $mainpostinfocolor = "#".get_settings( 'rf_mainpostinfocolor' ); }
if (get_settings( 'rf_mainpostinfolinkcolor' ) == "") { $mainpostinfolinkcolor = "#AAA"; } else { $mainpostinfolinkcolor = "#".get_settings( 'rf_mainpostinfolinkcolor' ); }
if (get_settings( 'rf_mainpostinfolinkhovercolor' ) == "") { $mainpostinfolinkhovercolor = "#28C"; } else { $mainpostinfolinkhovercolor = "#".get_settings( 'rf_mainpostinfolinkhovercolor' ); }
if (get_settings( 'rf_mainbordercolor' ) == "") { $mainbordercolor = "#999"; } else { $mainbordercolor = "#".get_settings( 'rf_mainbordercolor' ); }
if (get_settings( 'rf_mainheadercolor' ) == "") { $mainheadercolor = "#333"; } else { $mainheadercolor = "#".get_settings( 'rf_mainheadercolor' ); }

// COMMENTS
if (get_settings( 'rf_commentsbgcolor' ) == "") { $commentsbgcolor = "#EEE"; } else { $commentsbgcolor = "#".get_settings( 'rf_commentsbgcolor' ); }
if (get_settings( 'rf_commentstextcolor' ) == "") { $commentstextcolor = "#333"; } else { $commentstextcolor = "#".get_settings( 'rf_commentstextcolor' ); }
if (get_settings( 'rf_commentslinkcolor' ) == "") { $commentslinkcolor = "#28C"; } else { $commentslinkcolor = "#".get_settings( 'rf_commentslinkcolor' ); }
if (get_settings( 'rf_commentslinkhovercolor' ) == "") { $commentslinkhovercolor = "#28C"; } else { $commentslinkhovercolor = "#".get_settings( 'rf_commentslinkhovercolor' ); }
if (get_settings( 'rf_commentsinfotextcolor' ) == "") { $commentsinfotextcolor = "#AAA"; } else { $commentsinfotextcolor = "#".get_settings( 'rf_commentsinfotextcolor' ); }
if (get_settings( 'rf_commentsinfolinkcolor' ) == "") { $commentsinfolinkcolor = "#AAA"; } else { $commentsinfolinkcolor = "#".get_settings( 'rf_commentsinfolinkcolor' ); }
if (get_settings( 'rf_commentsinfolinkhovercolor' ) == "") { $commentsinfolinkhovercolor = "#28C"; } else { $commentsinfolinkhovercolor = "#".get_settings( 'rf_commentsinfolinkhovercolor' ); }
if (get_settings( 'rf_commentsbordercolor' ) == "") { $commentsbordercolor = "#999"; } else { $commentsbordercolor = "#".get_settings( 'rf_commentsbordercolor' ); }

// BOTTOMBAR
if (get_settings( 'rf_bottombgcolor' ) == "") { $bottombgcolor = "#2288CC"; } else { $bottombgcolor = "#".get_settings( 'rf_bottombgcolor' ); }
if (get_settings( 'rf_bottomtitlecolor' ) == "") { $bottomtitlecolor = "#FFFFFF"; } else { $bottomtitlecolor = "#".get_settings( 'rf_bottomtitlecolor' ); }
if (get_settings( 'rf_bottomtextcolor' ) == "") { $bottomtextcolor = "#FFFFFF"; } else { $bottomtextcolor = "#".get_settings( 'rf_bottomtextcolor' ); }
if (get_settings( 'rf_bottomlinkcolor' ) == "") { $bottomlinkcolor = "#FFFFFF"; } else { $bottomlinkcolor = "#".get_settings( 'rf_bottomlinkcolor' ); }
if (get_settings( 'rf_bottomlinkhovercolor' ) == "") { $bottomlinkhovercolor = "#FFFFFF"; } else { $bottomlinkhovercolor = "#".get_settings( 'rf_bottomlinkhovercolor' ); }
if (get_settings( 'rf_bottombordercolor' ) == "") { $bottombordercolor = "#FFFFFF"; } else { $bottombordercolor = "#".get_settings( 'rf_bottombordercolor' ); }

// FOOTER
if (get_settings( 'rf_footerbgcolor' ) == "") { $footerbgcolor = "#88CC22"; } else { $footerbgcolor = "#".get_settings( 'rf_footerbgcolor' ); }
if (get_settings( 'rf_footertextcolor' ) == "") { $footertextcolor = "#FFFFFF"; } else { $footertextcolor = "#".get_settings( 'rf_footertextcolor' ); }
if (get_settings( 'rf_footerlinkcolor' ) == "") { $footerlinkcolor = "#FFFFFF"; } else { $footerlinkcolor = "#".get_settings( 'rf_footerlinkcolor' ); }
if (get_settings( 'rf_footerlinkhovercolor' ) == "") { $footerlinkhovercolor = "#FFFFFF"; } else { $footerlinkhovercolor = "#".get_settings( 'rf_footerlinkhovercolor' ); } ?>

#pickbgcolor { background-color:<?php echo $bgcolor; ?>; }

#pickheaderbgcolor { background-color:<?php echo $headerbgcolor; ?>; }
#picksitetitlecolor { background-color:<?php echo $sitetitlecolor; ?>; }
#picktaglinecolor { background-color:<?php echo $taglinecolor; ?>; }

#picknavbgcolor { background-color:<?php echo $navbgcolor; ?>; }
#picknavlinkcolor { background-color:<?php echo $navlinkcolor; ?>; }
#picknavlinkhovercolor { background-color:<?php echo $navlinkhovercolor; ?>; }

#pickchildnavbgcolor { background-color:<?php echo $childnavbgcolor; ?>; }
#pickchildnavlinkcolor { background-color:<?php echo $childnavlinkcolor; ?>; }
#pickchildnavlinkhovercolor { background-color:<?php echo $childnavlinkhovercolor; ?>; }

#pickmainbgcolor { background-color:<?php echo $mainbgcolor; ?>; }
#pickmaintextcolor { background-color:<?php echo $maintextcolor; ?>; }
#pickmaintextlinkcolor { background-color:<?php echo $maintextlinkcolor; ?>; }
#pickmaintextlinkhovercolor { background-color:<?php echo $maintextlinkhovercolor; ?>; }
#pickmainposttitlecolor { background-color:<?php echo $mainposttitlecolor; ?>; }
#pickmainposttitlehovercolor { background-color:<?php echo $mainposttitlehovercolor; ?>; }
#pickmainpostinfocolor { background-color:<?php echo $mainpostinfocolor; ?>; }
#pickmainpostinfolinkcolor { background-color:<?php echo $mainpostinfolinkcolor; ?>; }
#pickmainpostinfolinkhovercolor { background-color:<?php echo $mainpostinfolinkhovercolor; ?>; }
#pickmainbordercolor { background-color:<?php echo $mainbordercolor; ?>; }
#pickmainheadercolor { background-color:<?php echo $mainheadercolor; ?>; }

#pickcommentsbgcolor { background-color:<?php echo $commentsbgcolor; ?>; }
#pickcommentstextcolor { background-color:<?php echo $commentstextcolor; ?>; }
#pickcommentslinkcolor { background-color:<?php echo $commentslinkcolor; ?>; }
#pickcommentslinkhovercolor { background-color:<?php echo $commentslinkhovercolor; ?>; }
#pickcommentsinfotextcolor { background-color:<?php echo $commentsinfotextcolor; ?>; }
#pickcommentsinfolinkcolor { background-color:<?php echo $commentsinfolinkcolor; ?>; }
#pickcommentsinfolinkhovercolor { background-color:<?php echo $commentsinfolinkhovercolor; ?>; }
#pickcommentsbordercolor { background-color:<?php echo $commentsbordercolor; ?>; }

#pickbottombgcolor { background-color:<?php echo $bottombgcolor; ?>; }
#pickbottomtitlecolor { background-color:<?php echo $bottomtitlecolor; ?>; }
#pickbottomtextcolor { background-color:<?php echo $bottomtextcolor; ?>; }
#pickbottomlinkcolor { background-color:<?php echo $bottomlinkcolor; ?>; }
#pickbottomlinkhovercolor { background-color:<?php echo $bottomlinkhovercolor; ?>; }
#pickbottombordercolor { background-color:<?php echo $bottombordercolor; ?>; }

#pickfooterbgcolor { background-color:<?php echo $footerbgcolor; ?>; }
#pickfootertextcolor { background-color:<?php echo $footertextcolor; ?>; }
#pickfooterlinkcolor { background-color:<?php echo $footerlinkcolor; ?>; }
#pickfooterlinkhovercolor { background-color:<?php echo $footerlinkhovercolor; ?>; }

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

.rfpickcolor a:link, .rfpickcolor a:visited {
text-decoration:none;
display:block;
width:100%;
height:100%;
border:0;
}

.rfpickcolor {
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