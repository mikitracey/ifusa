<?php get_header(); ?>
 
<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
     
	  <div class="post">
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( __('go read %s','lush'), get_the_title()) ?>"><?php the_title(); ?></a> <?php edit_post_link('<img src="'.get_bloginfo(template_directory).'/_img/pencil.png" alt="Edit Link" />','<span class="editlink">','</span>'); ?></h2>
  
		<div class="postcontent">
		  <p class="auth"><?php if (function_exists('time_since')) { ?> <?printf( __('Posted by %1$s %2$s ago','lush'), get_the_author(), time_since(abs(strtotime($post->post_date_gmt . " GMT")), time())) ?> <? } else { ?> <?php printf( __('Posted by %1$s at %2$s','lush'), get_the_author(), get_the_time(__('F jS, Y','lush'))); } ?></p>

		  <?php the_content(); ?>
		</div>

		<p class="meta"><?php _e('Posted in','lush'); ?> <?php the_category(', ') ?><strong>|</strong>&nbsp;<?php if(function_exists('UTW_ShowTagsForCurrentPost')) { ?> <?php _e('Tags:','lush'); ?> <?php UTW_ShowTagsForCurrentPost("commalist"); ?> <strong>|</strong>&nbsp;<?php } ?><?php comments_popup_link( __('No Comments','lush'), __('1 Comment','lush'), __('% Comments','lush')); ?>&nbsp;<strong>|</strong>&nbsp;<!--TRACKBACKS!!! --></p>
	  </div>

<?php endwhile; endif; ?>
 
	  <p id="pagination"><?php posts_nav_link(' | ','&laquo; '.__('Previous Postings','lush'), __('Next Postings','lush') . ' &raquo;') ?></p>

      <a id="naughty" href="javascript:void(null);" onclick="wtyl('on');" onmouseout="wtyl('off');">&nbsp;</a>

      <div style="visibility: hidden;" id="wtyl">&nbsp;</div>
    </div>

 <?php get_sidebar(); ?>
    
 <?php get_footer(); ?>






