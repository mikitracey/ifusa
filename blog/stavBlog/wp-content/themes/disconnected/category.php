	<?php get_header();?>	
	<div id="main">
	<div id="content">
		<?php if ($posts) { ?>
			<h3><?php echo single_cat_title(); ?></h3>
			<div class="post-info"><?php _e('Archived Posts from this Category'); ?></div>		
			<br/>				
			<?php foreach ($posts as $post) : start_wp(); ?>				
				<div class="post">
					<?php require('post.php'); ?>
					<?php comments_template(); // Get wp-comments.php template ?>
				</div>
			<?php endforeach; ?>
			<p align="center"><?php posts_nav_link() ?></p>		
		<?php } else { ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php } ?>
			
	</div>
	<div id="sidebar">	
<h2><?php _e('Elsewhere'); ?></h2>	
		<?php get_sidebar(); ?>
	</div>
<?php get_footer()?>
</div>
</div>
</body>
</html>