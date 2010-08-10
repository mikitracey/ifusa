</div>
<div id="sidebar-1" class="sidebar">
<ul>
	 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

	<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>
	
	<li>
		<h2><?php _e('Archives'); ?></h2>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
	
	<li>
		<h2><?php _e('Categories'); ?></h2>
		<ul>
		<?php wp_list_cats(); ?> 
		</ul>
	</li>
	<?php get_links_list(); ?>
	<?php endif; ?>
      <li>
		<h2><?php _e('Search'); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>
</ul>
</div>
<div id="sidebar-2" class="sidebar">
<ul>
 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
	<li>
	<h2><?php _e('About'); ?></h2>
	<p><?php bloginfo('description'); ?></p>
	</li>
	<li>
	<h2><?php _e('Meta'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="http://wordpress.org" title="<?php _e('Powered by Wordpress, state-of-the-art semantic personal publishing platform.'); ?>">Wordpress</a></li>
			<?php wp_meta(); ?>
		</ul>
	</li>
	<?php endif; ?>
	<li>
	<h2><?php _e('Credits'); ?></h2>
	      <p><a href="http://oriol.f2o.org/qwilm-a-wordpress-theme/" title="Qwilm!">Qwilm!</a> Theme by <a href="http://oriol.f2o.org" title="oriol">oriol</a>, css design by <a href="http://www.huddletogether.com" title="huddle together">Lokesh Dhakar</a>.</p><!-- some credits -->
	</li>
</ul>
</div>
<div id="logo" class="sidebar">
		<div align="center">
			<a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes_qwilm/logo.gif" alt="Quilm!" /></a>
		</div>
</div>
