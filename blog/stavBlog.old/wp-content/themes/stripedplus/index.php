<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="post">
		<h2 class="posth2"><?php the_date(); ?></h2>
		<h3 class="posth3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content(''); ?>
		<p class="postdata">Filed by <?php the_author(); ?> at <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?><br /><a href="<?php the_permalink(); ?>"><?php comments_number('No comments on this post yet', '1 person have commented this post', '% persons have commented this post'); ?></a></p>
		</div>

<?php endwhile; endif; ?>

	<div class="postsnav"><?php posts_nav_link(); ?></div>

<?php get_footer(); ?>