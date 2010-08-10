<?php
require_once( dirname(__FILE__) . '../../../../wp-config.php');
header("Content-type: text/css"); 


// GENERAL

	// SITE WIDTH
	if (get_settings( 'rf_sitewidth' ) === FALSE) { $sitewidth = "70"; } else { $sitewidth = get_settings( 'rf_sitewidth' ); }

	// WIDTH TYPE
	if (get_settings( 'rf_sitewidthtype' ) == "") { $sitewidthtype = "%"; } else { $sitewidthtype = get_settings( 'rf_sitewidthtype' ); }

	// SITE FONT
	if (get_settings( 'rf_font' ) == "") { $font = '"Lucida Grande", Verdana, Arial, Sans-Serif'; } else { $font = stripslashes(get_settings( 'rf_font' )); }

	// BACKGROUND COLOR
	if (get_settings( 'rf_bgcolor' ) == "") { $bgcolor = "#222"; } else { $bgcolor = "#".get_settings( 'rf_bgcolor' ); }

	// TOP AND BOTTOM PADDING
	if (get_settings( 'rf_topbottompadding' ) == "") { $topbottompadding = "40"; } else { $topbottompadding = get_settings( 'rf_topbottompadding' ); }

// HEADER

	// HEADER COLOR
	if (get_settings( 'rf_headerbgcolor' ) == "") { $headerbgcolor = "#D82"; } else { $headerbgcolor = "#".get_settings( 'rf_headerbgcolor' ); }

	// SITE TITLE COLOR
	if (get_settings( 'rf_sitetitlecolor' ) == "") { $sitetitlecolor = "#FFF"; } else { $sitetitlecolor = "#".get_settings( 'rf_sitetitlecolor' ); }

	// TAG LINE COLOR
	if (get_settings( 'rf_taglinecolor' ) == "") { $taglinecolor = "#FFF"; } else { $taglinecolor = "#".get_settings( 'rf_taglinecolor' ); }


// NAVIGATION
	
	// NAVIGATION COLOR
	if (get_settings( 'rf_navbgcolor' ) == "") { $navbgcolor = "#8C2"; } else { $navbgcolor = "#".get_settings( 'rf_navbgcolor' ); }

	// LINK COLOR
	if (get_settings( 'rf_navlinkcolor' ) == "") { $navlinkcolor = "#FFF"; } else { $navlinkcolor = "#".get_settings( 'rf_navlinkcolor' ); }

	// LINK HOVER COLOR
	if (get_settings( 'rf_navlinkhovercolor' ) == "") { $navlinkhovercolor = "#FFF"; } else { $navlinkhovercolor = "#".get_settings( 'rf_navlinkhovercolor' ); }


// CHILD PAGE NAVIGATION
	
	// CHILD PAGE NAVIGATION COLOR
	if (get_settings( 'rf_childnavbgcolor' ) == "") { $childnavbgcolor = "#28C"; } else { $childnavbgcolor = "#".get_settings( 'rf_childnavbgcolor' ); }

	// LINK COLOR
	if (get_settings( 'rf_childnavlinkcolor' ) == "") { $childnavlinkcolor = "#FFF"; } else { $childnavlinkcolor = "#".get_settings( 'rf_childnavlinkcolor' ); }

	// LINK HOVER COLOR
	if (get_settings( 'rf_childnavlinkhovercolor' ) == "") { $childnavlinkhovercolor = "#FFF"; } else { $childnavlinkhovercolor = "#".get_settings( 'rf_childnavlinkhovercolor' ); }


