<?php get_header(); ?>

	<div id="content">

		<div id="left_side">&nbsp;</div>
		<div id="right_side">&nbsp;</div>
		<div id="inner_content">
			<?php get_sidebar(); ?>
			<div id="text">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post_header">
					<?php edit_post_link("[ edit ]", "<span class='admin_edit_link'>","</span>"); ?>
					<a class="post_title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
					<div class="post_date">&nbsp;</div>
				</div>
				<div class="post_content">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<div class="post_footer">&nbsp;</div>
			</div>

	  <?php endwhile; endif; ?>
			</div>
			<div class="visual_clear"></div>
		</div>
	</div>

<?php get_footer(); ?>