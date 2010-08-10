<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="post">
		<h3 class="posth3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content(''); ?>
		<p class="postdata">Filed by <?php the_author(); ?> at <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?></p>
    </div>
	
	
	<div id="commentwrapper">
	<?php comments_template(); ?>
	</div>
		
<?php endwhile; endif; ?>

<?php get_footer(); ?>