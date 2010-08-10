<?php get_header(); ?>

<?php include ('sidebar2.php'); ?>

	<div id="content" class="narrowcolumn">
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				<!-- THIS IS A GOOD PLACE FOR GOOGLE ADS OR ANY CONTENT THAT SHOULD ALWAYS BE AT THE TOP -->
			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small>Posted <?php the_time('F jS, Y') ?> by <?php the_author_firstname() ?> <?php the_author_lastname() ?><br />
				<strong>Categories:</strong> <?php the_category(', ') ?></small>
				<div class="entry">
					<?php the_content('Read the rest of this post &raquo;'); ?>
				</div>
		
				<p class="postmetadata"><?php edit_post_link('Edit',''); ?> <br /><strong>Comments:</strong> <?php comments_popup_link('Be the first to comment', '1 Comment', '% Comments'); ?></p> 
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		
</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>