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

/*******************************************************************************
 *
 * Localisation functions
 *
 ******************************************************************************/

function _t($str)
{
	return __($str, 'tiga');
}

function _te($str)
{
	_e($str, 'tiga');
}

/*******************************************************************************
 *
 * Sidebars widget
 *
 ******************************************************************************/

/*
 * Override the default 'Links' widget
 */
function tiga_links_widget($args)
{
	global $wpdb;
	extract($args);

	/* Links from the 'Links Manager' */
	$link_cats = $wpdb->get_results('SELECT cat_id, cat_name FROM ' . $wpdb->categories . ' WHERE link_count > 0');
	foreach ($link_cats as $link_cat)
	{
			echo '<li class="left-wp-widget %2$s">' .
					 $before_title . $link_cat->cat_name . $after_title .
					 '<ul>';
			wp_get_links($link_cat->cat_id);
			echo '</ul>'.
					 $after_widget;
	}
}

/*
 * Override the default 'Pages' widget
 */
function tiga_pages_widget($args)
{
	extract($args);

	$options = get_option('widget_pages');
	if (get_pages(''))
	{
		$title = empty($options['title']) ? __('Pages') : $options['title'];
		echo $before_widget .
				 $before_title . $title . $after_title .
				 '<ul>';

		wp_list_pages('sort_column=menu_order&title_li=');
		echo '</ul>'.
				 $after_widget;
	}
}

if (function_exists('unregister_sidebar_widget'))
{
	unregister_sidebar_widget(_t('Links'));
	unregister_sidebar_widget(_t('Pages'));
}

if (function_exists('register_sidebar_widget'))
{
	register_sidebar_widget(_t('Links'), 'tiga_links_widget');
	register_sidebar_widget(_t('Pages'), 'tiga_pages_widget');
}

if (function_exists('register_sidebar'))
{
	register_sidebar(array('name' => 'Tiga Left Sidebar',
												 'before_widget' => '<li id="%1$s" class="left-wp-widget %2$s">',
												 'after_widget' => '</li>'));

	register_sidebar(array('name' => 'Tiga Right Sidebar',
												 'before_widget' => '<li id="%1$s" class="right-wp-widget %2$s">',
												 'after_widget' => '</li>'));
}
?>