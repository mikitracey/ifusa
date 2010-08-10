<?php 
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Top Left',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
'name' => 'Top Right',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
'name' => 'Bottom Left',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
'name' => 'Bottom Right',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
)); }

function widget_striped_search() { ?>
<h3>Search</h3>
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="Search"><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /></div>
</form>
<?php }

function widget_striped_links() { ?>
<h3>Blogroll</h3>
<ul>
<?php get_links(-1, '<li>', '</li>', '', TRUE, '', FALSE); ?>
</ul>
<?php }

function widget_striped_pages() { ?>
<h3>Pages</h3>
<ul>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>
<?php }

if ( function_exists('register_sidebar_widget') ) {
register_sidebar_widget(__('Search'), 'widget_striped_search');
register_sidebar_widget(__('Links'), 'widget_striped_links');
register_sidebar_widget(__('Pages'), 'widget_striped_pages'); }

function striped_add_admin() {

	if ( $_GET['page'] == basename(__FILE__) ) {
	
	    // save settings
		if ( 'save' == $_REQUEST['action'] ) {

			update_option( 'striped_backgroundimage', $_REQUEST[ 's_backgroundimage' ] );
			update_option( 'striped_headerimage', $_REQUEST[ 's_headerimage' ] );

			update_option( 'striped_backgroundcolor', $_REQUEST[ 's_backgroundcolor' ] );
			update_option( 'striped_maincolor', $_REQUEST[ 's_maincolor' ] );
			update_option( 'striped_maincolortwo', $_REQUEST[ 's_maincolortwo' ] );
			update_option( 'striped_lightborder', $_REQUEST[ 's_lightborder' ] );
			update_option( 'striped_darkborder', $_REQUEST[ 's_darkborder' ] );
			update_option( 'striped_commentoddcolor', $_REQUEST[ 's_commentoddcolor' ] );
			update_option( 'striped_commentblockquotecolor', $_REQUEST[ 's_commentblockquotecolor' ] );

			update_option( 'striped_headerfooterfontcolor', $_REQUEST[ 's_headerfooterfontcolor' ] );
			update_option( 'striped_headerfontcolorhover', $_REQUEST[ 's_headerfontcolorhover' ] );
			update_option( 'striped_currentpagefontcolor', $_REQUEST[ 's_currentpagefontcolor' ] );
			update_option( 'striped_mainfontcolor', $_REQUEST[ 's_mainfontcolor' ] );
			update_option( 'striped_datefontcolor', $_REQUEST[ 's_datefontcolor' ] );
			update_option( 'striped_smalldatefontcolor', $_REQUEST[ 's_smalldatefontcolor' ] );
			update_option( 'striped_commentfontcolor', $_REQUEST[ 's_commentfontcolor' ] );
			update_option( 'striped_commentlinkcolor', $_REQUEST[ 's_commentlinkcolor' ] );
			
			update_option( 'striped_font', $_REQUEST[ 's_font' ] );
			update_option( 'striped_headerheight', $_REQUEST[ 's_headerheight' ] );
			update_option( 'striped_sitewidth', $_REQUEST[ 's_sitewidth' ] );
			update_option( 'striped_type', $_REQUEST[ 's_type' ] );

			

			if( isset( $_REQUEST[ 's_backgroundimage' ] ) ) { update_option( 'striped_backgroundimage', $_REQUEST[ 's_backgroundimage' ]  ); } else { delete_option( 'striped_backgroundimage' ); }
			if( isset( $_REQUEST[ 's_headerimage' ] ) ) { update_option( 'striped_headerimage', $_REQUEST[ 's_headerimage' ]  ); } else { delete_option( 'striped_headerimage' ); }

			if( isset( $_REQUEST[ 's_backgroundcolor' ] ) ) { update_option( 'striped_backgroundcolor', $_REQUEST[ 's_backgroundcolor' ]  ); } else { delete_option( 'striped_backgroundcolor' ); }
			if( isset( $_REQUEST[ 's_maincolor' ] ) ) { update_option( 'striped_maincolor', $_REQUEST[ 's_maincolor' ]  ); } else { delete_option( 'striped_maincolor' ); }
			if( isset( $_REQUEST[ 's_maincolortwo' ] ) ) { update_option( 'striped_maincolortwo', $_REQUEST[ 's_maincolortwo' ]  ); } else { delete_option( 'striped_maincolortwo' ); }
			if( isset( $_REQUEST[ 's_lightborder' ] ) ) { update_option( 'striped_lightborder', $_REQUEST[ 's_lightborder' ]  ); } else { delete_option( 'striped_lightborder' ); }
			if( isset( $_REQUEST[ 's_darkborder' ] ) ) { update_option( 'striped_darkborder', $_REQUEST[ 's_darkborder' ]  ); } else { delete_option( 'striped_darkborder' ); }
			if( isset( $_REQUEST[ 's_commentoddcolor' ] ) ) { update_option( 'striped_commentoddcolor', $_REQUEST[ 's_commentoddcolor' ]  ); } else { delete_option( 'striped_commentoddcolor' ); }
			if( isset( $_REQUEST[ 's_commentblockquotecolor' ] ) ) { update_option( 'striped_commentblockquotecolor', $_REQUEST[ 's_commentblockquotecolor' ]  ); } else { delete_option( 'striped_commentblockquotecolor' ); }


			if( isset( $_REQUEST[ 's_headerfooterfontcolor' ] ) ) { update_option( 'striped_headerfooterfontcolor', $_REQUEST[ 's_headerfooterfontcolor' ]  ); } else { delete_option( 'striped_headerfooterfontcolor' ); }
			if( isset( $_REQUEST[ 's_headerfontcolorhover' ] ) ) { update_option( 'striped_headerfontcolorhover', $_REQUEST[ 's_headerfontcolorhover' ]  ); } else { delete_option( 'striped_headerfontcolorhover' ); }
			if( isset( $_REQUEST[ 's_currentpagefontcolor' ] ) ) { update_option( 'striped_currentpagefontcolor', $_REQUEST[ 's_currentpagefontcolor' ]  ); } else { delete_option( 'striped_currentpagefontcolor' ); }
			if( isset( $_REQUEST[ 's_mainfontcolor' ] ) ) { update_option( 'striped_mainfontcolor', $_REQUEST[ 's_mainfontcolor' ]  ); } else { delete_option( 'striped_mainfontcolor' ); }
			if( isset( $_REQUEST[ 's_datefontcolor' ] ) ) { update_option( 'striped_datefontcolor', $_REQUEST[ 's_datefontcolor' ]  ); } else { delete_option( 'striped_datefontcolor' ); }
			if( isset( $_REQUEST[ 's_smalldatefontcolor' ] ) ) { update_option( 'striped_smalldatefontcolor', $_REQUEST[ 's_smalldatefontcolor' ]  ); } else { delete_option( 'striped_smalldatefontcolor' ); }
			if( isset( $_REQUEST[ 's_commentfontcolor' ] ) ) { update_option( 'striped_commentfontcolor', $_REQUEST[ 's_commentfontcolor' ]  ); } else { delete_option( 'striped_commentfontcolor' ); }
			if( isset( $_REQUEST[ 's_commentlinkcolor' ] ) ) { update_option( 'striped_commentlinkcolor', $_REQUEST[ 's_commentlinkcolor' ]  ); } else { delete_option( 'striped_commentlinkcolor' ); }

			if( isset( $_REQUEST[ 's_font' ] ) ) { update_option( 'striped_font', $_REQUEST[ 's_font' ]  ); } else { delete_option( 'striped_font' ); }
			if( isset( $_REQUEST[ 's_headerheight' ] ) ) { update_option( 'striped_headerheight', $_REQUEST[ 's_headerheight' ]  ); } else { delete_option( 'striped_headerheight' ); }
			if( isset( $_REQUEST[ 's_sitewidth' ] ) ) { update_option( 'striped_sitewidth', $_REQUEST[ 's_sitewidth' ]  ); } else { delete_option( 'striped_sitewidth' ); }
			if( isset( $_REQUEST[ 's_type' ] ) ) { update_option( 'striped_type', $_REQUEST[ 's_type' ]  ); } else { delete_option( 'striped_type' ); }
			

			// goto theme edit page
			header("Location: themes.php?page=functions.php&saved=true");
			die;

  		// reset settings
		} else if( 'reset' == $_REQUEST['action'] ) {

			delete_option( 'striped_backgroundimage' );
			delete_option( 'striped_headerimage' );

			delete_option( 'striped_backgroundcolor' );
			delete_option( 'striped_maincolor' );
			delete_option( 'striped_maincolortwo' );
			delete_option( 'striped_lightborder' );
			delete_option( 'striped_darkborder' );
			delete_option( 'striped_commentoddcolor' );
			delete_option( 'striped_commentblockquotecolor' );

			delete_option( 'striped_headerfooterfontcolor' );
			delete_option( 'striped_headerfontcolorhover' );
			delete_option( 'striped_currentpagefontcolor' );
			delete_option( 'striped_mainfontcolor' );
			delete_option( 'striped_datefontcolor' );
			delete_option( 'striped_smalldatefontcolor' );
			delete_option( 'striped_commentfontcolor' );
			delete_option( 'striped_commentlinkcolor' );

			delete_option( 'striped_font' );
			delete_option( 'striped_headerheight' );
			delete_option( 'striped_sitewidth' );
			delete_option( 'striped_type' );

			// goto theme edit page
			header("Location: themes.php?page=functions.php&reset=true");
			die;

		}
	}

    add_theme_page("StripedPlus Options", "Current Theme Options", 'edit_themes', basename(__FILE__), 'striped_admin');

}

