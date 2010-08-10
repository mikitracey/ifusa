<?php get_header(); ?>

<div id="maincontent">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="postinfo">Author: <?php the_author(); ?> - Date: <?php the_time('F jS, Y') ?></p>
        <div class="postcontent">
        <?php the_content(''); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>