// MAIN CONTENT
	
	// MAIN CONTENT COLOR
	if (get_settings( 'rf_mainbgcolor' ) == "") { $mainbgcolor = "#EEE"; } else { $mainbgcolor = "#".get_settings( 'rf_mainbgcolor' ); }

	// TEXT COLOR
	if (get_settings( 'rf_maintextcolor' ) == "") { $maintextcolor = "#333"; } else { $maintextcolor = "#".get_settings( 'rf_maintextcolor' ); }

	// TEXT LINK COLOR
	if (get_settings( 'rf_maintextlinkcolor' ) == "") { $maintextlinkcolor = "#28C"; } else { $maintextlinkcolor = "#".get_settings( 'rf_maintextlinkcolor' ); }

	// TEXT LINK HOVER COLOR
	if (get_settings( 'rf_maintextlinkhovercolor' ) == "") { $maintextlinkhovercolor = "#28C"; } else { $maintextlinkhovercolor = "#".get_settings( 'rf_maintextlinkhovercolor' ); }

	// POST TITLE COLOR
	if (get_settings( 'rf_mainposttitlecolor' ) == "") { $mainposttitlecolor = "#333"; } else { $mainposttitlecolor = "#".get_settings( 'rf_mainposttitlecolor' ); }

	// POST TITLE HOVER COLOR
	if (get_settings( 'rf_mainposttitlehovercolor' ) == "") { $mainposttitlehovercolor = "#28C"; } else { $mainposttitlehovercolor = "#".get_settings( 'rf_mainposttitlehovercolor' ); }

	// POST INFO COLOR
	if (get_settings( 'rf_mainpostinfocolor' ) == "") { $mainpostinfocolor = "#AAA"; } else { $mainpostinfocolor = "#".get_settings( 'rf_mainpostinfocolor' ); }

	// POST INFO LINK COLOR
	if (get_settings( 'rf_mainpostinfolinkcolor' ) == "") { $mainpostinfolinkcolor = "#AAA"; } else { $mainpostinfolinkcolor = "#".get_settings( 'rf_mainpostinfolinkcolor' ); }

	// POST INFO LINK HOVER COLOR
	if (get_settings( 'rf_mainpostinfolinkhovercolor' ) == "") { $mainpostinfolinkhovercolor = "#28C"; } else { $mainpostinfolinkhovercolor = "#".get_settings( 'rf_mainpostinfolinkhovercolor' ); }

	// BORDER COLOR
	if (get_settings( 'rf_mainbordercolor' ) == "") { $mainbordercolor = "#999"; } else { $mainbordercolor = "#".get_settings( 'rf_mainbordercolor' ); }

	// H1, H2, H3 COLOR
	if (get_settings( 'rf_mainheadercolor' ) == "") { $mainheadercolor = "#333"; } else { $mainheadercolor = "#".get_settings( 'rf_mainheadercolor' ); }


// COMMENTS

	// COMMENTS COLOR
	if (get_settings( 'rf_commentsbgcolor' ) == "") { $commentsbgcolor = "#EEE"; } else { $commentsbgcolor = "#".get_settings( 'rf_commentsbgcolor' ); }

	// TEXT COLOR
	if (get_settings( 'rf_commentstextcolor' ) == "") { $commentstextcolor = "#333"; } else { $commentstextcolor = "#".get_settings( 'rf_commentstextcolor' ); }

	// LINK COLOR
	if (get_settings( 'rf_commentslinkcolor' ) == "") { $commentslinkcolor = "#28C"; } else { $commentslinkcolor = "#".get_settings( 'rf_commentslinkcolor' ); }

	// LINK HOVER COLOR
	if (get_settings( 'rf_commentslinkhovercolor' ) == "") { $commentslinkhovercolor = "#28C"; } else { $commentslinkhovercolor = "#".get_settings( 'rf_commentslinkhovercolor' ); }

	// INFO TEXT COLOR
	if (get_settings( 'rf_commentsinfotextcolor' ) == "") { $commentsinfotextcolor = "#AAA"; } else { $commentsinfotextcolor = "#".get_settings( 'rf_commentsinfotextcolor' ); }

	// INFO LINK COLOR
	if (get_settings( 'rf_commentsinfolinkcolor' ) == "") { $commentsinfolinkcolor = "#AAA"; } else { $commentsinfolinkcolor = "#".get_settings( 'rf_commentsinfolinkcolor' ); }

	// INFO LINK HOVER COLOR
	if (get_settings( 'rf_commentsinfolinkhovercolor' ) == "") { $commentsinfolinkhovercolor = "#28C"; } else { $commentsinfolinkhovercolor = "#".get_settings( 'rf_commentsinfolinkhovercolor' ); }

	// BORDER COLOR
	if (get_settings( 'rf_commentsbordercolor' ) == "") { $commentsbordercolor = "#999"; } else { $commentsbordercolor = "#".get_settings( 'rf_commentsbordercolor' ); }


