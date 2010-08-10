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
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div id="content" class="center-widget">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="clearfix" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="post-content">
					<?php the_content(_t('<p class="serif">Read the rest of this page &raquo;</p>')); ?>
					<?php link_pages(_t('<p><strong>Pages:</strong> '), '</p>', 'number'); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link(_t('Edit this entry.'), '<p>', '</p>'); ?>
	</div>
<?php get_footer(); ?>