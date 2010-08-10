<?php
/*
File Name: Wordpress Theme Toolkit
Version: 1.0
Author: Ozh
Author URI: http://planetOzh.com/
*/

/************************************************************************************
 * THEME USERS : don't touch anything !! Or don't ask the theme author for support :)
 ************************************************************************************/

include(dirname(__FILE__).'/themetoolkit.php');
include_once(dirname(__FILE__) . '/tiga.php');

/************************************************************************************
 * THEME AUTHOR : edit the following function call :
 ************************************************************************************/

themetoolkit(
	'tiga', /* Make yourself at home :
			* Name of the variable that will contain all the options of
			* your theme admin menu (in the form of an array)
			* Name it according to PHP naming rules (http://php.net/variables) */

	array(     /* Variables used by your theme features (i.e. things the end user will
			* want to customize through the admin menu)
			* Syntax :
			* 'option_variable' => 'Option Title ## optionnal explanations',
			* 'option_variable' => 'Option Title {radio|value1|Text1|value2|Text2} ## optionnal explanations',
			* 'option_variable' => 'Option Title {textarea|rows|cols} ## optionnal explanations',
			* 'option_variable' => 'Option Title {checkbox|option_varname1|value1|Text1|option_varname2|value2|Text2} ## optionnal explanations',
			* Examples :
			* 'your_age' => 'Your Age',
			* 'cc_number' => 'Credit Card Number ## I can swear I will not misuse it :P',
			* 'gender' => 'Gender {radio|girl|You are a female|boy|You are a male} ## What is your gender ?'
			* Dont forget the comma at the end of each line ! */
	/* General */
	'generalSep' => 'General {separator}',

	'externalStyleSheet' => "Use external stylesheet ('style.css')?{checkbox|externalStyleSheet|TRUE|Check if you want to override these settings with an external stylesheet}",

	'menuBar' => "Display pages as menu bar?{checkbox|menuBar|TRUE|Check if you want static pages appearing as menu bar items}",

	'recentPostsCnt' => 'Number of recent posts to display ## (eg. 10)',

	/* Page */
	'pageSep' => 'Page {separator}',

	'minWidth' => 'Minimum Width ## Enter minimum width in pixels or <code>none</code> (eg. 750)',

	'maxWidth' => 'Maximum Width ## Enter maximum width in pixels or <code>none</code> (eg. 900)',

	'bodyBgColor' => 'Page Background Color ## (eg. #F5F5F5). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'bodyColor' => 'Default Text Color ## (eg. #929189). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'bodyFontFamily' => 'Body Text Font Family ## (eg. Verdana, Arial, Helvetica, sans-serif). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-family.html">Help!</a>',

	'bodyBgImage' => 'Body Background Image ## (eg. images/body-bg.jpg)',

	'bodyBgImageRepeat' => 'Body background image repeat ## possible values -> repeat, repeat-x, repeat-y, no-repeat. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-repeat.html">Help!</a>',

	'bodyBgImagePos' => 'Body background image pos ## [percentage | length]{1,2} | [top | center | bottom] || [left | center | right]. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-position.html">Help!</a>',


	/* Header */
	'headerSep' => 'Header {separator}',

	'headerHeight' => 'Header Height ## Enter height in pixels. (eg. 124)',

	'blogNameColor' => 'Blog Name Text Color ## (eg. #3A3B43). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'blogNameFontFamily' => 'Blog Name Font Family ## (eg. Arial, Helvetica, sans-serif). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-family.html">Help!</a>',

	'blogNameFontSize' => 'Blog Name Font Size ## (eg. 34pt). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-size.html">Help!</a>',

	'blogNameFontWeight' => 'Blog Name Font Weight ## (eg. bold). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-weight.html">Help!</a>',

	'blogDescriptionColor' => 'Blog Description Text Color ## (eg. #3A3B43). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'blogDescriptionFontFamily' => 'Blog Description Font Family ## (eg. Arial, Helvetica, sans-serif). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-family.html">Help!</a>',

	'blogDescriptionFontSize' => 'Blog Description Font Size ## (eg. 12pt). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-size.html">Help!</a>',

	'blogDescriptionFontWeight' => 'Blog Description Font Weight ## (eg. normal). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-weight.html">Help!</a>',

	'headerBgColor' => 'Header Background Color ## (eg. #F8F7EF). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'headerBorderColor' => 'Header Border Color ## (eg. #AAAAAA). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'headerBgImage' => 'Header Background Image ## (eg. images/header-bg.jpg)',

	'headerBgImageRepeat' => 'Header background image repeat ## possible values -> repeat, repeat-x, repeat-y, no-repeat. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-repeat.html">Help!</a>',

	'headerBgImagePos' => 'Header background image pos ## [percentage | length]{1,2} | [top | center | bottom] || [left | center | right]. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-position.html">Help!</a>',

	/* Sidebars */
	'sidebarsSep' => 'Sidebars {separator}',

	'leftSidebarWidth' => 'Left Sidebar Width ## Enter width in pixels (eg. 150)',

	'rightSidebarWidth' => 'Right Sidebar Width ## Enter width in pixels (eg. 150)',

	/* Widgets */
	'widgetsSep' => 'Widgets {separator}',

	'leftWidgetTitleBgColor' => 'Left Widget Title Background Color ## (eg. #E8E2C4). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'leftWidgetTitleBgImage' => 'Left Widget Title Background Image ## (eg. <em><strong><code>images/left-right-widget-title.png</code></strong></em>)',

	'leftWidgetTitleBgImageRepeat' => 'Left Widget Background Image Repeat ## possible values -> repeat, repeat-x, repeat-y, no-repeat. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-repeat.html">Help!</a>',

	'leftWidgetTitleFontColor' => 'Left Widget Title Font Color ## (eg. #773339). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'leftWidgetBorderColor' => 'Left Widget Border Color ## (eg. #AAAAAA). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'rightWidgetTitleBgColor' => 'Right Widget Title Background Color ## (eg. #EFEEF5). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'rightWidgetTitleBgImage' => 'Right Widget Title Background Image ## (eg. <em><strong><code>images/left-right-widget-title.png</code></strong></em>)',

	'rightWidgetTitleBgImageRepeat' => 'Right Widget Background Image Repeat ## possible values -> repeat, repeat-x, repeat-y, no-repeat. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-repeat.html">Help!</a>',

	'rightWidgetTitleFontColor' => 'Right Widget Title Font Color ## (eg. #3366CC). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'rightWidgetBorderColor' => 'Right Widget Border Color ## (eg. #AAAAAA). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'centerWidgetTitleBgColor' => 'Center Widget Title Background Color ## (eg. #C5C4BC). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'centerWidgetTitleBgImage' => 'Center Widget Title Background Image ## (eg. <em><strong><code>images/center-widget-title.png</code></strong></em>)',

	'centerWidgetTitleBgImageRepeat' => 'Center Widget Background Image Repeat ## possible values -> repeat, repeat-x, repeat-y, no-repeat. <a target="_blank" href="http://www.htmlhelp.com/reference/css/color-background/background-repeat.html">Help!</a>',

	'centerWidgetTitleFontColor' => 'Center Widget Title Font Color ## (eg. #000000). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'centerWidgetBorderColor' => 'Center Widget Border Color ## (eg. #C5C4BC). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	/* Post */
	'postSep' => 'Post {separator}',

	'postTitleFontFamily' => 'Post Title Font Family ## (eg. Geneva, Arial, Helvetica, sans-serif). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-family.html">Help!</a>',

	'postTitleColor' => 'Post Title Color ## (eg. #00000). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	/*
	'postOpacity' => 'Post Opacity ## Sets the opacity of the post. Value can range between 0.0 (completely transparent) to 1.0 (completely opaque). Does not work in IE',
	*/
	'postFontSize' => 'Post Text Font Size ## (eg. 10pt). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-size.html">Help!</a>',

	'postFontWeight' => 'Post Text Font Weight ## (eg. normal). <a target="_blank" href="http://www.htmlhelp.com/reference/css/font/font-weight.html">Help!</a>',

	 /* Blockquote */
	'blockquoteSep' => 'Blockquote {separator}',

	'blockquoteBorderColor' => 'Blockquote Border Color ## (eg. #C5C4BC). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	'blockquoteBgColor' => 'Blockquote Background Color ## (eg. #F8F7EF). <a target="_blank" href="http://www.htmlhelp.com/reference/css/units.html#color">Help!</a>',

	/*
	'setting2' => 'Stuff {textarea|6|50} ## Enter some text',
	'setting3' => 'Choice {radio|choice1|Choice One|choice2|Choice Two} ## Chose one.',
	'setting4' => 'Multiple choice {checkbox|mc1|happy|Are you Happy ?|mc2|human|Are you Human ?} ## Chose any',
	*/
	/*'debug' => 'debug', */  /* this is a fake entry that will activate the "Programmer's Corner"
			 * showing you vars and values while you build your theme. Remove it
			 * when your theme is ready for shipping */
	),
	__FILE__   /* Parent. DO NOT MODIFY THIS LINE !
				* This is used to check which file (and thus theme) is calling
				* the function (useful when another theme with a Theme Toolkit
				* was installed before */
);

