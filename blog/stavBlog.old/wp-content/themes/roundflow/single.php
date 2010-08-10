<?php get_header(); ?>

<div id="maincontent">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="postinfo"><a href="<?php the_permalink(); ?>"><?php comments_number('Comments: 0', 'Comments: 1', 'Comments: %'); ?></a> - Date: <?php the_time('F jS, Y') ?> - Categories: <?php the_category(', ') ?></p>
        <div class="postcontent">
        <?php the_content(''); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

<div id="comments">
<?php comments_template(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>