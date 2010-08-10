<?php 
if ( function_exists('register_sidebar') ) {
register_sidebar(array('name' => 'Bottom Left'));
register_sidebar(array('name' => 'Bottom Right')); } 

function widget_rf_search() { ?>
<li id="search" class="widget widget_search">
<h2 class="widgettitle">Search</h2>
<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<ul><li>
<input type="text" name="s" id="s" size="15" /> <input type="submit" value="Search" />
</li></ul>
</form>
</li>
<?php }

if ( function_exists('register_sidebar_widget') ) {
register_sidebar_widget(__('Search'), 'widget_rf_search'); }

function rf_add_admin() {

	if ( $_GET['page'] == basename(__FILE__) ) {
	
	    // save settings
		if ( 'save' == $_REQUEST['action'] ) {


// -------------
// ROUND 1
// -------------


// GENERAL
update_option( 'rf_sitewidth', $_REQUEST[ 'rf_sitewidth' ] );
update_option( 'rf_sitewidthtype', $_REQUEST[ 'rf_sitewidthtype' ] );
update_option( 'rf_font', $_REQUEST[ 'rf_font' ] );
update_option( 'rf_bgcolor', $_REQUEST[ 'rf_bgcolor' ] );
update_option( 'rf_roundedcorners', $_REQUEST[ 'rf_roundedcorners' ] );
update_option( 'rf_topbottompadding', $_REQUEST[ 'rf_topbottompadding' ] );

// HEADER
update_option( 'rf_headerbgcolor', $_REQUEST[ 'rf_headerbgcolor' ] );
update_option( 'rf_sitetitlecolor', $_REQUEST[ 'rf_sitetitlecolor' ] );
update_option( 'rf_taglinecolor', $_REQUEST[ 'rf_taglinecolor' ] );

// NAVIGATION
update_option( 'rf_navbgcolor', $_REQUEST[ 'rf_navbgcolor' ] );
update_option( 'rf_navlinkcolor', $_REQUEST[ 'rf_navlinkcolor' ] );
update_option( 'rf_navlinkhovercolor', $_REQUEST[ 'rf_navlinkhovercolor' ] );


// CHILD PAGE NAVIGATION
update_option( 'rf_childnavbgcolor', $_REQUEST[ 'rf_childnavbgcolor' ] );
update_option( 'rf_childnavlinkcolor', $_REQUEST[ 'rf_childnavlinkcolor' ] );
update_option( 'rf_childnavlinkhovercolor', $_REQUEST[ 'rf_childnavlinkhovercolor' ] );

// MAIN CONTENT
update_option( 'rf_mainbgcolor', $_REQUEST[ 'rf_mainbgcolor' ] );
update_option( 'rf_maintextcolor', $_REQUEST[ 'rf_maintextcolor' ] );
update_option( 'rf_maintextlinkcolor', $_REQUEST[ 'rf_maintextlinkcolor' ] );
update_option( 'rf_maintextlinkhovercolor', $_REQUEST[ 'rf_maintextlinkhovercolor' ] );
update_option( 'rf_mainposttitlecolor', $_REQUEST[ 'rf_mainposttitlecolor' ] );
update_option( 'rf_mainposttitlehovercolor', $_REQUEST[ 'rf_mainposttitlehovercolor' ] );
update_option( 'rf_mainpostinfocolor', $_REQUEST[ 'rf_mainpostinfocolor' ] );
update_option( 'rf_mainpostinfolinkcolor', $_REQUEST[ 'rf_mainpostinfolinkcolor' ] );
update_option( 'rf_mainpostinfolinkhovercolor', $_REQUEST[ 'rf_mainpostinfolinkhovercolor' ] );
update_option( 'rf_mainbordercolor', $_REQUEST[ 'rf_mainbordercolor' ] );
update_option( 'rf_mainheadercolor', $_REQUEST[ 'rf_mainheadercolor' ] );

// COMMENTS
update_option( 'rf_commentsbgcolor', $_REQUEST[ 'rf_commentsbgcolor' ] );
update_option( 'rf_commentstextcolor', $_REQUEST[ 'rf_commentstextcolor' ] );
update_option( 'rf_commentslinkcolor', $_REQUEST[ 'rf_commentslinkcolor' ] );
update_option( 'rf_commentslinkhovercolor', $_REQUEST[ 'rf_commentslinkhovercolor' ] );
update_option( 'rf_commentsinfotextcolor', $_REQUEST[ 'rf_commentsinfotextcolor' ] );
update_option( 'rf_commentsinfolinkcolor', $_REQUEST[ 'rf_commentsinfolinkcolor' ] );
update_option( 'rf_commentsinfolinkhovercolor', $_REQUEST[ 'rf_commentsinfolinkhovercolor' ] );
update_option( 'rf_commentsbordercolor', $_REQUEST[ 'rf_commentsbordercolor' ] );

// BOTTOMBAR
update_option( 'rf_bottombgcolor', $_REQUEST[ 'rf_bottombgcolor' ] );
update_option( 'rf_bottomtitlecolor', $_REQUEST[ 'rf_bottomtitlecolor' ] );
update_option( 'rf_bottomtextcolor', $_REQUEST[ 'rf_bottomtextcolor' ] );
update_option( 'rf_bottomlinkcolor', $_REQUEST[ 'rf_bottomlinkcolor' ] );
update_option( 'rf_bottomlinkhovercolor', $_REQUEST[ 'rf_bottomlinkhovercolor' ] );
update_option( 'rf_bottombordercolor', $_REQUEST[ 'rf_bottombordercolor' ] );

// FOOTER
update_option( 'rf_footerbgcolor', $_REQUEST[ 'rf_footerbgcolor' ] );
update_option( 'rf_footertextcolor', $_REQUEST[ 'rf_footertextcolor' ] );
update_option( 'rf_footerlinkcolor', $_REQUEST[ 'rf_footerlinkcolor' ] );
update_option( 'rf_footerlinkhovercolor', $_REQUEST[ 'rf_footerlinkhovercolor' ] );


// -------------
// ROUND 2
// -------------


// GENERAL
if( isset( $_REQUEST[ 'rf_sitewidth' ] ) ) { update_option( 'rf_sitewidth', $_REQUEST[ 'rf_sitewidth' ]  ); } else { delete_option( 'rf_sitewidth' ); }
if( isset( $_REQUEST[ 'rf_sitewidthtype' ] ) ) { update_option( 'rf_sitewidthtype', $_REQUEST[ 'rf_sitewidthtype' ]  ); } else { delete_option( 'rf_sitewidthtype' ); }
if( isset( $_REQUEST[ 'rf_font' ] ) ) { update_option( 'rf_font', $_REQUEST[ 'rf_font' ]  ); } else { delete_option( 'rf_font' ); }
if( isset( $_REQUEST[ 'rf_bgcolor' ] ) ) { update_option( 'rf_bgcolor', $_REQUEST[ 'rf_bgcolor' ]  ); } else { delete_option( 'rf_bgcolor' ); }
if( isset( $_REQUEST[ 'rf_roundedcorners' ] ) ) { update_option( 'rf_roundedcorners', $_REQUEST[ 'rf_roundedcorners' ]  ); } else { delete_option( 'rf_roundedcorners' ); }
if( isset( $_REQUEST[ 'rf_topbottompadding' ] ) ) { update_option( 'rf_topbottompadding', $_REQUEST[ 'rf_topbottompadding' ]  ); } else { delete_option( 'rf_topbottompadding' ); }

// HEADER
if( isset( $_REQUEST[ 'rf_headerbgcolor' ] ) ) { update_option( 'rf_headerbgcolor', $_REQUEST[ 'rf_headerbgcolor' ]  ); } else { delete_option( 'rf_headerbgcolor' ); }
if( isset( $_REQUEST[ 'rf_sitetitlecolor' ] ) ) { update_option( 'rf_sitetitlecolor', $_REQUEST[ 'rf_sitetitlecolor' ]  ); } else { delete_option( 'rf_sitetitlecolor' ); }
if( isset( $_REQUEST[ 'rf_taglinecolor' ] ) ) { update_option( 'rf_taglinecolor', $_REQUEST[ 'rf_taglinecolor' ]  ); } else { delete_option( 'rf_taglinecolor' ); }

// NAVIGATION
if( isset( $_REQUEST[ 'rf_navbgcolor' ] ) ) { update_option( 'rf_navbgcolor', $_REQUEST[ 'rf_navbgcolor' ]  ); } else { delete_option( 'rf_navbgcolor' ); }
if( isset( $_REQUEST[ 'rf_navlinkcolor' ] ) ) { update_option( 'rf_navlinkcolor', $_REQUEST[ 'rf_navlinkcolor' ]  ); } else { delete_option( 'rf_navlinkcolor' ); }
if( isset( $_REQUEST[ 'rf_navlinkhovercolor' ] ) ) { update_option( 'rf_navlinkhovercolor', $_REQUEST[ 'rf_navlinkhovercolor' ]  ); } else { delete_option( 'rf_navlinkhovercolor' ); }

// CHILD PAGE NAVIGATION
if( isset( $_REQUEST[ 'rf_childnavbgcolor' ] ) ) { update_option( 'rf_childnavbgcolor', $_REQUEST[ 'rf_childnavbgcolor' ]  ); } else { delete_option( 'rf_childnavbgcolor' ); }
if( isset( $_REQUEST[ 'rf_childnavlinkcolor' ] ) ) { update_option( 'rf_childnavlinkcolor', $_REQUEST[ 'rf_childnavlinkcolor' ]  ); } else { delete_option( 'rf_childnavlinkcolor' ); }
if( isset( $_REQUEST[ 'rf_childnavlinkhovercolor' ] ) ) { update_option( 'rf_childnavlinkhovercolor', $_REQUEST[ 'rf_childnavlinkhovercolor' ]  ); } else { delete_option( 'rf_childnavlinkhovercolor' ); }

// MAIN CONTENT
if( isset( $_REQUEST[ 'rf_mainbgcolor' ] ) ) { update_option( 'rf_mainbgcolor', $_REQUEST[ 'rf_mainbgcolor' ]  ); } else { delete_option( 'rf_mainbgcolor' ); }
if( isset( $_REQUEST[ 'rf_maintextcolor' ] ) ) { update_option( 'rf_maintextcolor', $_REQUEST[ 'rf_maintextcolor' ]  ); } else { delete_option( 'rf_maintextcolor' ); }
if( isset( $_REQUEST[ 'rf_maintextlinkcolor' ] ) ) { update_option( 'rf_maintextlinkcolor', $_REQUEST[ 'rf_maintextlinkcolor' ]  ); } else { delete_option( 'rf_maintextlinkcolor' ); }
if( isset( $_REQUEST[ 'rf_maintextlinkhovercolor' ] ) ) { update_option( 'rf_maintextlinkhovercolor', $_REQUEST[ 'rf_maintextlinkhovercolor' ]  ); } else { delete_option( 'rf_maintextlinkhovercolor' ); }
if( isset( $_REQUEST[ 'rf_mainposttitlecolor' ] ) ) { update_option( 'rf_mainposttitlecolor', $_REQUEST[ 'rf_mainposttitlecolor' ]  ); } else { delete_option( 'rf_mainposttitlecolor' ); }
if( isset( $_REQUEST[ 'rf_mainposttitlehovercolor' ] ) ) { update_option( 'rf_mainposttitlehovercolor', $_REQUEST[ 'rf_mainposttitlehovercolor' ]  ); } else { delete_option( 'rf_mainposttitlehovercolor' ); }
if( isset( $_REQUEST[ 'rf_mainpostinfocolor' ] ) ) { update_option( 'rf_mainpostinfocolor', $_REQUEST[ 'rf_mainpostinfocolor' ]  ); } else { delete_option( 'rf_mainpostinfocolor' ); }
if( isset( $_REQUEST[ 'rf_mainpostinfolinkcolor' ] ) ) { update_option( 'rf_mainpostinfolinkcolor', $_REQUEST[ 'rf_mainpostinfolinkcolor' ]  ); } else { delete_option( 'rf_mainpostinfolinkcolor' ); }
if( isset( $_REQUEST[ 'rf_mainpostinfolinkhovercolor' ] ) ) { update_option( 'rf_mainpostinfolinkhovercolor', $_REQUEST[ 'rf_mainpostinfolinkhovercolor' ]  ); } else { delete_option( 'rf_mainpostinfolinkhovercolor' ); }
if( isset( $_REQUEST[ 'rf_mainbordercolor' ] ) ) { update_option( 'rf_mainbordercolor', $_REQUEST[ 'rf_mainbordercolor' ]  ); } else { delete_option( 'rf_mainbordercolor' ); }
if( isset( $_REQUEST[ 'rf_mainheadercolor' ] ) ) { update_option( 'rf_mainheadercolor', $_REQUEST[ 'rf_mainheadercolor' ]  ); } else { delete_option( 'rf_mainheadercolor' ); }

// COMMENTS
if( isset( $_REQUEST[ 'rf_commentsbgcolor' ] ) ) { update_option( 'rf_commentsbgcolor', $_REQUEST[ 'rf_commentsbgcolor' ]  ); } else { delete_option( 'rf_commentsbgcolor' ); }
if( isset( $_REQUEST[ 'rf_commentstextcolor' ] ) ) { update_option( 'rf_commentstextcolor', $_REQUEST[ 'rf_commentstextcolor' ]  ); } else { delete_option( 'rf_commentstextcolor' ); }
if( isset( $_REQUEST[ 'rf_commentslinkcolor' ] ) ) { update_option( 'rf_commentslinkcolor', $_REQUEST[ 'rf_commentslinkcolor' ]  ); } else { delete_option( 'rf_commentslinkcolor' ); }
if( isset( $_REQUEST[ 'rf_commentslinkhovercolor' ] ) ) { update_option( 'rf_commentslinkhovercolor', $_REQUEST[ 'rf_commentslinkhovercolor' ]  ); } else { delete_option( 'rf_commentslinkhovercolor' ); }
if( isset( $_REQUEST[ 'rf_commentsinfotextcolor' ] ) ) { update_option( 'rf_commentsinfotextcolor', $_REQUEST[ 'rf_commentsinfotextcolor' ]  ); } else { delete_option( 'rf_commentsinfotextcolor' ); }
if( isset( $_REQUEST[ 'rf_commentsinfolinkcolor' ] ) ) { update_option( 'rf_commentsinfolinkcolor', $_REQUEST[ 'rf_commentsinfolinkcolor' ]  ); } else { delete_option( 'rf_commentsinfolinkcolor' ); }
if( isset( $_REQUEST[ 'rf_commentsinfolinkhovercolor' ] ) ) { update_option( 'rf_commentsinfolinkhovercolor', $_REQUEST[ 'rf_commentsinfolinkhovercolor' ]  ); } else { delete_option( 'rf_commentsinfolinkhovercolor' ); }
if( isset( $_REQUEST[ 'rf_commentsbordercolor' ] ) ) { update_option( 'rf_commentsbordercolor', $_REQUEST[ 'rf_commentsbordercolor' ]  ); } else { delete_option( 'rf_commentsbordercolor' ); }

// BOTTOMBAR
if( isset( $_REQUEST[ 'rf_bottombgcolor' ] ) ) { update_option( 'rf_bottombgcolor', $_REQUEST[ 'rf_bottombgcolor' ]  ); } else { delete_option( 'rf_bottombgcolor' ); }
if( isset( $_REQUEST[ 'rf_bottomtitlecolor' ] ) ) { update_option( 'rf_bottomtitlecolor', $_REQUEST[ 'rf_bottomtitlecolor' ]  ); } else { delete_option( 'rf_bottomtitlecolor' ); }
if( isset( $_REQUEST[ 'rf_bottomtextcolor' ] ) ) { update_option( 'rf_bottomtextcolor', $_REQUEST[ 'rf_bottomtextcolor' ]  ); } else { delete_option( 'rf_bottomtextcolor' ); }
if( isset( $_REQUEST[ 'rf_bottomlinkcolor' ] ) ) { update_option( 'rf_bottomlinkcolor', $_REQUEST[ 'rf_bottomlinkcolor' ]  ); } else { delete_option( 'rf_bottomlinkcolor' ); }
if( isset( $_REQUEST[ 'rf_bottomlinkhovercolor' ] ) ) { update_option( 'rf_bottomlinkhovercolor', $_REQUEST[ 'rf_bottomlinkhovercolor' ]  ); } else { delete_option( 'rf_bottomlinkhovercolor' ); }
if( isset( $_REQUEST[ 'rf_bottombordercolor' ] ) ) { update_option( 'rf_bottombordercolor', $_REQUEST[ 'rf_bottombordercolor' ]  ); } else { delete_option( 'rf_bottombordercolor' ); }

// FOOTER
if( isset( $_REQUEST[ 'rf_footerbgcolor' ] ) ) { update_option( 'rf_footerbgcolor', $_REQUEST[ 'rf_footerbgcolor' ]  ); } else { delete_option( 'rf_footerbgcolor' ); }
if( isset( $_REQUEST[ 'rf_footertextcolor' ] ) ) { update_option( 'rf_footertextcolor', $_REQUEST[ 'rf_footertextcolor' ]  ); } else { delete_option( 'rf_footertextcolor' ); }
if( isset( $_REQUEST[ 'rf_footerlinkcolor' ] ) ) { update_option( 'rf_footerlinkcolor', $_REQUEST[ 'rf_footerlinkcolor' ]  ); } else { delete_option( 'rf_footerlinkcolor' ); }
if( isset( $_REQUEST[ 'rf_footerlinkhovercolor' ] ) ) { update_option( 'rf_footerlinkhovercolor', $_REQUEST[ 'rf_footerlinkhovercolor' ]  ); } else { delete_option( 'rf_footerlinkhovercolor' ); }

			// goto theme edit page
			header("Location: themes.php?page=functions.php&saved=true");
			die;

  		// reset settings
		} else if( 'reset' == $_REQUEST['action'] ) {


// -------------
// ROUND 3
// -------------

// GENERAL
delete_option( 'rf_sitewidth' );
delete_option( 'rf_sitewidthtype' );
delete_option( 'rf_font' );
delete_option( 'rf_bgcolor' );
delete_option( 'rf_roundedcorners' );
delete_option( 'rf_topbottompadding' );

// HEADER
delete_option( 'rf_headerbgcolor' );
delete_option( 'rf_sitetitlecolor' );
delete_option( 'rf_taglinecolor' );

// NAVIGATION
delete_option( 'rf_navbgcolor' );
delete_option( 'rf_navlinkcolor' );
delete_option( 'rf_navlinkhovercolor' );


// CHILD PAGE NAVIGATION
delete_option( 'rf_childnavbgcolor' );
delete_option( 'rf_childnavlinkcolor' );
delete_option( 'rf_childnavlinkhovercolor' );

// MAIN CONTENT
delete_option( 'rf_mainbgcolor' );
delete_option( 'rf_maintextcolor' );
delete_option( 'rf_maintextlinkcolor' );
delete_option( 'rf_maintextlinkhovercolor' );
delete_option( 'rf_mainposttitlecolor' );
delete_option( 'rf_mainposttitlehovercolor' );
delete_option( 'rf_mainpostinfocolor' );
delete_option( 'rf_mainpostinfolinkcolor' );
delete_option( 'rf_mainpostinfolinkhovercolor' );
delete_option( 'rf_mainbordercolor' );
delete_option( 'rf_mainheadercolor' );

// COMMENTS
delete_option( 'rf_commentsbgcolor' );
delete_option( 'rf_commentstextcolor' );
delete_option( 'rf_commentslinkcolor' );
delete_option( 'rf_commentslinkhovercolor' );
delete_option( 'rf_commentsinfotextcolor' );
delete_option( 'rf_commentsinfolinkcolor' );
delete_option( 'rf_commentsinfolinkhovercolor' );
delete_option( 'rf_commentsbordercolor' );

// BOTTOMBAR
delete_option( 'rf_bottombgcolor' );
delete_option( 'rf_bottomtitlecolor' );
delete_option( 'rf_bottomtextcolor' );
delete_option( 'rf_bottomlinkcolor' );
delete_option( 'rf_bottomlinkhovercolor' );
delete_option( 'rf_bottombordercolor' );

// FOOTER
delete_option( 'rf_footerbgcolor' );
delete_option( 'rf_footertextcolor' );
delete_option( 'rf_footerlinkcolor' );
delete_option( 'rf_footerlinkhovercolor' );

			// goto theme edit page
			header("Location: themes.php?page=functions.php&reset=true");
			die;

		}
	}

    add_theme_page("RoundFlow Options", "Current Theme Options", 'edit_themes', basename(__FILE__), 'rf_admin');

}