/************************************************************************************
 * THEME AUTHOR : Congratulations ! The hard work is all done now :)
 *
 * From now on, you can create functions for your theme that will use the array
 * of variables $mytheme->option. For example there will be now a variable
 * $mytheme->option['your_age'] with value as set by theme end-user in the admin menu.
 ************************************************************************************/

/***************************************
 * Additionnal Features and Functions
 *
 * Create your own functions using the array
 * of user defined variables $mytheme->option.
 *
 **************************************/
/**************************************************************/

define('LEFT', 0);
define('RIGHT', 1);
define('CENTER', 2);

$default = array(
	/* General */
	'externalStyleSheet' => 'FALSE',
	'menuBar' => 'FALSE',
	'recentPostsCnt' => '10',

	/* Page */
	'minWidth' => "750",
	'maxWidth' => "none",
	'bodyBgColor' => '#F5F5F5',
	'bodyColor' => '#929189',
	'bodyFontFamily' => 'Verdana, Arial, Helvetica, sans-serif',

	'bodyBgImage' => 'images/body-bg.jpg',
	'bodyBgImageRepeat' => 'repeat',
	'bodyBgImagePos' => 'top left',

	/* Header */
	'headerHeight' => '124',
	'blogNameColor' => '#3A3B43',
	'blogNameFontFamily' => 'Arial, Helvetica, sans-serif',
	'blogNameFontSize' => '34pt',
	'blogNameFontWeight' => 'bold',
	'blogDescriptionColor' => '#3A3B43',
	'blogDescriptionFontFamily' => 'Verdana, Arial, Helvetica, sans-serif',
	'blogDescriptionFontSize' => '12pt',
	'blogDescriptionFontWeight' => 'normal',
	'headerBgColor' => '#F8F7EF',
	'headerBorderColor' => '#AAAAAA',

	'headerBgImage' => 'images/header-bg.jpg',
	'headerBgImageRepeat' => 'repeat-x',
	'headerBgImagePos' => 'center',

	/* Post */
	'postTitleFontFamily' => 'Geneva, Arial, Helvetica, sans-serif',
	'postTitleColor' => '#000000',
	/* 'postOpacity' => '1.0', */
	'postFontSize' => '10pt',
	'postFontWeight' => 'normal',

	/* Sidebars */
	'leftSidebarWidth' => '150',
	'rightSidebarWidth' => '150',

	/* Widgets */
	'leftWidgetTitleBgColor' => '#293F5E',
	'leftWidgetTitleFontColor' => '#FFFFFF',
	'leftWidgetBorderColor' => '#293F5E',
	'leftWidgetTitleBgImage' => 'images/left-right-widget-title.png',
	'leftWidgetTitleBgImageRepeat' => 'repeat-x',

	'rightWidgetTitleBgColor' => '#293F5E',
	'rightWidgetTitleFontColor' => '#FFFFFF',
	'rightWidgetBorderColor' => '#293F5E',
	'rightWidgetTitleBgImage' => 'images/left-right-widget-title.png',
	'rightWidgetTitleBgImageRepeat' => 'repeat-x',

	'centerWidgetTitleBgColor' => '#C5C4BC',
	'centerWidgetTitleFontColor' => '#000000',
	'centerWidgetBorderColor' => '#C5C4BC',
	'centerWidgetTitleBgImage' => 'images/center-widget-title.png',
	'centerWidgetTitleBgImageRepeat' => 'repeat-x',

	'blockquoteBorderColor' => '#C5C4BC',
	'blockquoteBgColor' => '#F8F7EF'
);

