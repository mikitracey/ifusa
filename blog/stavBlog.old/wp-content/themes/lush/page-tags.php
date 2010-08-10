<?php /* Template Name: Tag Archive */ ?>

<?php get_header(); ?>
 
<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
     
	  <div class="post">
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf(__('go read %s','lush'), get_the_title()) ?>"><?php the_title(); ?></a></h2>
  
		<div class="postcontent">
		
		  <p><?php printf(__('The following is a list of the tags used at %s, \'weighed\' in relation to their relative usage.','lush'), get_bloginfo('name')) ?></p>
		  <?php UTW_ShowWeightedTagSetAlphabetical("sizedtagcloud","",0) ?>
		</div>

	  </div>


<?php endwhile; endif; ?>

      <a id="naughty" href="javascript:void(null);" onclick="wtyl('on');" onmouseout="wtyl('off');">&nbsp;</a>

      <div style="visibility: hidden;" id="wtyl">&nbsp;</div>
    </div>

 <?php get_sidebar(); ?>
    
<?php get_footer(); ?>




