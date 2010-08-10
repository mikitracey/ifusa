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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="center-widget-title"><?php _te('Prev/Next Posts'); ?></div>
	<div class="center-widget">
		<div class="top-page-nav">
			<?php previous_post('&laquo; % <strong>|</strong> ', '', 'yes'); ?>
			<a href="<?php bloginfo('url'); ?>"><?php _te('Home'); ?></a>
			<?php next_post(' <strong>|</strong> % &raquo; ', '', 'yes'); ?>
		</div> <!-- top-page-nav -->
	</div> <!-- center-widget -->

	<div class="center-widget-title"><?php the_time(_t('l, F jS, Y')) ?> <?php _te('at'); ?> <?php the_time() ?></div>
	<div class="center-widget">
		<div class="clearfix">
			<div id="post-<?php the_ID(); ?>">

			<h2>
				<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php _te('Permanent Link to '); the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<div class="post-author"><?php _te('By '); the_author(); ?></div>

			<div class="post-content"><?php the_content('<p class="serif">' . _t('Read the rest of this entry') . '&raquo;</p>'); ?></div>

			<?php link_pages('<p><strong>' . _t('Pages') . ':</strong> ', '</p>', _t('number')); ?>

			<div class="single-post-metadata">
				<?php
					_te('This entry is filed under '); the_category(', '); echo('. ');
					$url = comments_rss('');
					printf(_t('You can follow any responses to this entry through the %s feed.'),
								 "<a href=\"$url\">RSS 2.0</a>");
					echo(' ');
					if (('open' == $post-> comment_status) && ('open' == $post->ping_status))
					{
						// Both Comments and Pings are open
						printf(_t('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.'),
						trackback_url(false));
					}
					elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status))
					{
						// Only Pings are Open
						printf(_t('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.'),
						trackback_url(false));
					}
					elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status))
					{
						// Comments are open, Pings are not
						_te('You can skip to the end and <a href="#respond">leave a response</a>. Pinging is currently not allowed.');
					}
					elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status))
					{
						// Neither Comments, nor Pings are open
						_te('Both comments and pings are currently closed.');
					}
					echo ' ';
					edit_post_link(_t('Edit this entry.'),'','');
				?>
			</div> <!-- single-post-metadata -->
			</div> <!-- clearfix -->
	</div>  <!-- center-widget -->

	</div>  <!-- post-id -->

	<?php
		/* This is only for my own use and can be safely deleted */
		if (function_exists('saasmp_wp_post_single'))
			saasmp_wp_post_single();
	?>

	<?php comments_template(); ?>

<?php endwhile; else: ?>
	<div class="center-widget-title"><?php _te('Error!'); ?></div>
	<div class="center-widget">
		<p><?php _te('Sorry, no posts matched your criteria.'); ?></p>
	</div> <!-- center-widget -->
<?php endif; ?>

<?php get_footer(); ?>