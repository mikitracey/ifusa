<div id="sidebar">
	<?php if(is_home()) {
		$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
		if (0 < $numposts) $numposts = number_format($numposts); 

		$numcmnts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");
		if (0 < $numcmnts) $numcmnts = number_format($numcmnts);
	?>	
	<h2><?php _e('About'); ?></h2>
	<div class="block">
		<p><strong><?php bloginfo('name');?></strong><br/>
		<?php bloginfo('description');?><br/>
		There are <?php echo $numposts; ?> posts and <?php echo $numcmnts ;?> comments so far.</p>
	</div>
	<?php }?>
	<?php global $sub_pages; if ($sub_pages <> "" ){ ?>
		<h2>Sub Pages</h2>
		<ul><?php echo $sub_pages ?></ul>
	<?php }?>		
	<h2><?php _e('Search'); ?></h2>
	<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
		<input type="text" name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>" size="15" />
		<input id="btnSearch" type="submit" name="submit" value="<?php _e('Search'); ?>" />
	</form>
	<h2><?php _e('Tags'); ?></h2>
	<ul>
		<?php list_cats(0, '', 'name', 'ASC', '/', true, 0, 1);    ?>
	</ul>		
	<h2><?php _e('Archives'); ?></h2>
	<ul><?php wp_get_archives('type=monthly'); ?></ul>
	<h2>Pages</h2>
	<ul><?php wp_list_pages('title_li=' ); ?></ul>

	<?php if(is_home()) {?>
		<h2>Links</h2>
		<ul><?php get_links_list('name'); ?> </ul>

		<h2>Feed on RSS</h2>
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Posts</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>			
		</ul>
		<h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>	
	<?php }?>
	
</div>