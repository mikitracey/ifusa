<div class="barmenuleft">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Left') ) : ?>
            <h3>Archives</h3>
            <ul>
            <?php get_archives('monthly', '10', 'html', '', ''); ?>
            </ul>
            
            <h3>10 most commented</h3>
            <ul>
            <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10");
            foreach ($result as $topten) {
            $postid = $topten->ID;
            $title = $topten->post_title;
            $commentcount = $topten->comment_count; 
            if ($commentcount != 0) {
            ?>
<li><a href="<?php echo get_permalink($postid); ?>"><?php echo $title ?> (<?php echo $commentcount ?>)</a></li>
            <?php } } ?>
</ul>

            <h3>Latest 10 posts</h3>
            <ul>
            <?php get_archives('postbypost','10','custom','<li>','</li>'); ?>
            </ul>
<?php endif; ?>
		</div>
        <div class="barmenuright">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Right') ) : ?>
            <h3>Blogroll</h3>
            <ul>
            <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, 
FALSE, -1, FALSE); ?>
            </ul>
<?php endif; ?>
        </div>