// BOTTOMBAR

	// BOTTOMBAR COLOR
	if (get_settings( 'rf_bottombgcolor' ) == "") { $bottombgcolor = "#28C"; } else { $bottombgcolor = "#".get_settings( 'rf_bottombgcolor' ); }

	// TITLE COLOR
	if (get_settings( 'rf_bottomtitlecolor' ) == "") { $bottomtitlecolor = "#FFF"; } else { $bottomtitlecolor = "#".get_settings( 'rf_bottomtitlecolor' ); }

	// TEXT COLOR
	if (get_settings( 'rf_bottomtextcolor' ) == "") { $bottomtextcolor = "#FFF"; } else { $bottomtextcolor = "#".get_settings( 'rf_bottomtextcolor' ); }

	// LINK COLOR
	if (get_settings( 'rf_bottomlinkcolor' ) == "") { $bottomlinkcolor = "#FFF"; } else { $bottomlinkcolor = "#".get_settings( 'rf_bottomlinkcolor' ); }

	// LINK HOVER COLOR
	if (get_settings( 'rf_bottomlinkhovercolor' ) == "") { $bottomlinkhovercolor = "#FFF"; } else { $bottomlinkhovercolor = "#".get_settings( 'rf_bottomlinkhovercolor' ); }

	// BORDER COLOR
	if (get_settings( 'rf_bottombordercolor' ) == "") { $bottombordercolor = "#FFF"; } else { $bottombordercolor = "#".get_settings( 'rf_bottombordercolor' ); }


// FOOTER

	// FOOTER COLOR
	if (get_settings( 'rf_footerbgcolor' ) == "") { $footerbgcolor = "#8C2"; } else { $footerbgcolor = "#".get_settings( 'rf_footerbgcolor' ); }

	// TEXT COLOR
	if (get_settings( 'rf_footertextcolor' ) == "") { $footertextcolor = "#FFF"; } else { $footertextcolor = "#".get_settings( 'rf_footertextcolor' ); }

	// LINK COLOR
	if (get_settings( 'rf_footerlinkcolor' ) == "") { $footerlinkcolor = "#FFF"; } else { $footerlinkcolor = "#".get_settings( 'rf_footerlinkcolor' ); }

	// LINK HOVER COLOR
	if (get_settings( 'rf_footerlinkhovercolor' ) == "") { $footerlinkhovercolor = "#FFF"; } else { $footerlinkhovercolor = "#".get_settings( 'rf_footerlinkhovercolor' ); } ?>

body{ 
margin:0 auto 0 auto;
font-family:<?php echo $font; ?>;
font-size:12px;
line-height:17px;
color:#333;
background-color:<?php echo $bgcolor; ?>;
}

a:link, a:visited {
text-decoration:none;
}

form {
display:inline;
margin:0;
padding:0;
}

blockquote {
font-style:italic;
}

a img {
border:0;
}

#wrapper {
margin:0 auto 0 auto;
padding:<?php echo $topbottompadding; ?>px 0 <?php echo $topbottompadding; ?>px 0;
width:<?php echo $sitewidth.$sitewidthtype; ?>;
}

#header {
position:relative;
background-color:<?php echo $headerbgcolor; ?>;

}

    #header h1 {
    padding:45px 0 0 5%;
    margin:0;

    text-align:left;
    color:<?php echo $sitetitlecolor; ?>;
    font-weight:bold;
    line-height:25px;
    font-size:25px;
    }
    
    #header h2 {
    padding:0 0 30px 8%;
    margin:0;
    text-align:left;
    color:<?php echo $taglinecolor; ?>;
    font-weight:lighter;
    line-height:14px;
    font-size:14px;
    }