function striped_admin() {

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
<h2>StripedPlus</h2>

<form method="post">

<fieldset class="options">
<legend>StripedPlus Settings</legend>

<p>This theme is made by <a href="http://theundersigned.net">the undersigned</a>, please contact me or write in <a href="http://webdesignbook.net/forum/viewforum.php?id=18">my forum</a>, if you find any bugs .</p>

<table width="100%" cellspacing="2" cellpadding="5" class="editform" >


<tr><th><br /><h3>Images</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background image:</th> 
<td>http://<input name="s_backgroundimage" type="text" value="<?php echo get_settings( 'striped_backgroundimage' ); ?>" /> (URL)</td> 
</tr>

<tr valign="top"> 
<th scope="row">Header image:</th> 
<td>http://<input name="s_headerimage" type="text" value="<?php echo get_settings( 'striped_headerimage' ); ?>" /> (URL)</td> 
</tr>


<tr><th><br /><h3>Site colors</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Background color:</th> 
<td>
<div id="backgroundcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#backgroundcolorpick', 'backgroundColor', false, 's_backgroundcolor', this)">&nbsp;</a></div>
#<input name="s_backgroundcolor" maxlenght="6" id="s_backgroundcolor" type="text" value="<?php if ( get_settings( 'striped_backgroundcolor' ) != "") { echo get_settings( 'striped_backgroundcolor' ); } else { echo "FFF"; } ?>" onkeyup="changecss('#backgroundcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Main color:</th>
<td>
<div id="maincolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#maincolorpick', 'backgroundColor', false, 's_maincolor', this)">&nbsp;</a></div>
#<input name="s_maincolor" maxlenght="6" id="s_maincolor" type="text" value="<?php if ( get_settings( 'striped_maincolor' ) != "") { echo get_settings( 'striped_maincolor' ); } else { echo "AA0000"; } ?>" onkeyup="changecss('#maincolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td>
</tr>

<tr valign="top"> 
<th scope="row">Main color 2:</th> 
<td>
<div id="maincolortwopick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#maincolortwopick', 'backgroundColor', false, 's_maincolortwo', this)">&nbsp;</a></div>
#<input name="s_maincolortwo" maxlenght="6" id="s_maincolortwo" type="text" value="<?php if ( get_settings( 'striped_maincolortwo' ) != "") { echo get_settings( 'striped_maincolortwo' ); } else { echo "444444"; } ?>" onkeyup="changecss('#maincolortwopick', 'backgroundColor', this.value, 'hex', false, '');" />
</td>
</tr>

<tr valign="top"> 
<th scope="row">Light border:</th> 
<td>
<div id="lightborderpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#lightborderpick', 'backgroundColor', false, 's_lightborder', this)">&nbsp;</a></div>
#<input name="s_lightborder" maxlenght="6" id="s_lightborder" type="text" value="<?php if ( get_settings( 'striped_lightborder' ) != "") { echo get_settings( 'striped_lightborder' ); } else { echo "CCCCCC"; } ?>" onkeyup="changecss('#lightborderpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Dark border:</th>
<td>
<div id="darkborderpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#darkborderpick', 'backgroundColor', false, 's_darkborder', this)">&nbsp;</a></div>
#<input name="s_darkborder" maxlenght="6" id="s_darkborder" type="text" value="<?php if ( get_settings( 'striped_darkborder' ) != "") { echo get_settings( 'striped_darkborder' ); } else { echo "666666"; } ?>" onkeyup="changecss('#darkborderpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Odd comments:</th> 
<td>
<div id="commentoddcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#commentoddcolorpick', 'backgroundColor', false, 's_commentoddcolor', this)">&nbsp;</a></div>
#<input name="s_commentoddcolor" maxlenght="6" id="s_commentoddcolor" type="text" value="<?php if ( get_settings( 'striped_commentoddcolor' ) != "") { echo get_settings( 'striped_commentoddcolor' ); } else { echo "EEEEEE"; } ?>" onkeyup="changecss('#commentoddcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment blockquotes:</th>
<td>
<div id="commentblockquotecolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#commentblockquotecolorpick', 'backgroundColor', false, 's_commentblockquotecolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_commentblockquotecolor" maxlenght="6" id="s_commentblockquotecolor" type="text" value="<?php if ( get_settings( 'striped_commentblockquotecolor' ) != "") { echo get_settings( 'striped_commentblockquotecolor' ); } else { echo "DDDDDD"; } ?>" onkeyup="changecss('#commentblockquotecolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>


<tr><th><br /><h3>Font colors</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Header and footer font color:</th>
<td>
<div id="headerfooterfontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#headerfooterfontcolorpick', 'backgroundColor', false, 's_headerfooterfontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_headerfooterfontcolor" maxlenght="6" id="s_headerfooterfontcolor" type="text" value="<?php if ( get_settings( 'striped_headerfooterfontcolor' ) != "") { echo get_settings( 'striped_headerfooterfontcolor' ); } else { echo "FFFFFF"; } ?>" onkeyup="changecss('#headerfooterfontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Header hover color:</th>
<td>
<div id="headerfontcolorhoverpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#headerfontcolorhoverpick', 'backgroundColor', false, 's_headerfontcolorhover', this, 0, 0)">&nbsp;</a></div>
#<input name="s_headerfontcolorhover" maxlenght="6" id="s_headerfontcolorhover" type="text" value="<?php if ( get_settings( 'striped_headerfontcolorhover' ) != "") { echo get_settings( 'striped_headerfontcolorhover' ); } else { echo "EEEEEE"; } ?>" onkeyup="changecss('#headerfontcolorhoverpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Current page font color:</th>
<td>
<div id="currentpagefontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#currentpagefontcolorpick', 'backgroundColor', false, 's_currentpagefontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_currentpagefontcolor" maxlenght="6" id="s_currentpagefontcolor" type="text" value="<?php if ( get_settings( 'striped_currentpagefontcolor' ) != "") { echo get_settings( 'striped_currentpagefontcolor' ); } else { echo "AAAAAA"; } ?>" onkeyup="changecss('#currentpagefontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Main fontcolor:</th>
<td>
<div id="mainfontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#mainfontcolorpick', 'backgroundColor', false, 's_mainfontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_mainfontcolor" maxlenght="6" id="s_mainfontcolor" type="text" value="<?php if ( get_settings( 'striped_mainfontcolor' ) != "") { echo get_settings( 'striped_mainfontcolor' ); } else { echo "000000"; } ?>" onkeyup="changecss('#mainfontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Date font color:</th> 
<td>
<div id="datefontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#datefontcolorpick', 'backgroundColor', false, 's_datefontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_datefontcolor" maxlenght="6" id="s_datefontcolor" type="text" value="<?php if ( get_settings( 'striped_datefontcolor' ) != "") { echo get_settings( 'striped_datefontcolor' ); } else { echo "666666"; } ?>" onkeyup="changecss('#datefontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Post information font color:</th> 
<td>
<div id="smalldatefontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#smalldatefontcolorpick', 'backgroundColor', false, 's_smalldatefontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_smalldatefontcolor" maxlenght="6" id="s_smalldatefontcolor" type="text" value="<?php if ( get_settings( 'striped_smalldatefontcolor' ) != "") { echo get_settings( 'striped_smalldatefontcolor' ); } else { echo "999999"; } ?>" onkeyup="changecss('#smalldatefontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment font color:</th>
<td>
<div id="commentfontcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#commentfontcolorpick', 'backgroundColor', false, 's_commentfontcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_commentfontcolor" maxlenght="6" id="s_commentfontcolor" type="text" value="<?php if ( get_settings( 'striped_commentfontcolor' ) != "") { echo get_settings( 'striped_commentfontcolor' ); } else { echo "333333"; } ?>" onkeyup="changecss('#commentfontcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Comment link color:</th>
<td>
<div id="commentlinkcolorpick" class="stripedpickcolor"><a href="javascript:;" onmousedown="pickcolor( '#commentlinkcolorpick', 'backgroundColor', false, 's_commentlinkcolor', this, 0, 0)">&nbsp;</a></div>
#<input name="s_commentlinkcolor" maxlenght="6" id="s_commentlinkcolor" type="text" value="<?php if ( get_settings( 'striped_commentlinkcolor' ) != "") { echo get_settings( 'striped_commentlinkcolor' ); } else { echo "666666"; } ?>" onkeyup="changecss('#commentlinkcolorpick', 'backgroundColor', this.value, 'hex', false, '');" />
</td> 
</tr>


<tr><th><br /><h3>Site settings</h3></th><td>&nbsp;</td></tr>

<tr valign="top"> 
<th scope="row">Site font:</th> 
<td>
<select name="s_font">	
<option value="Georgia, 'Times New Roman', Times, serif"  <?php if (get_settings( 'striped_font' ) == "Georgia, \'Times New Roman\', Times, serif") { echo "selected='selected'"; } ?>>Georgia, 'Times New Roman', Times, serif</option>
<option value="Arial, Helvetica, 'sans-serif'"  <?php if (get_settings( 'striped_font' ) == "Arial, Helvetica, \'sans-serif\'") { echo "selected='selected'"; } ?>>Arial, Helvetica, 'sans-serif'</option>
<option value="'Courier New', Courier, Monaco, monospace"  <?php if (get_settings( 'striped_font' ) == "\'Courier New\', Courier, Monaco, monospace") { echo "selected='selected'"; } ?>>'Courier New', Courier, Monaco, monospace</option>
<option value="Helvetica, Geneva, Arial, SunSans-Regular, sans-serif"  <?php if (get_settings( 'striped_font' ) == "Helvetica, Geneva, Arial, SunSans-Regular, sans-serif") { echo "selected='selected'"; } ?>>Helvetica, Geneva, Arial, SunSans-Regular, sans-serif</option>
<option value="'Trebuchet MS', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif"  <?php if (get_settings( 'striped_font' ) == "\'Trebuchet MS\', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif") { echo "selected='selected'"; } ?>>'Trebuchet MS', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif</option>
<option value="Verdana, Arial, Helvetica, sans-serif"  <?php if (get_settings( 'striped_font' ) == "Verdana, Arial, Helvetica, sans-serif") { echo "selected='selected'"; } ?>>Verdana, Arial, Helvetica, sans-serif</option>
</select>
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Header height:</th> 
<td><input name="s_headerheight" type="text" value="<?php if ( get_settings( 'striped_headerheight' ) != "") { echo get_settings( 'striped_headerheight' ); } else { echo "120"; } ?>" /> px</td> 
</tr>

<tr valign="top"> 
<th scope="row">Site width:</th> 
<td><input name="s_sitewidth" type="text" value="<?php if ( get_settings( 'striped_sitewidth' ) != "") { echo get_settings( 'striped_sitewidth' ); } else { echo "600"; } ?>" />
<select name="s_type" width="40px">	
<option value='px'  <?php if (get_settings( 'striped_type' ) == "px") { echo "selected='selected'"; } ?>>px</option>
<option value='%'  <?php if (get_settings( 'striped_type' ) == "%") { echo "selected='selected'"; } ?>>%</option>
</select>
</td> 
</tr>

<tr valign="top"> 
<th scope="row">Save changes:</th> 
<td><input name="save" type="submit" value="Save" /></td> 
</tr>

</fieldset>
<input type="hidden" name="action" value="save" />
</form>



<form method="post">

<fieldset class="options">

<tr><th>&nbsp;</th><td>&nbsp;</td></tr>
<tr>
<th>Reset to default: </th>
<td><input name="reset" type="submit" value="Reset" /></td>
</tr>
</table>
</div>

<input type="hidden" name="action" value="reset" />

</form>

<?php
}

function striped_admin_header() { ?>
<link href="<?php bloginfo('template_directory'); ?>/colourmod/ColourModStyle.php" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_directory'); ?>/colourmod/StyleModScript.js" type="text/JavaScript"></script>
<script src="<?php bloginfo('template_directory'); ?>/colourmod/ColourModScript.js" type="text/JavaScript"></script>
<?php }

add_action('admin_head', 'striped_admin_header');
add_action('admin_menu', 'striped_add_admin'); ?>