	<div id="description"><?php bloginfo('description'); ?></div>
	<div id="sidebar">

		<ul>
			<li><h2>Categories</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home()) { ?>				
				<?php get_links_list(); ?>
				
			<?php } ?>
			

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			
			<li>
				<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="sidebarsubmit" value="Search" />
				</div>
				</form>
			</li>				
			
		</ul>
	</div>