/**************************************************************/

function tiga_getUserAgent()
{
	$useragent = getenv("HTTP_USER_AGENT");

	if (preg_match("/MSIE/i", "$useragent"))
	{
		$result = "IdiotExplorer";
	}
	else if (preg_match("/Mozilla/i", "$useragent"))
	{
		$result = "Mozilla";
	}
	else
	{
		$result = $useragent;
	}

	return $result;
}

/**************************************************************/

function tiga_processValue($key)
{
	global $tiga;

	switch ($key)
	{
		case 'menuBar':
			if (!get_pages(''))
				return false;
			break;
	}
	return $tiga->option[$key];
}

/**************************************************************/

function tiga_getValue($key)
{
	global $tiga;

	switch ($key)
	{
		case 'minWidth':
		case 'maxWidth':
			if (tiga_processValue($key) != 'none')
				print tiga_processValue($key) . 'px';
			else
				print 'none';
			break;

		case 'postOpacity':
			print tiga_getOpacity($key);
			break;

		default:
			print tiga_processValue($key);
			break;
	}
}

/**************************************************************/

function tiga_getOpacity($key)
{
		if (tiga_getUserAgent() == 'IdiotExplorer')
		{
			return 'filter: alpha(opacity=' .
				tiga_processValue($key)*100 . ");\n";
		}
		else
		{
			return '-moz-opacity:' .  tiga_processValue($key) . ";\n" .
						 'opacity:' .  tiga_processValue($key) . ";\n";
		}
}

