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

<!-- ########################### The Loop - Begin ################################### -->
<?php if (have_posts()) : ?>
	<!-- If there are any posts, iterate over each post -->
	<?php while (have_posts()) : the_post(); ?>

		<!-- Print the title of the post -->
		<div class="center-widget-title"><?php the_time(_t('F jS, Y')) ?></div>
		<div class="center-widget">
			<div class="clearfix">
				<h2>
					<a class="post-title"
						 href="<?php the_permalink() ?>"
						 rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<!-- Print the time the article was posted -->
				<div class="post-author"><?php _te('By '); the_author(); ?></div>

				<!-- The article content -->
				<div class="post-content">
					<?php the_content(_t('Read the rest of this entry &raquo;')); ?>
				</div> <!-- post-content -->

				<!-- Metadata -->
				<div class="post-metadata">
					<?php _te('Posted in '); the_category(', '); ?> <strong>|</strong>
					<?php edit_post_link(_t('Edit'),'',' <strong>|</strong>'); ?>
					<?php comments_popup_link(_t('No Comments'), _t('1 Comment'), _t('% Comments')); ?>
				</div>
				<!-- Traceback autodiscovery -->
				<!-- <?php trackback_rdf(); ?> -->
			</div> <!-- clearfix -->
		</div> <!-- center-widget -->
	<!-- End of the loop -->
	<?php endwhile; ?>
	<!-- Page Navigation -->
	<?php
		global $wpdb, $posts_per_page, $fromwhere, $matches, $max_num_pages,
					 $request, $posts_per_page;
		if (! is_single()) {
			if (get_query_var('what_to_show') == 'posts') {
				if ( ! isset($max_num_pages) ) {
					preg_match('#FROM (.*) GROUP BY#', $request, $matches);
					$fromwhere = $matches[1];
					$numposts = $wpdb->get_var("SELECT COUNT(ID) FROM $fromwhere");
					$max_num_pages = ceil($numposts / $posts_per_page);
				}
			} else {
				$max_num_pages = 999999;
			}

			if ($max_num_pages > 1) {
	?>
	<div class="center-widget">
		<div class="bottom-page-nav">
			<?php posts_nav_link('', '', _t('&laquo; Previous Entries')); ?>
			<strong> | </strong>
			<?php posts_nav_link('', _t('Next Entries &raquo;'), ''); ?>
		</div>
	</div> <!-- center-widget -->
	<?php
			}
		}
	?>

<!-- If no post is found... -->
<?php else : ?>
	<div class="center-widget-title"><?php _te('Error!'); ?></div>
	<div class="center-widget">
		<h2><?php _te('Not Found'); ?></h2>
		<p><?php _te("Sorry, but you are looking for something that isn't here."); ?></p>
	</div> <!-- center-widget -->
<?php endif; ?>
<!-- ########################### The Loop - End ##################################### -->

<?php get_footer(); ?>