#navigation {
margin:5px 0 0 0;
background-color:<?php echo $navbgcolor; ?>;
}

    #navigation ul {
    margin:0;
    padding:0;
    display:block;
    position:relative;
    margin:0 0 0 5%;
    list-style:none;
    }
    
        #navigation ul li {
        display:inline;
        }
        
            #navigation ul li a:link, #navigation ul li a:visited {
            font-size:10px;
            line-height:30px;
            text-transform:uppercase;
            display:inline;
            font-weight:bold;
            padding:5px 0 5px 0;
            margin:0 10px 0 0;
            color:<?php echo $navlinkcolor; ?>;
            }
            
            #navigation ul li a:hover {
            text-decoration:underline;
            color:<?php echo $navlinkhovercolor; ?>;
            }

#childnavigation {
margin:5px 0 0 0;
background-color:<?php echo $childnavbgcolor; ?>;
}

    #childnavigation ul {
    margin:0;
    padding:0;
    display:block;
    position:relative;
    margin:0 0 0 5%;
    list-style:none;
    }
    
        #childnavigation ul li {
        display:inline;
        }
        
            #childnavigation ul li a:link, #childnavigation ul li a:visited {
            font-size:10px;
            line-height:30px;
            text-transform:uppercase;
            display:inline;
            font-weight:bold;
            padding:5px 0 5px 0;
            margin:0 10px 0 0;
            color:<?php echo $childnavlinkcolor; ?>;
            }
            
            #childnavigation ul li a:hover {
            text-decoration:underline;
	   color:<?php echo $childnavlinkhovercolor; ?>;
            }

#maincontent {
background-color:<?php echo $mainbgcolor; ?>;
margin:5px 0 0 0;
padding:30px 0 0 0;
}

    .post {
    width:90%;
    margin:0 auto 0 auto;

    }
    
        .posttitle {
        margin:0;
        font-size:20px;
        line-height:20px;
        font-weight:bold;
        letter-spacing:2px;
        }
        
            .posttitle a:link, .posttitle a:visited {
            color:<?php echo $mainposttitlecolor; ?>;
            }
            
            .posttitle a:hover {
            color:<?php echo $mainposttitlehovercolor; ?>;
            }
        
        .postinfo {
        margin:0;
        color:<?php echo $mainpostinfocolor; ?>;
        display:block;
        border-top:1px solid <?php echo $mainbordercolor; ?>;
        line-height:15px;
        text-transform:uppercase;
        font-size:9px;
        }
        
            .postinfo a:link, .postinfo a:visited {
            color:<?php echo $mainpostinfolinkcolor; ?>;
            }
            
            .postinfo a:hover {
            color:<?php echo $mainpostinfolinkhovercolor; ?>;
            }
        
        .postcontent {
        padding:0 0 30px 0;
        color:<?php echo $maintextcolor; ?>;
        }
        
        .postcontent p {
        margin:10px 0 0 0;
        }
        
        .postcontent p + p {
        margin:0;
        text-indent:11px;
        }
        
        .postcontent a:link, .postcontent a:visited {
        color:<?php echo $maintextlinkcolor; ?>;
        }
        
        .postcontent a:hover {
        text-decoration:underline;
        color:<?php echo $maintextlinkhovercolor; ?>;
        }

        .postcontent img {
        float:right;
        padding:0 0 10px 10px;
        }
        
        .postcontent h1 {
        margin:15px 0 0 0;
        font-size:16px;
        line-height:20px;
        font-weight:bold;
        letter-spacing:2px;
        color:<?php echo $mainheadercolor; ?>;
        border-bottom:1px solid <?php echo $mainbordercolor; ?>;
        }
        
        .postcontent h2 {
        margin:15px 0 0 0;
        font-size:14px;
        line-height:20px;
        font-weight:bold;
        letter-spacing:2px;
        color:<?php echo $mainheadercolor; ?>;
        border-bottom:1px solid <?php echo $mainbordercolor; ?>;
        }
        
        .postcontent h3 {
        margin:15px 0 0 0;
        font-size:12px;
        line-height:20px;
        font-weight:bold;
        letter-spacing:2px;
        color:<?php echo $mainheadercolor; ?>;
        border-bottom:1px solid <?php echo $mainbordercolor; ?>;
        }
        
        .postcontent .pagenav {
        text-align:center;
        }

