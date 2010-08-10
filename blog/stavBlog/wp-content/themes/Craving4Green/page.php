<?php get_header(); ?>
<div id="main">
		<div id="content">
			<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
			<div class="post">	
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="day-date">Created by <em><?php the_author_posts_link() ?></em> on <em><?php the_time('d M Y'); ?></em> | Tagged as: <em><?php the_category(', ') ?></em> <?php edit_post_link(); ?></p>
				<div class="post-content">
					<?php the_content('Continue Reading &#187;'); ?>
					<?php $c4g_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
					<?php if ($c4g_pages <> "" ){?>
					<small>Please see the sidebar for other sub pages.</small>
					<?php }?>
				<p class="post-info">
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
			<?php comments_template(); ?>
		</div>
			<?php endforeach; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php  endif; ?>
		<p align="center"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>