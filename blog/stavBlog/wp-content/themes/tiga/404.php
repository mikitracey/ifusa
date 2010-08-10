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

get_header();
get_sidebar();
?>

<div class="center-widget-title"><?php _te('Error'); ?></div>
<div class="center-widget">
	<h2><?php _te('The page you requested is no longer here'); ?> <small>[<?php _te('error 404'); ?>]</small></h2>
	<p>
		<?php _te('Go to'); ?><a href="<?php bloginfo('url'); ?>"
						 title="Go to the home page of <?php bloginfo('name'); ?>"> <?php _te('Home Page'); ?></a>
	</p>
</div> <!-- center-widget -->

<?php get_footer(); ?>