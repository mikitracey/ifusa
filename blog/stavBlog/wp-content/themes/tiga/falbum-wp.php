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

<script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/falbum.js"></script>
<script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/overlib.js"></script>

<div class="center-widget">
	<div class="clearfix">
		<?php fa_show_photos($_GET['album'], $_GET['photo'], $_GET['page'], $_GET['tags'], $_GET['show']); ?>
	</div>
</div>

<?php get_footer(); ?>