/**************************************************************/

function tiga_minMaxWidthIeHack()
{
	if (tiga_getUserAgent() != 'IdiotExplorer')
		return;

	/* IE Hack (http://blog.unmatchedstyle.com/hacks/min-width-max-width-re-hacked)- Begin */
	if (strcasecmp(tiga_processValue('minWidth'), 'none') != 0  ||
			strcasecmp(tiga_processValue('maxWidth'), 'none') != 0)
	{
		 echo <<<TEXT
	/* IE Hack (http://blog.unmatchedstyle.com/hacks/min-width-max-width-re-hacked)- Begin */
	width:expression(
TEXT;

		if (strcasecmp(tiga_processValue('maxWidth'), 'none') != 0)
		{
			echo 'document.documentElement.clientWidth > ' . tiga_processValue('maxWidth') . ' ?
				"' . tiga_processValue('maxWidth'). 'px":';
		}
		if (tiga_processValue('min-width') != 'none')
		{
			echo 'document.documentElement.clientWidth < ' . tiga_processValue('minWidth') . ' ?
				"' . tiga_processValue('minWidth'). 'px":' ;
		}
		if (strcasecmp(tiga_processValue('maxWidth'), "none") != 0)
		{
			echo '"89.6%"';
		}
		else
		{
			echo '"99.2%"';
		}

		echo <<<TEXT
	);
	/* IE Hack - End */
TEXT;
	}
	/* IE Hack - End */
}

/**************************************************************/
/* General */
/**************************************************************/

function tiga_ExternalStyleSheet()
{
	global $tiga;

	return tiga_processValue('externalStyleSheet');
}

/**************************************************************/

function tiga_recentPostsCnt()
{
	global $tiga;

	return tiga_processValue('recentPostsCnt');
}

/**************************************************************/
/* HTML Tags */
/**************************************************************/

function tiga_bodyBgColor()
{
	global $tiga;

	print tiga_processValue('bodyBgColor');
}