#comments {
margin:5px 0 0 0;
padding:20px 0 0 0;
background-color:<?php echo $commentsbgcolor; ?>;
}
    
        #comments a:link, #comments a:visited {
        color:<?php echo $commentslinkcolor; ?>;
        }
        
        #comments a:hover {
	text-decoration:underline;
	color:<?php echo $commentslinkhovercolor; ?>;
        }
    
    #comment, #author, #url, #email {
    width:100%;
    }

    #comments h3 {
    margin:0;
    font-size:15px;
    line-height:20px;
    font-weight:bold;
    letter-spacing:2px;
    border-bottom:1px solid <?php echo $commentsbordercolor; ?>;
    }

    .comment {
    width:90%;
    margin:0 auto 0 auto;
    color:<?php echo $commentstextcolor; ?>;
    font-size:11px;
    }
    
        #comments .commentinfo {
        margin:20px 0 0 0;
        color:<?php echo $commentsinfotextcolor; ?>;
        display:block;
        border-bottom:1px solid <?php echo $commentsbordercolor; ?>;
        line-height:15px;
        text-transform:uppercase;
        font-size:9px;
        }
        
            #comments .commentinfo a:link, #comments .commentinfo a:visited {
            color:<?php echo $commentsinfolinkcolor; ?>;
            }
            
	#comments .commentinfo a:hover {
	color:<?php echo $commentsinfolinkhovercolor; ?>;
	text-decoration:none;
	}

#bottombar {
margin:5px 0 0 0;
background-color:<?php echo $bottombgcolor; ?>;
}

    #bottombar .column1 {
    position:inline;
    float:left;
    width:42%;
    padding:20px 0 0 5%;
    }
    
    #bottombar .column2 {
    position:inline;
    float:right;
    width:42%;
    padding:20px 5% 0 0;
    }

    #bottombar .spacer {
    line-height:5px;
    clear:both;
    }
    
    #bottombar ul {
    margin:0;
    padding:0;
    list-style:none;
    }
    
        #bottombar ul li {
        margin:0;
        padding:0;
        }
        
            #bottombar ul li h2 {
            margin:0;
            text-align:center;
            display:block;
            color:<?php echo $bottomtitlecolor; ?>;
            font-weight:bold;
            line-height:20px;
            font-size:11px;
            text-transform:uppercase;
            border-bottom:2px solid <?php echo $bottombordercolor; ?>;
            }
            
            #bottombar ul li {
            margin:0 0 20px 0;
            }
            
                #bottombar ul li ul li, #bottombar ul li div {
                color:<?php echo $bottomtextcolor; ?>;
                text-transform:uppercase;
                font-size:10px;
                line-height:20px;
                display:block;
                border-bottom:1px dotted <?php echo $bottombordercolor; ?>;
                text-align:center;
	       margin:0;
                }
                
        #bottombar a:link, #bottombar a:visited {
        color:<?php echo $bottomlinkcolor; ?>;
        }

        #bottombar a:hover {
	text-decoration:underline;
	color:<?php echo $bottomlinkhovercolor; ?>;
        }

#wp-calendar {
	width:80%;
	text-align:center;
	border-collapse: collapse;
	color:<?php echo $bottomtextcolor; ?>;
	margin:0 auto 0 auto;
}

#wp-calendar caption, #wp-calendar th {
	color:<?php echo $bottomtitlecolor; ?>;
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
	color:<?php echo $bottomtitlecolor; ?>;
}

#wp-calendar a:link, #wp-calendar a:visited {
	color:<?php echo $bottomlinkcolor; ?>;
	font-weight:bold;
}

#wp-calendar a:hover {
	color:<?php echo $bottomlinkhovercolor; ?>;
	text-decoration:underline;
}


#footer {
margin:5px 0 0 0;
background-color:<?php echo $footerbgcolor; ?>;
}

    #footer p {
    text-align:center;
    font-size:10px;
    margin:0;
    line-height:30px;
    text-transform:uppercase;
    color:<?php echo $footertextcolor; ?>;
    }
    
    #footer a:link, #footer a:visited {
    color:<?php echo $footerlinkcolor; ?>;
    }
    
    #footer a:hover {
    text-decoration:underline;
    color:<?php echo $footerlinkhovercolor; ?>;
    }