function rf_admin() {

	if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>StripedPlus settings saved.</strong></p></div>';
	if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>StripedPlus settings reset.</strong></p></div>';
	
?>
<div id="ColourMod"><!--

	ColourMod Plug-N-Play v2.1
	DHTML Dynamic Color Picker/Selector
	© 2005 ColourMod.com
	Design/Programming By Stephen Hallgren (www.teevio.net)
	Produced By The Noah Institute (www.noahinstitute.org)
	
-->

<div id="cmDefault">
	<div id="cmColorContainer" class="cmColorContainer"></div>
	<div id="cmSatValBg" class="cmSatValBg"></div>
	<div id="cmDefaultMiniOverlay" class="cmDefaultMiniOverlay"></div>
	<div id="cmSatValContainer">
		<div id="cmBlueDot" class="cmBlueDot"></div>
	</div>
	<div id="cmHueContainer">
		<div id="cmBlueArrow" class="cmBlueArrow"></div>
	</div>
	<div id="cmClose">
		<input type="text" name="cmHex" id="cmHex" value="FFFFFF" maxlength="6" size="9" /> <a href="http://www.colourmod.com" id="cmCloseButton" ><img src="<?php bloginfo('template_directory'); ?>/colourmod/images/close.gif" border="0" alt="Close ColourMod" /></a>
	</div>
	<div style="display:none">
		<input type="text" name="cmHue" id="cmHue" value="0" maxlength="3" />
	</div>
	<a href="http://www.colourmod.com" target="_blank" title="ColourMod - Dynamic Color Picker" class="cmLink">&copy; ColourMod.com</a>
</div></div>
<div class="wrap">
<h2>RoundFlow</h2>

<form method="post">

<fieldset class="options">
<legend>RoundFlow Settings</legend>

<p>This theme is made by <a href="http://theundersigned.net">the undersigned</a>, please contact me or write in <a href="http://webdesignbook.net/forum/viewforum.php?id=21">my forum</a>, if you find any bugs.</p>

<table width="100%" cellspacing="2" cellpadding="5" class="editform" >


<tr><th><br /><h3>General settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Site width:</th> 
<td><input name="rf_sitewidth" type="text" value="<?php if ( get_settings( 'rf_sitewidth' ) != "") { echo get_settings( 'rf_sitewidth' ); } else { echo "70"; } ?>" />
<select name="rf_sitewidthtype" width="40px">	
<option value='%'  <?php if (get_settings( 'rf_sitewidthtype' ) == "%") { echo "selected='selected'"; } ?>>%</option>
<option value='px'  <?php if (get_settings( 'rf_sitewidthtype' ) == "px") { echo "selected='selected'"; } ?>>px</option>
</select>
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Site font:</th> 
<td>
<select name="rf_font">	
<option value="'Lucida Grande', Verdana, Arial, Sans-Serif"  <?php if (get_settings( 'rf_font' ) == "\'Lucida Grande\', Verdana, Arial, Sans-Serif") { echo "selected='selected'"; } ?>>'Lucida Grande', Verdana, Arial, Sans-Serif</option>
<option value="Georgia, 'Times New Roman', Times, serif"  <?php if (get_settings( 'rf_font' ) == "Georgia, \'Times New Roman\', Times, serif") { echo "selected='selected'"; } ?>>Georgia, 'Times New Roman', Times, serif</option>
<option value="Arial, Helvetica, 'sans-serif'"  <?php if (get_settings( 'rf_font' ) == "Arial, Helvetica, \'sans-serif\'") { echo "selected='selected'"; } ?>>Arial, Helvetica, 'sans-serif'</option>
<option value="'Courier New', Courier, Monaco, monospace"  <?php if (get_settings( 'rf_font' ) == "\'Courier New\', Courier, Monaco, monospace") { echo "selected='selected'"; } ?>>'Courier New', Courier, Monaco, monospace</option>
<option value="Helvetica, Geneva, Arial, SunSans-Regular, sans-serif"  <?php if (get_settings( 'rf_font' ) == "Helvetica, Geneva, Arial, SunSans-Regular, sans-serif") { echo "selected='selected'"; } ?>>Helvetica, Geneva, Arial, SunSans-Regular, sans-serif</option>
<option value="'Trebuchet MS', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif"  <?php if (get_settings( 'rf_font' ) == "\'Trebuchet MS\', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif") { echo "selected='selected'"; } ?>>'Trebuchet MS', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif</option>
<option value="Verdana, Arial, Helvetica, sans-serif"  <?php if (get_settings( 'rf_font' ) == "Verdana, Arial, Helvetica, sans-serif") { echo "selected='selected'"; } ?>>Verdana, Arial, Helvetica, sans-serif</option>
</select>
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Background color:</th> 
<td>
<div id="pickbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbgcolor', 'backgroundColor', false, 'rf_bgcolor', this)">&nbsp;</a></div>
#<input name="rf_bgcolor" maxlenght="6" id="rf_bgcolor" type="text" value="<?php if ( get_settings( 'rf_bgcolor' ) != "") { echo get_settings( 'rf_bgcolor' ); } else { echo "222"; } ?>" onkeyup="changecss('#pickbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Rounded corners:</th> 
<td>
<select name="rf_roundedcorners">	
<option value="ON"  <?php if (get_settings( 'rf_roundedcorners' ) == "ON") { echo "selected='selected'"; } ?>>ON</option>
<option value="OFF"  <?php if (get_settings( 'rf_roundedcorners' ) == "OFF") { echo "selected='selected'"; } ?>>OFF</option>
</select>
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Top and bottom padding:</th> 
<td>
<input name="rf_topbottompadding" maxlenght="6" id="rf_topbottompadding" type="text" value="<?php if ( get_settings( 'rf_topbottompadding' ) != "" || get_settings( 'rf_topbottompadding' ) != "0" ) { echo get_settings( 'rf_topbottompadding' ); } else { echo "40"; } ?>" />px
</td> 
</tr>

<tr><th><br /><h3>Header settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th> 
<td>
<div id="pickheaderbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickheaderbgcolor', 'backgroundColor', false, 'rf_headerbgcolor', this)">&nbsp;</a></div>
#<input name="rf_headerbgcolor" maxlenght="6" id="rf_headerbgcolor" type="text" value="<?php if ( get_settings( 'rf_headerbgcolor' ) != "") { echo get_settings( 'rf_headerbgcolor' ); } else { echo "DD8822"; } ?>" onkeyup="changecss('#pickheaderbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Site title color:</th>
<td>
<div id="picksitetitlecolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#picksitetitlecolor', 'backgroundColor', false, 'rf_sitetitlecolor', this)">&nbsp;</a></div>
#<input name="rf_sitetitlecolor" maxlenght="6" id="rf_sitetitlecolor" type="text" value="<?php if ( get_settings( 'rf_sitetitlecolor' ) != "") { echo get_settings( 'rf_sitetitlecolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#picksitetitlecolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td>
</tr>

<tr valign="top"> 
<th scope="row">Tagline color:</th> 
<td>
<div id="picktaglinecolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#picktaglinecolor', 'backgroundColor', false, 'rf_taglinecolor', this)">&nbsp;</a></div>
#<input name="rf_taglinecolor" maxlenght="6" id="rf_taglinecolor" type="text" value="<?php if ( get_settings( 'rf_taglinecolor' ) != "") { echo get_settings( 'rf_taglinecolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#picktaglinecolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td>
</tr>

<tr><th><br /><h3>Navigation settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="picknavbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#picknavbgcolor', 'backgroundColor', false, 'rf_navbgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_navbgcolor" maxlenght="6" id="rf_navbgcolor" type="text" value="<?php if ( get_settings( 'rf_navbgcolor' ) != "") { echo get_settings( 'rf_navbgcolor' ); } else { echo "88CC22"; } ?>" onkeyup="changecss('#picknavbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link color:</th>
<td>
<div id="picknavlinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#picknavlinkcolor', 'backgroundColor', false, 'rf_navlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_navlinkcolor" maxlenght="6" id="rf_navlinkcolor" type="text" value="<?php if ( get_settings( 'rf_navlinkcolor' ) != "") { echo get_settings( 'rf_navlinkcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#picknavlinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link hover color:</th>
<td>
<div id="picknavlinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#picknavlinkhovercolor', 'backgroundColor', false, 'rf_navlinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_navlinkhovercolor" maxlenght="6" id="rf_navlinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_navlinkhovercolor' ) != "") { echo get_settings( 'rf_navlinkhovercolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#picknavlinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br /><h3>Child navigation settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickchildnavbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickchildnavbgcolor', 'backgroundColor', false, 'rf_childnavbgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_childnavbgcolor" maxlenght="6" id="rf_childnavbgcolor" type="text" value="<?php if ( get_settings( 'rf_childnavbgcolor' ) != "") { echo get_settings( 'rf_childnavbgcolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickchildnavbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link color:</th>
<td>
<div id="pickchildnavlinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickchildnavlinkcolor', 'backgroundColor', false, 'rf_childnavlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_childnavlinkcolor" maxlenght="6" id="rf_childnavlinkcolor" type="text" value="<?php if ( get_settings( 'rf_childnavlinkcolor' ) != "") { echo get_settings( 'rf_childnavlinkcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickchildnavlinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link hover color:</th>
<td>
<div id="pickchildnavlinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickchildnavlinkhovercolor', 'backgroundColor', false, 'rf_childnavlinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_childnavlinkhovercolor" maxlenght="6" id="rf_childnavlinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_childnavlinkhovercolor' ) != "") { echo get_settings( 'rf_childnavlinkhovercolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickchildnavlinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br /><h3>Main content settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickmainbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainbgcolor', 'backgroundColor', false, 'rf_mainbgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainbgcolor" maxlenght="6" id="rf_mainbgcolor" type="text" value="<?php if ( get_settings( 'rf_mainbgcolor' ) != "") { echo get_settings( 'rf_mainbgcolor' ); } else { echo "EEEEEE"; } ?>" onkeyup="changecss('#pickmainbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text color:</th>
<td>
<div id="pickmaintextcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmaintextcolor', 'backgroundColor', false, 'rf_maintextcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_maintextcolor" maxlenght="6" id="rf_maintextcolor" type="text" value="<?php if ( get_settings( 'rf_maintextcolor' ) != "") { echo get_settings( 'rf_maintextcolor' ); } else { echo "333333"; } ?>" onkeyup="changecss('#pickmaintextcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text link color:</th>
<td>
<div id="pickmaintextlinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmaintextlinkcolor', 'backgroundColor', false, 'rf_maintextlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_maintextlinkcolor" maxlenght="6" id="rf_maintextlinkcolor" type="text" value="<?php if ( get_settings( 'rf_maintextlinkcolor' ) != "") { echo get_settings( 'rf_maintextlinkcolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickmaintextlinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text link hover color:</th>
<td>
<div id="pickmaintextlinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmaintextlinkhovercolor', 'backgroundColor', false, 'rf_maintextlinkhovercolor', this, 0, 0)">&nbsp;</a></div>

#<input name="rf_maintextlinkhovercolor" maxlenght="6" id="rf_maintextlinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_maintextlinkhovercolor' ) != "") { echo get_settings( 'rf_maintextlinkhovercolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickmaintextlinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Post title color:</th>
<td>
<div id="pickmainposttitlecolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainposttitlecolor', 'backgroundColor', false, 'rf_mainposttitlecolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainposttitlecolor" maxlenght="6" id="rf_mainposttitlecolor" type="text" value="<?php if ( get_settings( 'rf_mainposttitlecolor' ) != "") { echo get_settings( 'rf_mainposttitlecolor' ); } else { echo "333333"; } ?>" onkeyup="changecss('#pickmainposttitlecolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Post title hover color:</th>
<td>
<div id="pickmainposttitlehovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainposttitlehovercolor', 'backgroundColor', false, 'rf_mainposttitlehovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainposttitlehovercolor" maxlenght="6" id="rf_mainposttitlehovercolor" type="text" value="<?php if ( get_settings( 'rf_mainposttitlehovercolor' ) != "") { echo get_settings( 'rf_mainposttitlehovercolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickmainposttitlehovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Post info text color:</th>
<td>
<div id="pickmainpostinfocolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainpostinfocolor', 'backgroundColor', false, 'rf_mainpostinfocolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainpostinfocolor" maxlenght="6" id="rf_mainpostinfocolor" type="text" value="<?php if ( get_settings( 'rf_mainpostinfocolor' ) != "") { echo get_settings( 'rf_mainpostinfocolor' ); } else { echo "AAAAAA"; } ?>" onkeyup="changecss('#pickmainpostinfocolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Post info link color:</th>
<td>
<div id="pickmainpostinfolinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainpostinfolinkcolor', 'backgroundColor', false, 'rf_mainpostinfolinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainpostinfolinkcolor" maxlenght="6" id="rf_mainpostinfolinkcolor" type="text" value="<?php if ( get_settings( 'rf_mainpostinfolinkcolor' ) != "") { echo get_settings( 'rf_mainpostinfolinkcolor' ); } else { echo "AAAAAA"; } ?>" onkeyup="changecss('#pickmainpostinfolinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>


<tr valign="top"> 
<th scope="row">Post info link hover color:</th>
<td>
<div id="pickmainpostinfolinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainpostinfolinkhovercolor', 'backgroundColor', false, 'rf_mainpostinfolinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainpostinfolinkhovercolor" maxlenght="6" id="rf_mainpostinfolinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_mainpostinfolinkhovercolor' ) != "") { echo get_settings( 'rf_mainpostinfolinkhovercolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickmainpostinfolinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Border color:</th>
<td>
<div id="pickmainbordercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainbordercolor', 'backgroundColor', false, 'rf_mainbordercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainbordercolor" maxlenght="6" id="rf_mainbordercolor" type="text" value="<?php if ( get_settings( 'rf_mainbordercolor' ) != "") { echo get_settings( 'rf_mainbordercolor' ); } else { echo "999999"; } ?>" onkeyup="changecss('#pickmainbordercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">H1, H2, H3 color:</th>
<td>
<div id="pickmainheadercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickmainheadercolor', 'backgroundColor', false, 'rf_mainheadercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_mainheadercolor" maxlenght="6" id="rf_mainheadercolor" type="text" value="<?php if ( get_settings( 'rf_mainheadercolor' ) != "") { echo get_settings( 'rf_mainheadercolor' ); } else { echo "333333"; } ?>" onkeyup="changecss('#pickmainheadercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br /><h3>Comment settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickcommentsbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentsbgcolor', 'backgroundColor', false, 'rf_commentsbgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentsbgcolor" maxlenght="6" id="rf_commentsbgcolor" type="text" value="<?php if ( get_settings( 'rf_commentsbgcolor' ) != "") { echo get_settings( 'rf_commentsbgcolor' ); } else { echo "EEEEEE"; } ?>" onkeyup="changecss('#pickcommentsbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text color:</th>
<td>
<div id="pickcommentstextcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentstextcolor', 'backgroundColor', false, 'rf_commentstextcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentstextcolor" maxlenght="6" id="rf_commentstextcolor" type="text" value="<?php if ( get_settings( 'rf_commentstextcolor' ) != "") { echo get_settings( 'rf_commentstextcolor' ); } else { echo "333333"; } ?>" onkeyup="changecss('#pickcommentstextcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text link color:</th>
<td>
<div id="pickcommentslinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentslinkcolor', 'backgroundColor', false, 'rf_commentslinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentslinkcolor" maxlenght="6" id="rf_commentslinkcolor" type="text" value="<?php if ( get_settings( 'rf_commentslinkcolor' ) != "") { echo get_settings( 'rf_commentslinkcolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickcommentslinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text link hover color:</th>
<td>
<div id="pickcommentslinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentslinkhovercolor', 'backgroundColor', false, 'rf_commentslinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentslinkhovercolor" maxlenght="6" id="rf_commentslinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_commentslinkhovercolor' ) != "") { echo get_settings( 'rf_commentslinkhovercolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickcommentslinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment info text color:</th>
<td>
<div id="pickcommentsinfotextcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentsinfotextcolor', 'backgroundColor', false, 'rf_commentsinfotextcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentsinfotextcolor" maxlenght="6" id="rf_commentsinfotextcolor" type="text" value="<?php if ( get_settings( 'rf_commentsinfotextcolor' ) != "") { echo get_settings( 'rf_commentsinfotextcolor' ); } else { echo "AAAAAA"; } ?>" onkeyup="changecss('#pickcommentsinfotextcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment info link color:</th>
<td>
<div id="pickcommentsinfolinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentsinfolinkcolor', 'backgroundColor', false, 'rf_commentsinfolinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentsinfolinkcolor" maxlenght="6" id="rf_commentsinfolinkcolor" type="text" value="<?php if ( get_settings( 'rf_commentsinfolinkcolor' ) != "") { echo get_settings( 'rf_commentsinfolinkcolor' ); } else { echo "AAAAAA"; } ?>" onkeyup="changecss('#pickcommentsinfolinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment info link hover color:</th>
<td>
<div id="pickcommentsinfolinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentsinfolinkhovercolor', 'backgroundColor', false, 'rf_commentsinfolinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentsinfolinkhovercolor" maxlenght="6" id="rf_commentsinfolinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_commentsinfolinkhovercolor' ) != "") { echo get_settings( 'rf_commentsinfolinkhovercolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickcommentsinfolinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment border color:</th>
<td>
<div id="pickcommentsbordercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickcommentsbordercolor', 'backgroundColor', false, 'rf_commentsbordercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_commentsbordercolor" maxlenght="6" id="rf_commentsbordercolor" type="text" value="<?php if ( get_settings( 'rf_commentsbordercolor' ) != "") { echo get_settings( 'rf_commentsbordercolor' ); } else { echo "999999"; } ?>" onkeyup="changecss('#pickcommentsbordercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br /><h3>Bottom bar settings</h3></th><td>&nbsp;</td></tr>


<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickbottombgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottombgcolor', 'backgroundColor', false, 'rf_bottombgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottombgcolor" maxlenght="6" id="rf_bottombgcolor" type="text" value="<?php if ( get_settings( 'rf_bottombgcolor' ) != "") { echo get_settings( 'rf_bottombgcolor' ); } else { echo "2288CC"; } ?>" onkeyup="changecss('#pickbottombgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Title color:</th>
<td>
<div id="pickbottomtitlecolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottomtitlecolor', 'backgroundColor', false, 'rf_bottomtitlecolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottomtitlecolor" maxlenght="6" id="rf_bottomtitlecolor" type="text" value="<?php if ( get_settings( 'rf_bottomtitlecolor' ) != "") { echo get_settings( 'rf_bottomtitlecolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickbottomtitlecolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Text color:</th>
<td>
<div id="pickbottomtextcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottomtextcolor', 'backgroundColor', false, 'rf_bottomtextcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottomtextcolor" maxlenght="6" id="rf_bottomtextcolor" type="text" value="<?php if ( get_settings( 'rf_bottomtextcolor' ) != "") { echo get_settings( 'rf_bottomtextcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickbottomtextcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link color:</th>
<td>
<div id="pickbottomlinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottomlinkcolor', 'backgroundColor', false, 'rf_bottomlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottomlinkcolor" maxlenght="6" id="rf_bottomlinkcolor" type="text" value="<?php if ( get_settings( 'rf_bottomlinkcolor' ) != "") { echo get_settings( 'rf_bottomlinkcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickbottomlinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link hover color:</th>
<td>
<div id="pickbottomlinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottomlinkhovercolor', 'backgroundColor', false, 'rf_bottomlinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottomlinkhovercolor" maxlenght="6" id="rf_bottomlinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_bottomlinkhovercolor' ) != "") { echo get_settings( 'rf_bottomlinkhovercolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickbottomlinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Border color:</th>
<td>
<div id="pickbottombordercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickbottombordercolor', 'backgroundColor', false, 'rf_bottombordercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_bottombordercolor" maxlenght="6" id="rf_bottombordercolor" type="text" value="<?php if ( get_settings( 'rf_bottombordercolor' ) != "") { echo get_settings( 'rf_bottombordercolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickbottombordercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br /><h3>Footer settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickfooterbgcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickfooterbgcolor', 'backgroundColor', false, 'rf_footerbgcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_footerbgcolor" maxlenght="6" id="rf_footerbgcolor" type="text" value="<?php if ( get_settings( 'rf_footerbgcolor' ) != "") { echo get_settings( 'rf_footerbgcolor' ); } else { echo "88CC22"; } ?>" onkeyup="changecss('#pickfooterbgcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link color:</th>
<td>
<div id="pickfootertextcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickfootertextcolor', 'backgroundColor', false, 'rf_footertextcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_footertextcolor" maxlenght="6" id="rf_footertextcolor" type="text" value="<?php if ( get_settings( 'rf_footertextcolor' ) != "") { echo get_settings( 'rf_footertextcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickfootertextcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Link hover color:</th>
<td>
<div id="pickfooterlinkcolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickfooterlinkcolor', 'backgroundColor', false, 'rf_footerlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_footerlinkcolor" maxlenght="6" id="rf_footerlinkcolor" type="text" value="<?php if ( get_settings( 'rf_footerlinkcolor' ) != "") { echo get_settings( 'rf_footerlinkcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickfooterlinkcolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Background color:</th>
<td>
<div id="pickfooterlinkhovercolor" class="rfpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#pickfooterlinkhovercolor', 'backgroundColor', false, 'rf_footerlinkhovercolor', this, 0, 0)">&nbsp;</a></div>
#<input name="rf_footerlinkhovercolor" maxlenght="6" id="rf_footerlinkhovercolor" type="text" value="<?php if ( get_settings( 'rf_footerlinkhovercolor' ) != "") { echo get_settings( 'rf_footerlinkhovercolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#pickfooterlinkhovercolor', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr><th><br />&nbsp;</th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Save changes:</th> 
<td><input name="save" type="submit" value="Save" /></td> 
</tr>

</fieldset>
<input type="hidden" name="action" value="save" />
</form>



<form method="post">

<fieldset class="options">

<tr>
<th>Reset to default: </th>
<td><input name="reset" type="submit" value="Reset" /> (Resets and saves)</td>
</tr>
</table>
</div>

<input type="hidden" name="action" value="reset" />

</form>

<?php
}

function rf_admin_header() { ?>
<link href="<?php bloginfo('template_directory'); ?>/colourmod/ColourModStyle.php" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_directory'); ?>/colourmod/StyleModScript.js" type="text/JavaScript"></script>
<script src="<?php bloginfo('template_directory'); ?>/colourmod/ColourModScript.js" type="text/JavaScript"></script>
<?php }

add_action('admin_head', 'rf_admin_header');
add_action('admin_menu', 'rf_add_admin'); ?>