/**************************************************************/

function tiga_bodyColor()
{
	global $tiga;

	print tiga_processValue('bodyColor');
}

/**************************************************************/
/* Header */
/**************************************************************/

function tiga_headerHeight()
{
	global $tiga;

	print tiga_processValue('headerHeight');
}

/**************************************************************/

function tiga_bgImage($key)
{
	global $tiga;

	// See if image is available
	if (tiga_processValue($key . 'BgImage') != '')
		print 'background-image:url("' . tiga_processValue($key . 'BgImage') . "\");\n";
	else
		return;

	if (tiga_processValue($key . 'BgImageRepeat') != '')
		print 'background-repeat:' . tiga_processValue($key . 'BgImageRepeat') . ";\n";
	if (tiga_processValue($key . 'BgImagePos') != '')
		print 'background-position:' . tiga_processValue($key . 'BgImagePos') . ";\n";
}

/**************************************************************/

function tiga_headerColor()
{
	global $tiga;

	print tiga_processValue('headerColor');
}

/**************************************************************/

function tiga_headerBgColor()
{
	global $tiga;

	print tiga_processValue('headerBgColor');
}

/**************************************************************/

function tiga_headerBorderColor()
{
	global $tiga;

	print tiga_processValue('headerBorderColor');
}

/**************************************************************/
/* Sidebars */
/**************************************************************/

function tiga_sidebarsTop()
{
	global $tiga;

	print tiga_processValue('headerHeight') +
		((tiga_processValue('menuBar') == 'TRUE') ? 53 : 12);
}

/**************************************************************/

function tiga_leftSidebarWidth()
{
	global $tiga;

	print tiga_processValue('leftSidebarWidth');
}

/**************************************************************/

function tiga_rightSidebarWidth()
{
	global $tiga;

	print tiga_processValue('rightSidebarWidth');
}

/**************************************************************/
/* Widgets */
/**************************************************************/

function tiga_leftWidgetWidth()
{
	global $tiga;

	print tiga_processValue('leftSidebarWidth') - 12;
}

/**************************************************************/

function tiga_rightWidgetWidth()
{
	global $tiga;

	print tiga_processValue('rightSidebarWidth') - 12;
}

/**************************************************************/

function tiga_centerWidgetMarginLeft()
{
	global $tiga;

	print tiga_processValue('leftSidebarWidth') + 5;
}

/**************************************************************/

function tiga_centerWidgetMarginRight()
{
	global $tiga;

	print tiga_processValue('rightSidebarWidth') + 5;
}

/**************************************************************/

function tiga_widgetTitleBgColor($where)
{
	global $tiga;

	switch ($where)
	{
		case LEFT:
			print tiga_processValue('leftWidgetTitleBgColor');
			break;
		case RIGHT:
			print tiga_processValue('rightWidgetTitleBgColor');
			break;
		case CENTER:
			print tiga_processValue('centerWidgetTitleBgColor');
			break;
		default:
			//throw new Exception('Bad option');
			break;
	}
}

/**************************************************************/

function tiga_widgetTitleFontColor($where)
{
	global $tiga;

	switch ($where)
	{
		case LEFT:
			print tiga_processValue('leftWidgetTitleFontColor');
			break;
		case RIGHT:
			print tiga_processValue('rightWidgetTitleFontColor');
			break;
		case CENTER:
			print tiga_processValue('centerWidgetTitleFontColor');
			break;
		default:
			//throw new Exception('Bad option');
			break;
	}
}

/**************************************************************/

function tiga_widgetBorderColor($where)
{
	global $tiga;

	switch ($where)
	{
		case LEFT:
			print tiga_processValue('leftWidgetBorderColor');
			break;
		case RIGHT:
			print tiga_processValue('rightWidgetBorderColor');
			break;
		case CENTER:
			print tiga_processValue('centerWidgetBorderColor');
			break;
		default:
			//throw new Exception('Bad option');
			break;
	}
}

/**************************************************************/

// default options :
/* default values upon theme install */
if (!$tiga->is_installed())
{
	$result = $tiga->store_options($default);
}
?>