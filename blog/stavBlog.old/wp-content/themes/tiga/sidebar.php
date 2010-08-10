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

function has_dynamic_sidebar($name) {
	if (!function_exists('dynamic_sidebar'))
		return false;

	global $registered_sidebars, $registered_widgets;

	$index = sanitize_title($name);

	$sidebars_widgets = get_option('sidebars_widgets');

	$sidebar = $registered_sidebars[$index];

	if ( empty($sidebar) || !is_array($sidebars_widgets[$index]) || empty($sidebars_widgets[$index]) )
		return false;

	$did_one = false;
	foreach ( $sidebars_widgets[$index] as $name ) {
		$callback = $registered_widgets[$name]['callback'];

		if ( is_callable($callback) ) {
			$did_one = true;
		}
	}

	return $did_one;
}
?>

<!-- ##################################### Begin - Left Sidebar ##################### -->

<?php if (has_dynamic_sidebar('Tiga Left Sidebar')) { ?>
	<ul class="left-sidebar">
		<?php dynamic_sidebar("Tiga Left Sidebar"); ?>
	</ul>
<?php } else { ?>
	<div class="left-sidebar">

		<!-- Begin - Pages -->
		<?php if (tiga_processValue('menuBar') != 'TRUE' && get_pages('')) { ?>
			<div class="left-widget-title"><?php _te('Pages'); ?></div>
			<div class="left-widget">
				<ul>
					<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
				</ul>
			</div>
		<?php } ?>
		<!-- End - Pages -->

		<!-- Begin - Misc. Widgets -->
		<!-- This is just for my personal use, can be safely deleted -->
		<?php if (function_exists('saasmp_wp_left_sidebar')) saasmp_wp_left_sidebar(); ?>
		<!-- End - Misc. Widgets -->

		<!-- Begin - Categories -->
		<div class="left-widget-title"><?php _te('Categories'); ?></div>
		<div class="left-widget">
			<ul><?php wp_list_cats('sort_column=name&optioncount=1'); ?></ul>
		</div>
		<!-- End - Categories -->

		<!-- Begin - Archives -->
		<div class="left-widget-title"><?php _te('Archives'); ?></div>
			<div class="left-widget">
				<ul><?php get_archives('monthly', '', 'html', '', '', TRUE); ?></ul>
			</div>
		<!-- End - Archives -->

		<!-- Begin - Calender -->
		<div class="left-widget-title"><?php _te('Calendar'); ?></div>
		<div class="left-widget"><?php get_calendar(); ?></div>
		<!-- End - Calender -->

		<!-- Begin - Links from the 'Links Manager'-->
		<?php
			$link_cats = $wpdb->get_results('SELECT cat_id, cat_name FROM ' . $wpdb->categories . ' WHERE link_count > 0');
			foreach ($link_cats as $link_cat) {
		?>
			<div class="left-widget-title"
					 id="linkcat-<?php echo $link_cat->cat_id; ?>">
					 <?php echo $link_cat->cat_name; ?>
			</div>
			<div class="left-widget">
				<ul>
					<?php	wp_get_links($link_cat->cat_id); ?>
				</ul>
			</div>
		<?php
			}
		?>
		<!-- End - Links from the 'Links Manager'-->

		<!-- Begin - Misc. Widgets -->
		<!-- This is just for my personal use, can be safely deleted -->
		<?php
		if (function_exists('saasmp_wp_left_sidebar_misc'))
			saasmp_wp_left_sidebar_misc();
		?>
		<!-- End - Misc. Widgets -->

	</div> <!-- left-sidebar -->
<?php } ?> <!-- End checking of 'dynamic_sidebar' -->

<!-- ##################################### End - Left Sidebar ####################### -->

<!-- ##################################### Begin - Right Sidebar #################### -->

<?php if (has_dynamic_sidebar('Tiga Right Sidebar')) { ?>
	<ul class="right-sidebar">
		<?php dynamic_sidebar("Tiga Right Sidebar"); ?>
	</ul>
<?php } else { ?>
	<div class="right-sidebar">

		<!-- Begin - Search -->
		<div class="right-widget-title"><?php _te('Search'); ?></div>
		<div class="right-widget"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
		<!-- End - Search -->

		<!-- Begin - Recent Posts -->
		<div class="right-widget-title"><?php _te('Recent Posts'); ?></div>
		<div class="right-widget">
			<ul><?php get_archives('postbypost',tiga_recentPostsCnt(),'custom','<li>','</li>'); ?></ul>
		</div>
		<!-- End - Recent Posts -->

		<!-- Begin - Paypal -->
		<!-- This is just for my personal use, can be safely deleted -->
		<?php if (function_exists('saasmp_wp_paypal') && is_single('31')) saasmp_wp_paypal(); ?>
		<!-- End - Paypal -->

		<!-- Begin - Misc. Widgets -->
		<!-- This is just for my personal use, can be safely deleted -->
		<?php if (function_exists('saasmp_wp_right_sidebar')) saasmp_wp_right_sidebar(); ?>
		<!-- End - Misc. Widgets -->


		<!-- Begin - Meta -->
		<?php //if ( is_home() || is_page() ) { ?>
			<div class="right-widget-title"><?php _te('Meta'); ?></div>
			<div class="right-widget">
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
			</div> <!-- right-widget -->
		<?php //} ?>
		<!-- End - Meta -->

	</div> <!-- right-sidebar -->
<?php } ?> <!-- End checking of 'dynamic_sidebar' -->

<!-- ##################################### End - Right Sidebar ###################### -->